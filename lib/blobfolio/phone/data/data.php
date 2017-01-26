<?php
//---------------------------------------------------------------------
// DATA: GENERIC
//---------------------------------------------------------------------

namespace blobfolio\phone\data;

abstract class data {

	//const PREFIX=xxx;
	//const CODE=xx;
	//const REGION=xxx;
	//const PATTERNS=[xxx];
	//const FORMATS=[xxx];
	//const TYPES=[xxx];

	//-------------------------------------------------
	// Try to match a phone number
	//
	// @param phone
	// @return data or false
	public static function match(string $phone='') {
		\blobfolio\phone\phone::sanitize_phone($phone);
		if (false === $phone) {
			return false;
		}

		//test the number with and without the prefix
		$test = array($phone);
		$tmp = ltrim($phone, '0');
		if (\blobfolio\common\mb::substr($tmp, 0, \blobfolio\common\mb::strlen(static::PREFIX)) === (string) static::PREFIX) {
			$test[] = \blobfolio\common\mb::substr($tmp, \blobfolio\common\mb::strlen(static::PREFIX));
		}

		//do they match the patterns?
		foreach ($test as $t) {
			foreach (static::PATTERNS as $p) {
				if (preg_match("/^($p)$/", $t)) {
					//should match a specific type
					$types = static::types($t);
					if (!count($types)) {
						continue;
					}

					$out = \blobfolio\phone\phone::DEFAULT;
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

	//-------------------------------------------------
	// Apply Formatting
	//
	// @param phone
	// @return formatted
	protected static function format(string $phone='') {
		foreach (static::FORMATS as $k=>$v) {
			if (preg_match("/^($k)$/", $phone)) {
				return preg_replace("/^$k$/", $v, $phone);
			}
		}

		//no formatting
		return $phone;
	}

	//-------------------------------------------------
	// Get Type(s)
	//
	// @param phone
	// @return types
	protected static function types(string $phone='') {
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

?>