<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SX
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSX extends data {

	const CODE = 'SX';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[5789]\d{9}'
	);

	const TYPES = array(
		'7215(?:4[2-8]|8[239]|9[056])\d{4}'=>array(
			'fixed'
		),
		'7215(?:1[02]|2\d|5[034679]|8[014-8])\d{4}'=>array(
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