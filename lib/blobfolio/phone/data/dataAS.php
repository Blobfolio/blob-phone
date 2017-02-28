<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AS
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataAS extends data {

	const CODE = 'AS';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[5689]\d{9}'
	);

	const TYPES = array(
		'6846(?:22|33|44|55|77|88|9[19])\d{4}'=>array(
			'fixed'
		),
		'684(?:2(?:5[2468]|72)|7(?:3[13]|70))\d{4}'=>array(
			'mobile'
		),
		'8(?:00|44|55|66|77|88)[2-9]\d{6}'=>array(
			'toll_free'
		),
		'900[2-9]\d{6}'=>array(
			'premium_rate'
		),
		'5(?:00|22|33|44|66|77|88)[2-9]\d{6}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>