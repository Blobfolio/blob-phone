<?php
/**
 * Main Phone Class
 *
 * @package blobfolio/phone
 * @author	Blobfolio, LLC <hello@blobfolio.com>
 */

namespace blobfolio\phone;

use \blobfolio\common\constants;
use \blobfolio\common\data as c_data;
use \blobfolio\common\mb as v_mb;
use \blobfolio\common\ref\cast as r_cast;
use \blobfolio\common\ref\mb as r_mb;
use \blobfolio\common\ref\sanitize as r_sanitize;

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
	public function __construct($phone='', string $country='') {
		r_cast::string($phone, true);

		$this->phone = false;
		static::sanitize_phone($phone);

		if (!$phone) {
			return false;
		}

		static::sanitize_country($country);
		if (!$country) {
			$country = 'US';
		}

		// Try the main country first.
		if (false === $this->match($phone, $country)) {
			// There are too many damn countries! To prevent autoloader
			// overload, these classes are stored as innocent text files
			// and included here as needed.
			$func = "\\blobfolio\\phone\\data\\data$country";
			@require_once(__DIR__ . "/data/src/data$country.txt");

			// Try countries with the same prefix.
			if (false === $this->match($phone, data\prefixes::PREFIXES[$func::PREFIX])) {
				// Try countries from the broad region.
				if (
					$func::REGION &&
					$this->match($phone, data\prefixes::REGIONS[$func::REGION])
				) {
					return true;
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
		r_cast::string($phone, true);
		r_cast::array($countries);

		foreach ($countries as $c) {
			if (!$c || !is_string($c) || isset($this->tried[$c])) {
				continue;
			}

			// There are too many damn countries! To prevent autoloader
			// overload, these classes are stored as innocent text files
			// and included here as needed.
			$this->tried[$c] = true;
			$func = "\\blobfolio\\phone\\data\\data$c";
			@require_once(__DIR__ . "/data/src/data$c.txt");

			if (false !== ($tmp = $func::match($phone))) {
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
			// We want an array with lowercase strings.
			r_cast::array($type);
			foreach ($type as $k=>$v) {
				if (is_string($type[$k])) {
					$type[$k] = strtolower($type[$k]);
				}

				if (!$type[$k]) {
					unset($type[$k]);
				}
			}

			if (!count($type)) {
				$type = null;
			}
		}

		return (
			(false !== $this->phone) &&
			(is_null($type) || count(array_intersect($type, $this->phone['types'])))
		);
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

		if (is_string($key)) {
			$key = strtolower($key);
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
		r_cast::string($phone, true);

		// Replace number chars.
		$from = array_keys(constants::NUMBER_CHARS);
		$to = array_values(constants::NUMBER_CHARS);
		$phone = str_replace($from, $to, $phone);

		$phone = preg_replace('/[^\d]/', '', $phone);

		if (!c_data::length_in_range($phone, static::MIN_LENGTH, static::MAX_LENGTH)) {
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
	public static function sanitize_country(string &$country='') {
		r_sanitize::country($country);

		if (
			!$country ||
			!in_array($country, data\prefixes::COUNTRIES, true)
		) {
			$country = false;
		}

		return true;
	}

	// ---------------------------------------------------------------------
}
