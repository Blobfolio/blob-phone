<?php
/**
 * Data Class (General)
 *
 * This class is extended by auto-generated
 * country data classes.
 *
 * Constants:
 * PREFIX=xxx;
 * CODE=xx;
 * REGION=xxx;
 * PATTERNS=[xxx];
 * FORMATS=[xxx];
 * TYPES=[xxx];
 *
 * @package blobfolio/phone
 * @author	Blobfolio, LLC <hello@blobfolio.com>
 */

namespace blobfolio\phone\data;

use \blobfolio\common\constants;
use \blobfolio\common\mb as v_mb;
use \blobfolio\common\ref\cast as r_cast;
use \blobfolio\phone\phone;

abstract class data {

	/**
	 * Validate a Number
	 *
	 * @param string $phone Phone number.
	 * @return array|bool Phone data. False on failure.
	 */
	public static function match($phone='') {
		r_cast::string($phone, true);

		// Lock UTF-8 Casting.
		$lock = constants::$str_lock;
		constants::$str_lock = true;

		phone::sanitize_phone($phone);
		if (false === $phone) {
			constants::$str_lock = false;
			return false;
		}

		// Test the number with and without the prefix.
		$test = array($phone);
		$tmp = ltrim($phone, '0');
		$length = strlen(static::PREFIX);
		if (0 === strpos($tmp, static::PREFIX)) {
			$test[] = substr($tmp, $length);
		}

		// Do they match the patterns?
		foreach ($test as $t) {
			foreach (static::PATTERNS as $p) {
				if (preg_match("/^($p)$/", $t)) {
					// Should match a specific type.
					$types = static::types($t);
					if (!count($types)) {
						continue;
					}

					$out = phone::TEMPLATE;
					$out['country'] = static::CODE;
					$out['prefix'] = static::PREFIX;
					$out['region'] = static::REGION;
					$out['types'] = $types;
					$out['number'] = '+' . static::PREFIX . ' ' . static::format($t);

					constants::$str_lock = false;
					return $out;
				}
			}
		}

		constants::$str_lock = false;
		return false;
	}

	/**
	 * Apply formatting rules.
	 *
	 * @param string $phone Phone number.
	 * @return string Phone number.
	 */
	protected static function format(string $phone='') {
		foreach (static::FORMATS as $k=>$v) {
			if (preg_match("/^($k)$/", $phone)) {
				return preg_replace("/^$k$/", $v, $phone);
			}
		}

		// No formatting.
		return $phone;
	}

	/**
	 * Get possible types (e.g. Mobile)
	 *
	 * @param string $phone Phone number.
	 * @return array Types.
	 */
	protected static function types(string $phone='') {
		$out = array();

		foreach (static::TYPES as $k=>$v) {
			if (preg_match("/^($k)$/", $phone)) {
				$out = array_merge($out, $v);
			}
		}

		if (count($out)) {
			$out = array_unique($out);
			sort($out);
		}

		return $out;
	}
}


