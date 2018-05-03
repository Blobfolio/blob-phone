<?php
/**
 * Phone tests.
 *
 * PHPUnit tests for phone.
 *
 * @package blobfolio/phone
 * @author	Blobfolio, LLC <hello@blobfolio.com>
 */

use \blobfolio\common\constants;
use \blobfolio\phone\phone;

/**
 * Test Suite
 */
class phone_tests extends \PHPUnit\Framework\TestCase {

	// -----------------------------------------------------------------
	// Set up
	// -----------------------------------------------------------------

	/**
	 * Before Test
	 *
	 * String cast bypass should be off before the test.
	 *
	 * @return void Nothing.
	 */
	protected function setUp() {
		$this->assertFalse(constants::$str_lock);
	}

	/**
	 * After Test
	 *
	 * String cast bypass should still be off after the test.
	 *
	 * @return void Nothing.
	 */
	protected function tearDown() {
		$this->assertFalse(constants::$str_lock);
	}

	// ----------------------------------------------------------------- end setup



	// -----------------------------------------------------------------
	// Tests
	// -----------------------------------------------------------------

	/**
	 * Test ->get_data()
	 *
	 * @dataProvider data_get_data
	 *
	 * @param string $phone Phone.
	 * @param string $country Country.
	 * @param mixed $expected Expected.
	 * @return void Nothing.
	 */
	function test_get_data($phone, $country, $expected) {
		if ($country) {
			$thing = new phone($phone, $country);
		}
		else {
			$thing = new phone($phone);
		}
		$this->assertSame($expected, $thing->get_data());
	}

	/**
	 * Test Mobile Type Detection
	 *
	 * @dataProvider data_mobile
	 *
	 * @param string $phone Phone.
	 * @param string $country Country.
	 * @param bool $expected Expected.
	 * @return void Nothing.
	 */
	function test_mobile($phone, string $country, bool $expected) {
		$thing = new phone($phone, $country);
		$this->assertSame($expected, $thing->is_phone('mobile'));
	}

	// ----------------------------------------------------------------- end tests



	// -----------------------------------------------------------------
	// Data
	// -----------------------------------------------------------------

	/**
	 * Data for ->get_data()
	 *
	 * @return array Data.
	 */
	function data_get_data() {
		return array(
			// Valid Chinese number w/ Country.
			array(
				1012345678,
				'CN',
				array(
					'country'=>'CN',
					'prefix'=>86,
					'region'=>'Asia',
					'types'=>array('fixed'),
					'number'=>'+86 10 1234 5678',
				),
			),
			// Canadian number w/ wrong country.
			array(
				2042345678,
				'US',
				array(
					'country'=>'CA',
					'prefix'=>1,
					'region'=>'North America',
					'types'=>array(
						'fixed',
						'mobile',
					),
					'number'=>'+1 204-234-5678',
				),
			),
			// Uruguay.
			array(
				94231234,
				'UY',
				array(
					'country'=>'UY',
					'prefix'=>598,
					'region'=>'South America',
					'types'=>array('mobile'),
					'number'=>'+598 9423 1234',
				),
			),
			// US w/o country.
			array(
				2015550123,
				null,
				array(
					'country'=>'US',
					'prefix'=>1,
					'region'=>'North America',
					'types'=>array(
						'fixed',
						'mobile',
					),
					'number'=>'+1 201-555-0123',
				),
			),
			// US w/ country.
			array(
				2015550123,
				'US',
				array(
					'country'=>'US',
					'prefix'=>1,
					'region'=>'North America',
					'types'=>array(
						'fixed',
						'mobile',
					),
					'number'=>'+1 201-555-0123',
				),
			),
			// Same as above but pre-formatted.
			array(
				'(201) 555.0123',
				'US',
				array(
					'country'=>'US',
					'prefix'=>1,
					'region'=>'North America',
					'types'=>array(
						'fixed',
						'mobile',
					),
					'number'=>'+1 201-555-0123',
				),
			),
		);
	}

	/**
	 * Data for Mobile
	 *
	 * @return array Data.
	 */
	function data_mobile() {
		return array(
			array(
				2015550123,
				'US',
				true,
			),
			array(
				'(702) 405-0333',
				'US',
				true,
			),
			array(
				94231234,
				'UY',
				true,
			),
			array(
				2042345678,
				'CA',
				true,
			),
			array(
				1012345678,
				'CN',
				false,
			),
			array(
				10123456,
				'AM',
				false,
			),
			array(
				612345678,
				'GB',
				false,
			),
		);
	}

	// ----------------------------------------------------------------- end data
}

