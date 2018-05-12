<?php
/**
 * Compile Phone Data
 *
 * @package blobfolio/phone
 * @author  Blobfolio, LLC <hello@blobfolio.com>
 */

/**
 * Data Source: libphonenumber
 *
 * @see {https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml}
 *
 * @copyright 2017 Google
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache
 */

namespace blobfolio\dev;

use \blobfolio\bob\utility;
use \blobfolio\common\constants;
use \blobfolio\common\file as v_file;
use \blobfolio\common\ref\sanitize as r_sanitize;
use \DOMDocument;

class phone extends \blobfolio\bob\base\build {
	const NAME = 'phone';

	// Intl should catch this, but just in case...
	const REQUIRED_FUNCTIONS = array('libxml_use_internal_errors');
	const REQUIRED_CLASSES = array('DOMDocument');
	const BINARIES = array('grunt');
	const DOWNLOADS = array('https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml');

	// We aren't using binaries or build steps.
	const SKIP_BINARY_DEPENDENCIES = false;
	const SKIP_BUILD = false;
	const SKIP_FILE_DEPENDENCIES = true;
	const SKIP_PACKAGE = false;

	// Paths.
	const DATA_OUT = BOB_ROOT_DIR . 'lib/blobfolio/phone/data/src/';
	const DATA_TEMPLATE = BOB_BUILD_DIR . 'skel/data.template';
	const JS_OUT = BOB_ROOT_DIR . 'lib/js/blob-phone.js';
	const JS_TEMPLATE = BOB_BUILD_DIR . 'skel/blob-phone.js';
	const PREFIX_OUT = BOB_ROOT_DIR . 'lib/blobfolio/phone/data/prefixes.php';
	const PREFIX_TEMPLATE = BOB_BUILD_DIR . 'skel/prefixes.template';

	const REMOTE = 'https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml';

	const TERRITORY = array(
		'code'=>'',
		'prefix'=>0,
		'region'=>'',
		'patterns'=>array(),
		'types'=>array(),
		'formats'=>array(),
	);

	const TYPE_MAP = array(
		'fixed'=>'fixedLine',
		'mobile'=>'mobile',
		'personal_number'=>'personalNumber',
		'premium_rate'=>'premiumRate',
		'shared_cost'=>'sharedCost',
		'toll_free'=>'tollFree',
		'voicemail'=>'voicemail',
		'voip'=>'voip',
	);

	protected static $data = array();
	protected static $prefixes = array();
	protected static $regions = array();



	// -----------------------------------------------------------------
	// Build
	// -----------------------------------------------------------------

	/**
	 * Build Tasks
	 *
	 * @return void Nothing.
	 */
	protected static function build_tasks() {
		utility::log('Loading data…');

		// Load the data.
		$raw = file_get_contents(static::$downloads[static::REMOTE]);
		libxml_use_internal_errors(true);
		$dom = new DOMDocument('1.0', 'UTF-8');
		$dom->loadXML($raw);

		// Start by getting <territory> tags.
		$territories = $dom->getElementsByTagName('territory');
		if (!$territories->length) {
			utility::log('Invalid data.', 'error');
		}

		utility::log('Parsing territories…');
		foreach ($territories as $territory) {
			$out = static::TERRITORY;

			// Check country first.
			$out['code'] = $territory->getAttribute('id');

			// Google is confused about Vietnam's country code.
			if ('VU' === $out['code']) {
				$out['code'] = 'VN';
			}

			// Beyond that country code should validate.
			r_sanitize::country($out['code']);
			if (!$out['code']) {
				continue;
			}
			$out['prefix'] = (int) $territory->getAttribute('countryCode');
			$out['region'] = constants::COUNTRIES[$out['code']]['region'];

			// Zero isn't a prefix.
			if (!$out['prefix']) {
				continue;
			}

			// Get patterns.
			$patterns = $territory->getElementsByTagName('nationalNumberPattern');
			if (!$patterns->length) {
				continue;
			}
			foreach ($patterns as $pattern) {
				// Strip whitespace.
				$p = preg_replace('/\s/u', '', $pattern->nodeValue);
				if (!$p) {
					continue;
				}

				$type = $pattern->parentNode->tagName;
				if ('generalDesc' === $type) {
					if (!in_array($p, $out['patterns'], true)) {
						$out['patterns'][] = $p;
					}
				}
				elseif (false !== ($nice = array_search($type, static::TYPE_MAP, true))) {
					if (!isset($out['types'][$p])) {
						$out['types'][$p] = array();
					}
					$out['types'][$p][] = $nice;
				}
			}

			// Ignore if there are no patterns or patterns.
			if (!count($out['patterns']) || !count($out['types'])) {
				continue;
			}

			// Sort types.
			foreach ($out['types'] as $k=>$v) {
				$out['types'][$k] = array_unique($out['types'][$k]);
				sort($out['types'][$k]);
			}

			// And finally, formatting patterns.
			$formats = $territory->getElementsByTagName('numberFormat');
			if ($formats->length) {
				foreach ($formats as $format) {
					// Strip whitespace again.
					$p = preg_replace('/\s/u', '', $format->getAttribute('pattern'));
					if (!$p) {
						continue;
					}

					// Try international first.
					$f = $format->getElementsByTagName('intlFormat');
					if (
						$f->length &&
						(false !== (strpos($f->item(0)->nodeValue, '$')))
					) {
						$out['formats'][$p] = $f->item(0)->nodeValue;
						continue;
					}

					// Other formatting.
					$f = $format->getElementsByTagName('format');
					if (
						$f->length &&
						(false !== (strpos($f->item(0)->nodeValue, '$')))
					) {
						$out['formats'][$p] = $f->item(0)->nodeValue;
						continue;
					}
				}
			}

			// Add the data!
			static::$data[$out['code']] = $out;

			// Add the prefixes.
			if (!isset(static::$prefixes[$out['prefix']])) {
				static::$prefixes[$out['prefix']] = array();
			}

			// This is the prefix's main country.
			$main = $territory->getAttribute('mainCountryForCode');
			if ('true' === $main) {
				array_unshift(static::$prefixes[$out['prefix']], $out['code']);
			}
			// It is just another damn place.
			else {
				static::$prefixes[$out['prefix']][] = $out['code'];
			}

			// Update the region list.
			if (!isset(static::$regions[$out['region']])) {
				static::$regions[$out['region']] = array();
			}
			static::$regions[$out['region']][] = $out['code'];
		} // Each territory.

		utility::log('Patching NANPA territories…');

		foreach (static::$data as $k=>$v) {
			// The US is already set.
			if (('US' === $k) || (1 !== $v['prefix'])) {
				continue;
			}

			// Copy from the US.
			static::$data[$k]['formats'] = static::$data['US']['formats'];
		}

		utility::log('Sorting data…');

		ksort(static::$data);
		ksort(static::$prefixes);

		ksort(static::$regions);
		foreach (static::$regions as $k=>$v) {
			sort(static::$regions[$k]);
		}

		static::print_record_count(count(static::$data));
	}

	/**
	 * Package Tasks
	 *
	 * @return void Nothing.
	 */
	protected static function package() {
		utility::log('Exporting territories…');

		// Remove the output directory so we can start fresh.
		v_file::rmdir(static::DATA_OUT);
		v_file::mkdir(static::DATA_OUT, 0755);

		$template = file_get_contents(static::DATA_TEMPLATE);
		$now = date('Y-m-d H:i:s');

		foreach (static::$data as $k=>$v) {
			$file = static::DATA_OUT . "data{$k}.txt";

			$replace = array(
				'%CODE%'=>$k,
				'%FORMATS%'=>utility::array_to_php($v['formats'], 2),
				'%GENERATED%'=>$now,
				'%PATTERNS%'=>utility::array_to_php($v['patterns'], 2),
				'%PREFIX%'=>$v['prefix'],
				'%REGION%'=>$v['region'],
				'%TYPES%'=>utility::array_to_php($v['types'], 2),
			);
			$out = str_replace(array_keys($replace), array_values($replace), $template);
			file_put_contents($file, $out);
			chmod($file, 0644);
		}

		utility::log('Exporting prefixes…');

		$template = file_get_contents(static::PREFIX_TEMPLATE);

		$replace = array(
			'%GENERATED%'=>date('Y-m-d H:i:s'),
			'%COUNTRIES%'=>utility::array_to_php(array_keys(static::$data), 2),
			'%PREFIXES%'=>utility::array_to_php(static::$prefixes, 2),
			'%REGIONS%'=>utility::array_to_php(static::$regions, 2),
		);

		// We want numeric indexes for prefixes (our utility helper
		// auto-quotes everything).
		$replace['%PREFIXES%'] = preg_replace("/'(\d+)'=>/", '$1=>', $replace['%PREFIXES%']);
		$out = str_replace(array_keys($replace), array_values($replace), $template);
		file_put_contents(static::PREFIX_OUT, $out);

		utility::log('Exporting Javascript library…');

		$template = file_get_contents(static::JS_TEMPLATE);
		$replace = array(
			'%DATA%'=>json_encode(static::$data),
			'%REGIONS%'=>json_encode(static::$regions),
			'%PREFIXES%'=>json_encode(static::$prefixes),
		);
		$out = str_replace(array_keys($replace), array_values($replace), $template);
		file_put_contents(static::JS_OUT, $out);

		// Free up some memory.
		unset($out);
		unset($replace);
		unset($template);
		static::$data = null;
		static::$prefixes = null;
		static::$regions = null;
	}

	/**
	 * Post-Package Tasks
	 *
	 * @return void Nothing.
	 */
	protected static function post_package() {
		utility::log('Minifying Javascript library…');

		if (isset(static::$deps['grunt'])) {
			static::$deps['grunt']->run_task(BOB_ROOT_DIR, 'javascript');
		}
	}

	// ----------------------------------------------------------------- end build



	// -----------------------------------------------------------------
	// Helpers
	// -----------------------------------------------------------------

	/**
	 * Record Count
	 *
	 * @param int $count Count.
	 * @return void Nothing.
	 */
	protected static function print_record_count(int $count) {
		$count = number_format($count, 0, '.', ',');
		utility::log("Total TLDs: $count", 'success');
	}

	// ----------------------------------------------------------------- end helpers
}
