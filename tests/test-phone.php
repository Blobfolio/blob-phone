<?php
//---------------------------------------------------------------------
// Phone Tests!
//---------------------------------------------------------------------

class phone_tests extends \PHPUnit\Framework\TestCase {

	//-------------------------------------------------
	// US Valid

	function test_valid_us_with_country() {
		$p = new \blobfolio\phone\phone(2015550123, 'US');
		$p = $p->get_data();

		// Valid data.
		$this->assertEquals( true, is_array($p) );
		$this->assertEquals( 'US', $p['country'] );
		$this->assertEquals( 1, $p['prefix'] );
		$this->assertEquals( 'North America', $p['region'] );
		$this->assertEquals( '+1 201-555-0123', $p['number'] );
	}

	function test_valid_us_without_country() {
		$p = new \blobfolio\phone\phone(2015550123);
		$p = $p->get_data();

		// Valid data.
		$this->assertEquals( true, is_array($p) );
		$this->assertEquals( 'US', $p['country'] );
		$this->assertEquals( 1, $p['prefix'] );
		$this->assertEquals( 'North America', $p['region'] );
		$this->assertEquals( '+1 201-555-0123', $p['number'] );
	}

	//-------------------------------------------------
	// Uruguay

	function test_valid_uy_with_country() {
		$p = new \blobfolio\phone\phone(94231234, 'UY');
		$p = $p->get_data();

		// Valid data.
		$this->assertEquals( true, is_array($p) );
		$this->assertEquals( 'UY', $p['country'] );
		$this->assertEquals( 598, $p['prefix'] );
		$this->assertEquals( 'South America', $p['region'] );
		$this->assertEquals( '+598 9423 1234', $p['number'] );
	}

	//-------------------------------------------------
	// Canada

	function test_valid_ca_with_wrong_country() {
		$p = new \blobfolio\phone\phone(2042345678, 'US');
		$p = $p->get_data();

		// Valid data.
		$this->assertEquals( true, is_array($p) );
		$this->assertEquals( 'CA', $p['country'] );
		$this->assertEquals( 1, $p['prefix'] );
		$this->assertEquals( 'North America', $p['region'] );
		$this->assertEquals( '+1 204-234-5678', $p['number'] );
	}

	//-------------------------------------------------
	// China

	function test_valid_cn_with_country() {
		$p = new \blobfolio\phone\phone(1012345678, 'CN');
		$p = $p->get_data();

		// Valid data.
		$this->assertEquals( true, is_array($p) );
		$this->assertEquals( 'CN', $p['country'] );
		$this->assertEquals( 86, $p['prefix'] );
		$this->assertEquals( 'Asia', $p['region'] );
		$this->assertEquals( '+86 10 1234 5678', $p['number'] );
	}

	//-------------------------------------------------
	// Mobile

	function test_mobile() {
		$p = new \blobfolio\phone\phone(2015550123, 'US');
		$this->assertEquals( true, $p->is_phone('mobile'));

		$p = new \blobfolio\phone\phone(94231234, 'UY');
		$this->assertEquals( true, $p->is_phone('mobile'));

		$p = new \blobfolio\phone\phone(2042345678, 'CA');
		$this->assertEquals( true, $p->is_phone('mobile'));

		$p = new \blobfolio\phone\phone(1012345678, 'CN');
		$this->assertEquals( false, $p->is_phone('mobile'));

		$p = new \blobfolio\phone\phone(10123456, 'AM');
		$this->assertEquals( false, $p->is_phone('mobile'));

		$p = new \blobfolio\phone\phone(612345678, 'GB');
		$this->assertEquals( false, $p->is_phone('mobile'));
	}
}

?>