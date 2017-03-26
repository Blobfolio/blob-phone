<?php
/**
 * Compile phone source data.
 *
 * This build script will download phone formatting metadata
 * from libphonenumber and save it in a more easily parsable
 * way, optimized for our limited purposes.
 *
 * This script should be run via php-cli.
 *
 * Requires:
 * PHP 7+
 * UNIX
 * CURL
 * MBSTRING
 * DOM
 *
 * @package blobfolio/phone
 * @author	Blobfolio, LLC <hello@blobfolio.com>
 */

// -------------------------------------------------
// Setup/Env

define('BUILD_PATH', dirname(__FILE__));
define('SOURCE_PATH', BUILD_PATH . '/src');
define('DIST_PATH', dirname(BUILD_PATH) . '/lib/blobfolio/phone/data');
define('DATA_PATH', DIST_PATH . '/src');

// Load the bootstrap.
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
	'personal_number'=>'personalNumber',
	'premium_rate'=>'premiumRate',
	'shared_cost'=>'sharedCost',
	'toll_free'=>'tollFree',
	'voicemail'=>'voicemail',
	'voip'=>'voip'
));

define('XML_REMOTE', 'https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml');
define('XML_LOCAL', SOURCE_PATH . '/phonenumbers.xml');

// How long should downloaded files be cached?
define('DOWNLOAD_CACHE', 7200);

$data = array();
$prefixes = array();
$regions = array();

$start = microtime(true);



/**
 * STDOUT wrapper.
 *
 * Make it easier to print progress to the terminal.
 *
 * @param string $line Content.
 * @param bool $dividers Print dividing lines.
 * @return void Nothing.
 */
function debug_stdout(string $line='', bool $dividers=false) {
	if ($dividers) {
		echo str_repeat('-', 50) . "\n";
	}
	echo "$line\n";
	if ($dividers) {
		echo str_repeat('-', 50) . "\n";
	}
}



/**
 * URL to Cache Path
 *
 * The local name to use for a given URL.
 *
 * @param string $url URL.
 * @return string Path.
 */
function cache_path(string $url) {
	// Strip and translate a little.
	$url = strtolower($url);
	$url = preg_replace('/^https?:\/\//', '', $url);
	$url = str_replace(array('/','\\','?','#'), '-', $url);

	return SOURCE_PATH . '/' . $url;
}



/**
 * Get Cache
 *
 * Return the local content if available.
 *
 * @param string $url URL.
 * @return string|bool Content or false.
 */
function get_cache(string $url) {
	static $limit;

	// Set the limit if we haven't already.
	if (is_null($limit)) {
		file_put_contents(SOURCE_PATH . '/limit', 'hi');
		$limit = filemtime(SOURCE_PATH . '/limit') - DOWNLOAD_CACHE;
		unlink(SOURCE_PATH . '/limit');
	}

	try {
		$file = cache_path($url);
		if (file_exists($file)) {
			if (filemtime($file) < $limit) {
				unlink($file);
			}
			else {
				return file_get_contents($file);
			}
		}
	} catch (Throwable $e) {
		return false;
	}

	return false;
}



/**
 * Save Cache
 *
 * Save a fetched URL locally.
 *
 * @param string $url URL.
 * @param string $content Content.
 * @return bool True/false.
 */
function save_cache(string $url, string $content) {
	try {
		$file = cache_path($url);
		return @file_put_contents($file, $content);
	} catch (Throwable $e) {
		return false;
	}

	return false;
}



/**
 * Batch CURL URLs
 *
 * It is much more efficient to use multi-proc
 * CURL as there are hundreds of files to get.
 *
 * @param array $urls URLs.
 * @return array Responses.
 */
function fetch_urls(array $urls=array()) {
	$fetched = array();
	$cached = array();

	// Bad start...
	if (!count($urls)) {
		return $fetched;
	}

	// Loosely filter URLs, and look for cache.
	foreach ($urls as $k=>$v) {
		$urls[$k] = filter_var($v, FILTER_SANITIZE_URL);
		if (!preg_match('/^https?:\/\//', $urls[$k])) {
			unset($urls[$k]);
			continue;
		}

		if (false !== $cache = get_cache($urls[$k])) {
			$cached[$urls[$k]] = $cache;
			unset($urls[$k]);
			continue;
		}
	}

	$urls = array_chunk($urls, 25);

	foreach ($urls as $chunk) {
		$multi = curl_multi_init();
		$curls = array();

		// Set up curl request for each site.
		foreach ($chunk as $url) {
			$curls[$url] = curl_init($url);

			curl_setopt($curls[$url], CURLOPT_HEADER, false);
			curl_setopt($curls[$url], CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curls[$url], CURLOPT_TIMEOUT, 10);
			curl_setopt($curls[$url], CURLOPT_USERAGENT, 'blob-phone');
			curl_setopt($curls[$url], CURLOPT_FOLLOWLOCATION, true);

			curl_multi_add_handle($multi, $curls[$url]);
		}

		// Process requests.
		do {
			curl_multi_exec($multi, $running);
			curl_multi_select($multi);
		} while ($running > 0);

		// Update information.
		foreach ($chunk as $url) {
			$fetched[$url] = (int) curl_getinfo($curls[$url], CURLINFO_HTTP_CODE);
			if ($fetched[$url] >= 200 && $fetched[$url] < 400) {
				$fetched[$url] = curl_multi_getcontent($curls[$url]);
				save_cache($url, $fetched[$url]);
			}
			curl_multi_remove_handle($multi, $curls[$url]);
		}

		curl_multi_close($multi);
	}

	// Add our cached results back.
	foreach ($cached as $k=>$v) {
		$fetched[$k] = $v;
	}

	return $fetched;
}



/**
 * Array to PHP Code
 *
 * Convert a variable into a string
 * representing PHP code.
 *
 * @param array $var Data.
 * @param int $indents Number of tabs to append.
 * @return string Code.
 */
function array_to_php($var, int $indents=1) {
	if (!is_array($var) || !count($var)) {
		return '';
	}

	$out = array();
	$array_type = \blobfolio\common\cast::array_type($var);
	foreach ($var as $k=>$v) {
		$line = str_repeat("\t", $indents);
		if ('sequential' !== $array_type) {
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



// -------------------------------------------------
// Begin!

if (!file_exists(SOURCE_PATH)) {
	mkdir(SOURCE_PATH, 0755);
}



// -------------------------------------------------
// Download!

debug_stdout('Compiling', true);

// Get source data.
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

	// Save it.
	debug_stdout('   ++ Saving local copy...');
	@file_put_contents(XML_LOCAL, $xml[XML_REMOTE]);
}



// -------------------------------------------------
// Parse!

libxml_use_internal_errors(true);
$dom = new \DOMDocument('1.0', 'UTF-8');
$dom->loadXML($xml[XML_REMOTE]);

// We want territories.
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

	// Bad match?
	if (!preg_match('/^[A-Z]{2}$/', $out['code']) || !$out['prefix']) {
		continue;
	}

	// Find patterns.
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
		if ('generalDesc' === $type) {
			if (!in_array($p, $out['patterns'], true)) {
				$out['patterns'][] = $p;
			}
		}
		elseif (false !== $nice = array_search($type, TYPE_MAP, true)) {
			if (!isset($out['types'][$p])) {
				$out['types'][$p] = array();
			}
			$out['types'][$p][] = $nice;
		}
	}

	if (!count($out['patterns'])) {
		continue;
	}

	// Sort our types.
	foreach ($out['types'] as $k=>$v) {
		sort($out['types'][$k]);
		$out['types'][$k] = array_unique($out['types'][$k]);
	}

	if (!count($out['types'])) {
		continue;
	}

	// Lastly, formatting patterns.
	$formats = $territory->getElementsByTagName('numberFormat');
	if ($formats->length) {
		foreach ($formats as $format) {
			$pattern = preg_replace('/\s/', '', $format->getAttribute('pattern'));
			if (!strlen($pattern)) {
				continue;
			}

			// Try international format first.
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

	// Add it to the prefix list.
	if (!isset($prefixes[$out['prefix']])) {
		$prefixes[$out['prefix']] = array();
	}

	$main = $territory->getAttribute('mainCountryForCode');
	if ('true' === $main) {
		array_unshift($prefixes[$out['prefix']], $out['code']);
	}
	else {
		$prefixes[$out['prefix']][] = $out['code'];
	}

	// And the region list.
	if ($out['region']) {
		if (!isset($regions[$out['region']])) {
			$regions[$out['region']] = array();
		}

		$regions[$out['region']][] = $out['code'];
	}
}

// Real quick, run through data and add formatting rules to NANPA territories.
foreach ($data as $k=>$v) {
	if ('US' === $k || 1 !== $v['prefix']) {
		continue;
	}

	$data[$k]['formats'] = $data['US']['formats'];
}

// Also, clean up regions.
ksort($regions);
foreach ($regions as $k=>$v) {
	sort($regions[$k]);
}



// -------------------------------------------------
// Clean Up!

debug_stdout('');
debug_stdout('Saving', true);

debug_stdout('   ++ Removing old classes...');
if ($handle = opendir(DATA_PATH)) {
	while (false !== ($file = readdir($handle))) {
		if (preg_match('/^data[A-Z]{2}\.txt$/', $file)) {
			@unlink(DATA_PATH . "/$file");
		}
	}
	closedir($handle);
}

debug_stdout('   ++ Generating new classes...');
ksort($data);
foreach ($data as $k=>$v) {
	$content = "<?php\n//" . str_repeat('-', 70);
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

	@file_put_contents(DATA_PATH . "/data$k.txt", $content);
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

