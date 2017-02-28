<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SN
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSN extends data {

	const CODE = 'SN';

	const PREFIX = 221;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[3789]\d{8}'
	);

	const TYPES = array(
		'3(?:0(?:1[0-2]|80)|282|3(?:8[1-9]|9[3-9])|611)\d{5}'=>array(
			'fixed'
		),
		'7(?:[06-8]\d|21|90)\d{6}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'88[4689]\d{6}'=>array(
			'premium_rate'
		),
		'81[02468]\d{6}'=>array(
			'shared_cost'
		),
		'39[01]\d{6}|3392\d{5}|93330\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>