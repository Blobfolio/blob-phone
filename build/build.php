<?php
//---------------------------------------------------------------------
// Compile Phone Formatting Metadata
//---------------------------------------------------------------------
// blob-common v7x
// https://github.com/Blobfolio/blob-common
//
// This build script will download phone formatting metadata from
// libphonenumber and save it in a more easily parsable way for our
// limited purposes.
//
// REQUIREMENTS:
//   -- PHP 7.0
//   -- UNIX
//   -- CURL
//   -- MBSTRING
//   -- DOM
//
// Copyright © 2017  Blobfolio, LLC  (email: hello@blobfolio.com)



//-------------------------------------------------
// Setup/Env

define('BUILD_PATH', dirname(__FILE__));
define('SRC_PATH', BUILD_PATH . '/src');
define('DIST_PATH', dirname(BUILD_PATH) . '/lib/blobfolio/phone/data');

//load the bootstrap
@require_once(dirname(dirname(__FILE__)) . '/lib/vendor/autoload.php');

define('TERRITORY_DEFAULT', array(
	'code'=>'',
	'prefix'=>0,
	'region'=>'',
	'patterns'=>array(),
	'types'=>array(),
	'formats'=>array()
));

define('TYPE_MAP', array(
	'fixed'=>'fixedLine',
	'mobile'=>'mobile',
	//'pager'=>'pager',
	'personal_number'=>'personalNumber',
	'premium_rate'=>'premiumRate',
	'shared_cost'=>'sharedCost',
	'toll_free'=>'tollFree',
	//'uan'=>'uan',
	'voicemail'=>'voicemail',
	'voip'=>'voip'
));

define('XML_REMOTE', 'https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml');
define('XML_LOCAL', SRC_PATH . '/phonenumbers.xml');

$data = array();
$prefixes = array();
$regions = array();

$start = microtime(true);



//-------------------------------------------------
// Debug Stdout
//
// @param line
// @param dividers
// @return n/a
function debug_stdout(string $line='', bool $dividers=false) {
	if ($dividers) {
		echo str_repeat('-', 50) . "\n";
	}
	echo "$line\n";
	if ($dividers) {
		echo str_repeat('-', 50) . "\n";
	}
}



//-------------------------------------------------
// Recursive Rm
//
// @param dir/file
// @return true
function recursive_rm(string $path='') {
	if (false === $path = realpath($path)) {
		return false;
	}

	$path = rtrim($path, '/');

	//this must be below the build directory, and not this script
	if (mb_substr($path, 0, mb_strlen(BUILD_PATH) + 1) !== BUILD_PATH . '/' || $path === BUILD_PATH || $path === __FILE__) {
		return false;
	}

	//files are easy
	if (is_file($path)) {
		@unlink($path);
	}
	//directories require recursion
	elseif ($handle = opendir($path)) {
		while (false !== ($file = readdir($handle))) {
			if (in_array($file, array('.', '..'))) {
				continue;
			}

			recursive_rm("$path/$file");
		}
		@rmdir($path);
	}
}



//-------------------------------------------------
// Batch Fetch
//
// @param URLs
// @return data
function fetch_urls(array $urls=array()) {
	$fetched = array();

	//bad start...
	if (!count($urls)) {
		return $fetched;
	}

	//loosely filter URLs
	foreach ($urls as $k=>$v) {
		$urls[$k] = filter_var($v, FILTER_SANITIZE_URL);
		if (!preg_match('/^https?:\/\//', $urls[$k])) {
			unset($urls[$k]);
		}
	}

	$urls = array_chunk($urls, 25);

	foreach ($urls as $chunk) {
		$multi = curl_multi_init();
		$curls = array();

		//set up curl request for each site
		foreach ($chunk as $url) {
			$curls[$url] = curl_init($url);

			curl_setopt($curls[$url], CURLOPT_HEADER, false);
			curl_setopt($curls[$url], CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curls[$url], CURLOPT_TIMEOUT, 10);
			curl_setopt($curls[$url], CURLOPT_USERAGENT, 'blob-mimes');
			curl_setopt($curls[$url], CURLOPT_FOLLOWLOCATION, true);

			curl_multi_add_handle($multi, $curls[$url]);
		}

		//process requests
		do {
			curl_multi_exec($multi, $running);
			curl_multi_select($multi);
		} while ($running > 0);

		//update information
		foreach ($chunk as $url) {
			$fetched[$url] = (int) curl_getinfo($curls[$url], CURLINFO_HTTP_CODE);
			if ($fetched[$url] >= 200 && $fetched[$url] < 400) {
				$fetched[$url] = curl_multi_getcontent($curls[$url]);
			}
			curl_multi_remove_handle($multi, $curls[$url]);
		}

		curl_multi_close($multi);
	}

	return $fetched;
}



//-------------------------------------------------
// Array to PHP Code
//
// @param var
// @param indents
// @return string
function array_to_php($var, int $indents=1) {
	if (!is_array($var) || !count($var)) {
		return '';
	}

	$out = array();
	$array_type = \blobfolio\common\cast::array_type($var);
	foreach ($var as $k=>$v) {
		$line = str_repeat("\t", $indents);
		if ($array_type !== 'sequential') {
			if (is_numeric($k)) {
				$line .= "$k=>";
			}
			else {
				$line .= "'$k'=>";
			}
		}
		if (is_array($v)) {
			$line .= 'array(' . array_to_php($v, $indents + 1) . ')';
		}
		elseif (is_numeric($v)) {
			$line .= $v;
		}
		else {
			$line .= "'$v'";
		}
		$out[] = $line;
	}

	return "\n" . implode(",\n", $out) . "\n" . str_repeat("\t", $indents - 1);
}



//-------------------------------------------------
// Begin!

//if (file_exists(SRC_PATH)) {
//	recursive_rm(SRC_PATH);
//}
//mkdir(SRC_PATH, 0755);



//-------------------------------------------------
// Download!

debug_stdout('Compiling', true);

//get source data
if (file_exists(XML_LOCAL)) {
	debug_stdout('   ++ Reading source data from local copy...');
	$xml = array(XML_REMOTE=>@file_get_contents(XML_LOCAL));
}
else {
	$urls = array(XML_REMOTE);
	debug_stdout('   ++ Downloading source data...');
	$xml = fetch_urls($urls);

	if (is_int($xml[XML_REMOTE])) {
		debug_stdout('      ++ ERROR retrieving ' . basename(XML_REMOTE));
		exit;
	}

	//save it
	debug_stdout('   ++ Saving local copy...');
	@file_put_contents(XML_LOCAL, $xml[XML_REMOTE]);
}



//-------------------------------------------------
// Parse!

libxml_use_internal_errors(true);
$dom = new \DOMDocument('1.0', 'UTF-8');
$dom->loadXML($xml[XML_REMOTE]);

//we want territories
$territories = $dom->getElementsByTagName('territory');
if (!$territories->length) {
	debug_stdout('   ++ Invalid data...');
	exit;
}

debug_stdout('   ++ Parsing data...');
foreach ($territories as $territory) {
	$out = TERRITORY_DEFAULT;
	$out['code'] = $territory->getAttribute('id');
	$out['prefix'] = (int) $territory->getAttribute('countryCode');

	//bad match?
	if (!preg_match('/^[A-Z]{2}$/', $out['code']) || !$out['prefix']) {
		continue;
	}

	//find patterns
	$patterns = $territory->getElementsByTagName('nationalNumberPattern');
	if (!$patterns->length) {
		continue;
	}
	foreach ($patterns as $pattern) {
		$p = preg_replace('/\s/', '', $pattern->nodeValue);
		if (!strlen($p)) {
			continue;
		}

		$type = $pattern->parentNode->tagName;
		if ($type === 'generalDesc') {
			if (!in_array($p, $out['patterns'])) {
				$out['patterns'][] = $p;
			}
		}
		elseif (false !== $nice = array_search($type, TYPE_MAP)) {
			if (!isset($out['types'][$p])) {
				$out['types'][$p] = array();
			}
			$out['types'][$p][] = $nice;
		}
	}

	if (!count($out['patterns'])) {
		continue;
	}

	//sort our types
	foreach ($out['types'] as $k=>$v) {
		sort($out['types'][$k]);
		$out['types'][$k] = array_unique($out['types'][$k]);
	}

	if (!count($out['types'])) {
		continue;
	}

	//lastly, formatting patterns
	$formats = $territory->getElementsByTagName('numberFormat');
	if ($formats->length) {
		foreach ($formats as $format) {
			$pattern = preg_replace('/\s/', '', $format->getAttribute('pattern'));
			if (!strlen($pattern)) {
				continue;
			}

			//try international format first
			$f = $format->getElementsByTagName('intlFormat');
			if ($f->length && false !== \blobfolio\common\mb::strpos($f->item(0)->nodeValue, '$')) {
				$out['formats'][$pattern] = $f->item(0)->nodeValue;
				continue;
			}

			$f = $format->getElementsByTagName('format');
			if ($f->length && false !== \blobfolio\common\mb::strpos($f->item(0)->nodeValue, '$')) {
				$out['formats'][$pattern] = $f->item(0)->nodeValue;
				continue;
			}
		}
	}

	$out['region'] = isset(\blobfolio\common\constants::COUNTRIES[$out['code']]) ? \blobfolio\common\constants::COUNTRIES[$out['code']]['region'] : false;

	$data[$out['code']] = $out;

	//add it to the prefix list
	if (!isset($prefixes[$out['prefix']])) {
		$prefixes[$out['prefix']] = array();
	}

	$main = $territory->getAttribute('mainCountryForCode');
	if ($main === 'true') {
		array_unshift($prefixes[$out['prefix']], $out['code']);
	}
	else {
		$prefixes[$out['prefix']][] = $out['code'];
	}

	//and the region list
	if ($out['region']) {
		if (!isset($regions[$out['region']])) {
			$regions[$out['region']] = array();
		}

		$regions[$out['region']][] = $out['code'];
	}
}

//real quick, run through data and add formatting rules to NANPA territories
foreach ($data as $k=>$v) {
	if ($k === 'US' || $v['prefix'] !== 1) {
		continue;
	}

	$data[$k]['formats'] = $data['US']['formats'];
}

//also, clean up regions
ksort($regions);
foreach ($regions as $k=>$v) {
	sort($regions[$k]);
}



//-------------------------------------------------
// Clean Up!

debug_stdout('');
debug_stdout('Saving', true);

debug_stdout('   ++ Removing old classes...');
if ($handle = opendir(DIST_PATH)) {
	while (false !== ($file = readdir($handle))) {
		if (preg_match('/^data[A-Z]{2}\.php$/', $file)) {
			@unlink(DIST_PATH . "/$file");
		}
	}
	closedir($handle);
}

debug_stdout('   ++ Generating new classes...');
ksort($data);
foreach ($data as $k=>$v) {
	$content = "<?php\n// @codingStandardsIgnoreFile\n//" . str_repeat('-', 70);
	$content .= "\n// DATA: $k\n//" . str_repeat('-', 70);
	$content .= "\n// generated: " . date('Y-m-d H:i:s');
	$content .= "\n\n\nnamespace blobfolio\\phone\\data;\n\nclass data$k extends data {\n\n";
	$content .= "\tconst CODE = '$k';\n\n";
	$content .= "\tconst PREFIX = {$v['prefix']};\n\n";
	$content .= "\tconst REGION = '{$v['region']}';\n\n";
	$content .= "\tconst PATTERNS = array(" . array_to_php($v['patterns'], 2) . ");\n\n";
	$content .= "\tconst TYPES = array(" . array_to_php($v['types'], 2) . ");\n\n";
	$content .= "\tconst FORMATS = array(" . array_to_php($v['formats'], 2) . ");\n\n";
	$content .= "}\n?>";

	@file_put_contents(DIST_PATH . "/data$k.php", $content);
}

ksort($prefixes);
$content = "<?php\n// @codingStandardsIgnoreFile\n//" . str_repeat('-', 70);
$content .= "\n// DATA: Prefixes\n//" . str_repeat('-', 70);
$content .= "\n// generated: " . date('Y-m-d H:i:s');
$content .= "\n\n\nnamespace blobfolio\\phone\\data;\n\nclass prefixes {\n\n";
$content .= "\tconst PREFIXES = array(" . array_to_php($prefixes, 2) . ");\n\n";
$content .= "\tconst REGIONS = array(" . array_to_php($regions, 2) . ");\n\n";
$content .= "\tconst COUNTRIES = array(" . array_to_php(array_keys($data), 2) . ");\n\n";
$content .= "}\n?>";
@file_put_contents(DIST_PATH . '/prefixes.php', $content);

$end = microtime(true);
debug_stdout('');
debug_stdout('Done!', true);
debug_stdout('   ++ Found ' . count($data) . ' countries, ' . count($prefixes) . ' prefixes.');
debug_stdout('   ++ Finished in ' . round($end - $start, 2) . ' seconds.');
?>