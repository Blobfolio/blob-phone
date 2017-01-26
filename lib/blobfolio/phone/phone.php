<?php
//---------------------------------------------------------------------
// PHONE
//---------------------------------------------------------------------

namespace blobfolio\phone;

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
		'voip'
	);

	const MIN_LENGTH = 3;
	const MAX_LENGTH = 30;

	const DEFAULT = array(
		'country'=>'',
		'prefix'=>0,
		'region'=>'',
		'types'=>array(),
		'number'=>''
	);

	const DEFAULT_REGION = 'US';

	protected $phone = false;
	protected $tried = array();

	//---------------------------------------------------------------------
	// Initialization and destruction
	//---------------------------------------------------------------------

	//-------------------------------------------------
	// Initialize the object
	//
	// @param phone
	// @param country
	// @return true/false
	public function __construct(string $phone='', string $country='') {
		$this->phone = false;

		static::sanitize_phone($phone);

		if (false === $phone) {
			return false;
		}

		static::sanitize_country($country);
		if (false === $country) {
			$country = 'US';
		}

		//try the main country first
		if (false === $this->match($phone, $country)) {
			$func = "\\blobfolio\\phone\\data\\data$country";

			//try countries with the same prefix
			if (false === $this->match($phone, data\prefixes::PREFIXES[$func::PREFIX])) {
				//try countries from the broad region
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

		//try everything else
		return $this->match($phone, data\prefixes::COUNTRIES);
	}

	//-------------------------------------------------
	// Try to Match to country/ies
	//
	// @param phone
	// @param countries
	protected function match(string $phone='', $countries=array()) {
		\blobfolio\common\ref\cast::array($countries);

		foreach ($countries as $c) {
			if (in_array($c, $this->tried)) {
				continue;
			}

			$this->tried[] = $c;
			$func = "blobfolio\\phone\\data\\data$c";
			if (false !== $tmp = $func::match($phone)) {
				$this->phone = $tmp;
				return true;
			}
		}

		return false;
	}

	//-------------------------------------------------
	// Stringify
	//
	// @param n/a
	// @return string
	public function __toString() {
		return $this->is_phone() ? $this->phone['number'] : '';
	}

	//--------------------------------------------------------------------- end init



	//---------------------------------------------------------------------
	// Helpers
	//---------------------------------------------------------------------

	//-------------------------------------------------
	// Is Phone?
	//
	// is this a valid phone?
	//
	// @param type
	// @return true/false
	public function is_phone(string $type=null) {
		if (!is_null($type)) {
			\blobfolio\common\ref\cast::array($type);
			\blobfolio\common\ref\mb::strtolower($type);
		}
		return false !== $this->phone && (is_null($type) || count(array_intersect($type, $this->phone['types'])));
	}

	//-------------------------------------------------
	// Get Data
	//
	// @param n/a
	// @return data
	public function get_data(string $key=null) {
		if (!$this->is_phone()) {
			return false;
		}

		if (!is_null($key)) {
			return isset($this->phone[$key]) ? $this->phone[$key] : false;
		}

		return $this->phone;
	}

	//-------------------------------------------------
	// Sanitize Phone
	//
	// reduce a phone number to digits only
	//
	// @param phone
	// @return true
	public static function sanitize_phone(string &$phone = '') {
		\blobfolio\common\ref\cast::string($phone);

		//replace number chars
		$from = array_keys(\blobfolio\common\constants::NUMBER_CHARS);
		$to = array_values(\blobfolio\common\constants::NUMBER_CHARS);
		$phone = str_replace($from, $to, $phone);

		$phone = preg_replace('/[^\d]/', '', $phone);

		if (!\blobfolio\common\data::length_in_range($phone, static::MIN_LENGTH, static::MAX_LENGTH)) {
			$phone = false;
		}

		return true;
	}

	//-------------------------------------------------
	// Sanitize Country
	//
	// @param country
	// @return true
	public static function sanitize_country(string &$country='') {
		\blobfolio\common\ref\sanitize::country($country);
		if (\blobfolio\common\mb::strlen($country) === 2) {
			if (!in_array($country, data\prefixes::COUNTRIES)) {
				$country = false;
			}
		}
		else {
			$country = false;
		}

		return true;
	}

	//---------------------------------------------------------------------
}

?>