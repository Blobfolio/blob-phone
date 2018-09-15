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

use blobfolio\bob\format;
use blobfolio\bob\io;
use blobfolio\bob\log;
use blobfolio\common\constants;
use blobfolio\common\file as v_file;
use blobfolio\common\ref\sanitize as r_sanitize;
use DOMDocument;

class phone extends \blobfolio\bob\base\mike {
	// Project Name.
	const NAME = 'blob-phone';
	const DESCRIPTION = "blob-phone is a light(er)-weight implementation of Google's amazing libphonenumber for PHP.";
	const CONFIRMATION = '';
	const SLUG = '';

	// Runtime requirements.
	const REQUIRED_FUNCTIONS = array('libxml_use_internal_errors');
	const REQUIRED_CLASSES = array('DOMDocument');
	const REQUIRED_DOWNLOADS = array(
		'https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml',
	);

	// Functions to run to complete the build, in order, grouped by
	// heading.
	const ACTIONS = array(
		'Updating Data'=>array(
			'build',
			'package',
			'post_package',
		),
	);

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



	/**
	 * Build
	 *
	 * Parse the data and shove it into variables.
	 *
	 * @return void Nothing.
	 */
	public static function build() {
		log::print('Loading data…');

		$raw = io::get_url(static::REQUIRED_DOWNLOADS[0]);
		\libxml_use_internal_errors(true);
		$dom = new DOMDocument('1.0', 'UTF-8');
		$dom->loadXML($raw);

		// Start by getting <territory> tags.
		$territories = $dom->getElementsByTagName('territory');
		if (! $territories->length) {
			log::error('Invalid data.');
		}

		log::print('Parsing territories…');
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
			if (! $out['code']) {
				continue;
			}
			$out['prefix'] = (int) $territory->getAttribute('countryCode');
			$out['region'] = constants::COUNTRIES[$out['code']]['region'];

			// Zero isn't a prefix.
			if (! $out['prefix']) {
				continue;
			}

			// Get patterns.
			$patterns = $territory->getElementsByTagName('nationalNumberPattern');
			if (! $patterns->length) {
				continue;
			}
			foreach ($patterns as $pattern) {
				// Strip whitespace.
				$p = \preg_replace('/\s/u', '', $pattern->nodeValue);
				if (! $p) {
					continue;
				}

				$type = $pattern->parentNode->tagName;
				if ('generalDesc' === $type) {
					if (! \in_array($p, $out['patterns'], true)) {
						$out['patterns'][] = $p;
					}
				}
				elseif (false !== ($nice = \array_search($type, static::TYPE_MAP, true))) {
					if (! isset($out['types'][$p])) {
						$out['types'][$p] = array();
					}
					$out['types'][$p][] = $nice;
				}
			}

			// Ignore if there are no patterns or patterns.
			if (! \count($out['patterns']) || ! \count($out['types'])) {
				continue;
			}

			// Sort types.
			foreach ($out['types'] as $k=>$v) {
				$out['types'][$k] = \array_unique($out['types'][$k]);
				\sort($out['types'][$k]);
			}

			// And finally, formatting patterns.
			$formats = $territory->getElementsByTagName('numberFormat');
			if ($formats->length) {
				foreach ($formats as $format) {
					// Strip whitespace again.
					$p = \preg_replace('/\s/u', '', $format->getAttribute('pattern'));
					if (! $p) {
						continue;
					}

					// Try international first.
					$f = $format->getElementsByTagName('intlFormat');
					if (
						$f->length &&
						(false !== (\strpos($f->item(0)->nodeValue, '$')))
					) {
						$out['formats'][$p] = $f->item(0)->nodeValue;
						continue;
					}

					// Other formatting.
					$f = $format->getElementsByTagName('format');
					if (
						$f->length &&
						(false !== (\strpos($f->item(0)->nodeValue, '$')))
					) {
						$out['formats'][$p] = $f->item(0)->nodeValue;
						continue;
					}
				}
			}

			// Add the data!
			static::$data[$out['code']] = $out;

			// Add the prefixes.
			if (! isset(static::$prefixes[$out['prefix']])) {
				static::$prefixes[$out['prefix']] = array();
			}

			// This is the prefix's main country.
			$main = $territory->getAttribute('mainCountryForCode');
			if ('true' === $main) {
				\array_unshift(static::$prefixes[$out['prefix']], $out['code']);
			}
			// It is just another damn place.
			else {
				static::$prefixes[$out['prefix']][] = $out['code'];
			}

			// Update the region list.
			if (! isset(static::$regions[$out['region']])) {
				static::$regions[$out['region']] = array();
			}
			static::$regions[$out['region']][] = $out['code'];
		} // Each territory.

		log::print('Patching NANPA territories…');

		foreach (static::$data as $k=>$v) {
			// The US is already set.
			if (('US' === $k) || (1 !== $v['prefix'])) {
				continue;
			}

			// Copy from the US.
			static::$data[$k]['formats'] = static::$data['US']['formats'];
		}

		log::print('Sorting data…');

		\ksort(static::$data);
		\ksort(static::$prefixes);

		\ksort(static::$regions);
		foreach (static::$regions as $k=>$v) {
			\sort(static::$regions[$k]);
		}

		log::total(\count(static::$data));
	}

	/**
	 * Package Tasks
	 *
	 * @return void Nothing.
	 */
	protected static function package() {
		log::print('Exporting territories…');

		// Set up some paths.
		$root = \dirname(\BOB_ROOT_DIR) . '/';
		$skel = \BOB_ROOT_DIR . 'skel/';

		// All the country classes.
		$data_out = "{$root}lib/blobfolio/phone/data/src/";
		$data_template = "{$skel}data.template";

		// The Javascript file.
		$js_out = "{$root}lib/js/blob-phone.js";
		$js_template = "{$skel}blob-phone.js";

		// The prefix constants.
		$prefix_out = "{$root}lib/blobfolio/phone/data/prefixes.php";
		$prefix_template = "{$skel}prefixes.template";

		// Remove the output directory so we can start fresh.
		v_file::rmdir($data_out);
		v_file::mkdir($data_out, 0755);

		$template = \file_get_contents($data_template);
		$now = \date('Y-m-d H:i:s');

		foreach (static::$data as $k=>$v) {
			$file = $data_out . "data{$k}.txt";

			$replace = array(
				'%CODE%'=>$k,
				'%FORMATS%'=>format::array_to_php($v['formats'], 2),
				'%GENERATED%'=>$now,
				'%PATTERNS%'=>format::array_to_php($v['patterns'], 2),
				'%PREFIX%'=>$v['prefix'],
				'%REGION%'=>$v['region'],
				'%TYPES%'=>format::array_to_php($v['types'], 2),
			);
			$out = \str_replace(\array_keys($replace), \array_values($replace), $template);
			\file_put_contents($file, $out);
			\chmod($file, 0644);
		}

		log::print('Exporting prefixes…');

		$template = \file_get_contents($prefix_template);

		$replace = array(
			'%GENERATED%'=>\date('Y-m-d H:i:s'),
			'%COUNTRIES%'=>format::array_to_php(\array_keys(static::$data), 2),
			'%PREFIXES%'=>format::array_to_php(static::$prefixes, 2),
			'%REGIONS%'=>format::array_to_php(static::$regions, 2),
		);

		// We want numeric indexes for prefixes (our utility helper
		// auto-quotes everything).
		$replace['%PREFIXES%'] = \preg_replace("/'(\d+)'=>/", '$1=>', $replace['%PREFIXES%']);
		$out = \str_replace(\array_keys($replace), \array_values($replace), $template);
		\file_put_contents($prefix_out, $out);

		log::print('Exporting Javascript library…');

		$template = \file_get_contents($js_template);
		$replace = array(
			'%DATA%'=>\json_encode(static::$data),
			'%REGIONS%'=>\json_encode(static::$regions),
			'%PREFIXES%'=>\json_encode(static::$prefixes),
		);
		$out = \str_replace(\array_keys($replace), \array_values($replace), $template);
		\file_put_contents($js_out, $out);

		log::print('Exporting JSON too…');
		$json = array(
			'data'=>static::$data,
			'regions'=>static::$regions,
			'prefixes'=>static::$prefixes,
		);
		// Let's join match patterns before we output it.
		foreach ($json['data'] as $k=>$v) {
			$json['data'][$k]['patterns'] = '^((' . \implode(')|(', $v['patterns']) . '))$';
		}

		$json = \json_encode($json);
		\file_put_contents($root . 'bin/blob-phone.json', $json);

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
		log::print('Minifying Javascript library…');
		io::npm_script(\dirname(\BOB_ROOT_DIR), 'js');
	}
}
