<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LC
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataLC extends data {

	const CODE = 'LC';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[5789]\d{9}'
	);

	const TYPES = array(
		'758(?:4(?:30|5[0-9]|6[2-9]|8[0-2])|57[0-2]|638)\d{4}'=>array(
			'fixed'
		),
		'758(?:28[4-7]|384|4(?:6[01]|8[4-9])|5(?:1[89]|20|84)|7(?:1[2-9]|2[0-8]))\d{4}'=>array(
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