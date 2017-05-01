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

use \blobfolio\common;
use \blobfolio\phone\phone;

abstract class data {

	/**
	 * Validate a Number
	 *
	 * @param string $phone Phone number.
	 * @return array|bool Phone data. False on failure.
	 */
	public static function match($phone='') {
		common\ref\cast::to_string($phone, true);
		phone::sanitize_phone($phone);
		if (false === $phone) {
			return false;
		}

		// Test the number with and without the prefix.
		$test = array($phone);
		$tmp = ltrim($phone, '0');
		if (common\mb::substr($tmp, 0, common\mb::strlen(static::PREFIX)) === (string) static::PREFIX) {
			$test[] = common\mb::substr($tmp, common\mb::strlen(static::PREFIX));
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
					return $out;
				}
			}
		}

		return false;
	}

	/**
	 * Apply formatting rules.
	 *
	 * @param string $phone Phone number.
	 * @return string Phone number.
	 */
	protected static function format($phone='') {
		common\ref\cast::to_string($phone, true);
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
	protected static function types($phone='') {
		common\ref\cast::to_string($phone, true);

		$out = array();

		foreach (static::TYPES as $k=>$v) {
			if (preg_match("/^($k)$/", $phone)) {
				$out = array_merge($out, $v);
			}
		}

		if (count($out)) {
			sort($out);
			$out = array_unique($out);
		}

		return $out;
	}
}


