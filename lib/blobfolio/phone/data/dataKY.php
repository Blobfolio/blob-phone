<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: KY
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataKY extends data {

	const CODE = 'KY';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[3589]\d{9}'
	);

	const TYPES = array(
		'345(?:2(?:22|44)|444|6(?:23|38|40)|7(?:4[35-79]|6[6-9]|77)|8(?:00|1[45]|25|[48]8)|9(?:14|4[035-9]))\d{4}'=>array(
			'fixed'
		),
		'345(?:32[1-9]|5(?:1[67]|2[5-7]|4[6-8]|76)|9(?:1[67]|2[2-9]|3[689]))\d{4}'=>array(
			'mobile'
		),
		'8(?:00|44|55|66|77|88)[2-9]\d{6}'=>array(
			'toll_free'
		),
		'900[2-9]\d{6}|345976\d{4}'=>array(
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