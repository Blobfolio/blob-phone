<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SJ
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSJ extends data {

	const CODE = 'SJ';

	const PREFIX = 47;

	const REGION = '';

	const PATTERNS = array(
		'0\d{4}|[4789]\d{7}'
	);

	const TYPES = array(
		'79\d{6}'=>array(
			'fixed'
		),
		'(?:4[015-8]|5[89]|9\d)\d{6}'=>array(
			'mobile'
		),
		'80[01]\d{5}'=>array(
			'toll_free'
		),
		'82[09]\d{5}'=>array(
			'premium_rate'
		),
		'810(?:0[0-6]|[2-8]\d)\d{3}'=>array(
			'shared_cost'
		),
		'880\d{5}'=>array(
			'personal_number'
		),
		'85[0-5]\d{5}'=>array(
			'voip'
		),
		'81[23]\d{5}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array();

}
?>