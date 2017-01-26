<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LI
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataLI extends data {

	const CODE = 'LI';

	const PREFIX = 423;

	const REGION = 'Europe';

	const PATTERNS = array(
		'6\d{8}|[23789]\d{6}'
	);

	const TYPES = array(
		'(?:2(?:01|1[27]|3\d|6[02-578]|96)|3(?:7[0135-7]|8[048]|9[0269]))\d{4}'=>array(
			'fixed'
		),
		'6(?:5(?:09|1\d|20)|6(?:0[0-6]|10|2[06-9]|39))\d{5}|7(?:[37-9]\d|42|56)\d{4}'=>array(
			'mobile'
		),
		'80(?:02[28]|9\d{2})\d{2}'=>array(
			'toll_free'
		),
		'90(?:02[258]|1(?:23|3[14])|66[136])\d{2}'=>array(
			'premium_rate'
		),
		'697(?:42|56|[78]\d)\d{4}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3',
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(69)(7\d{2})(\d{4})'=>'$1 $2 $3'
	);

}
?>