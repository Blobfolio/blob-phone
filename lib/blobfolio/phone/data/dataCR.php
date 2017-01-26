<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CR
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCR extends data {

	const CODE = 'CR';

	const PREFIX = 506;

	const REGION = 'South America';

	const PATTERNS = array(
		'[24-9]\d{7,9}'
	);

	const TYPES = array(
		'2[0-24-7]\d{6}'=>array(
			'fixed'
		),
		'5(?:0[01]|7[0-3])\d{5}|6(?:[0-4]\d{3}|500[01])\d{3}|(?:7[0-3]|8[3-9])\d{6}'=>array(
			'mobile'
		),
		'800\d{7}'=>array(
			'toll_free'
		),
		'90[059]\d{7}'=>array(
			'premium_rate'
		),
		'210[0-6]\d{4}|4\d{7}|5100\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>