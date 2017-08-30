<?php
/**
 * Main Phone Class
 *
 * @package blobfolio/phone
 * @author	Blobfolio, LLC <hello@blobfolio.com>
 */

namespace blobfolio\phone;

use \blobfolio\common;

class phone {

	const TYPES = array(
		'fixed',
		'mobile',
		'pager',
		'personal_number',
		'premium_rate',
		'shared_cost',
		'toll_free',
		'uan',
		'voicemail',
		'voip',
	);

	const MIN_LENGTH = 3;
	const MAX_LENGTH = 30;

	const TEMPLATE = array(
		'country'=>'',
		'prefix'=>0,
		'region'=>'',
		'types'=>array(),
		'number'=>'',
	);

	const DEFAULT_REGION = 'US';

	protected $phone = false;
	protected $tried = array();

	// ---------------------------------------------------------------------
	// Initialization and destruction
	// ---------------------------------------------------------------------

	/**
	 * Constructor
	 *
	 * @param string $phone Phone number.
	 * @param string $country Country.
	 * @return bool True/false.
	 */
	public function __construct($phone='', $country='') {
		common\ref\cast::to_string($phone, true);
		common\ref\cast::to_string($country, true);

		$this->phone = false;

		static::sanitize_phone($phone);

		if (false === $phone) {
			return false;
		}

		static::sanitize_country($country);
		if (false === $country) {
			$country = 'US';
		}

		// Try the main country first.
		if (false === $this->match($phone, $country)) {
			$func = "\\blobfolio\\phone\\data\\data$country";
			@require_once(dirname(__FILE__) . "/data/src/data$country.txt");

			// Try countries with the same prefix.
			if (false === $this->match($phone, data\prefixes::PREFIXES[$func::PREFIX])) {
				// Try countries from the broad region.
				if (strlen($func::REGION)) {
					if ($this->match($phone, data\prefixes::REGIONS[$func::REGION])) {
						return true;
					}
				}
			}
			else {
				return true;
			}
		}
		else {
			return true;
		}

		// Try everything else.
		return $this->match($phone, data\prefixes::COUNTRIES);
	}

	/**
	 * Match Countries
	 *
	 * @param string $phone Phone number.
	 * @param array $countries Countries.
	 * @return bool True/false.
	 */
	protected function match($phone='', $countries=array()) {
		common\ref\cast::to_string($phone, true);
		common\ref\cast::to_array($countries);

		foreach ($countries as $c) {
			if (in_array($c, $this->tried, true)) {
				continue;
			}

			$this->tried[] = $c;
			$func = "\\blobfolio\\phone\\data\\data$c";
			@require_once(dirname(__FILE__) . "/data/src/data$c.txt");
			if (false !== $tmp = $func::match($phone)) {
				$this->phone = $tmp;
				return true;
			}
		}

		return false;
	}

	/**
	 * Cast to String
	 *
	 * @return string Phone number.
	 */
	public function __toString() {
		return $this->is_phone() ? $this->phone['number'] : '';
	}

	// --------------------------------------------------------------------- end init



	// ---------------------------------------------------------------------
	// Helpers
	// ---------------------------------------------------------------------

	/**
	 * Is Phone Valid?
	 *
	 * Check if a phone number is valid, optionally
	 * of a specific type (e.g. Mobile).
	 *
	 * @param string $type Type.
	 * @return bool True/false.
	 */
	public function is_phone($type=null) {
		if (!is_null($type)) {
			common\ref\cast::to_array($type);
			common\ref\mb::strtolower($type);
			$type = array_filter($type, 'strlen');
			if (!count($type)) {
				$type = null;
			}
		}
		return false !== $this->phone && (is_null($type) || count(array_intersect($type, $this->phone['types'])));
	}

	/**
	 * Get Data
	 *
	 * Return phone data as an array, or
	 * fetch a specific variable.
	 *
	 * @param string $key Data key.
	 * @return mixed Phone data. False on failure.
	 */
	public function get_data($key=null) {
		if (!$this->is_phone()) {
			return false;
		}

		if (!is_null($key)) {
			common\ref\cast::to_string($key, true);
			return isset($this->phone[$key]) ? $this->phone[$key] : false;
		}

		return $this->phone;
	}

	/**
	 * Sanitize Phone Number
	 *
	 * Reduce a string to only digits.
	 *
	 * @param string $phone Phone number.
	 * @return bool True/false.
	 */
	public static function sanitize_phone(&$phone = '') {
		common\ref\cast::to_string($phone);

		// Replace number chars.
		$from = array_keys(common\constants::NUMBER_CHARS);
		$to = array_values(common\constants::NUMBER_CHARS);
		$phone = str_replace($from, $to, $phone);

		$phone = preg_replace('/[^\d]/', '', $phone);

		if (!common\data::length_in_range($phone, static::MIN_LENGTH, static::MAX_LENGTH)) {
			$phone = false;
		}

		return true;
	}

	/**
	 * Sanitize Country
	 *
	 * Make sure the country is an ISO code.
	 *
	 * @param string $country Country.
	 * @return bool True/false.
	 */
	public static function sanitize_country(&$country='') {
		common\ref\cast::to_string($country, true);
		common\ref\sanitize::country($country);
		if (common\mb::strlen($country) === 2) {
			if (!in_array($country, data\prefixes::COUNTRIES, true)) {
				$country = false;
			}
		}
		else {
			$country = false;
		}

		return true;
	}

	// ---------------------------------------------------------------------
}


