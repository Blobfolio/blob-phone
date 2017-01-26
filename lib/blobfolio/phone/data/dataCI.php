<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CI
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCI extends data {

	const CODE = 'CI';

	const PREFIX = 225;

	const REGION = '';

	const PATTERNS = array(
		'[02-8]\d{7}'
	);

	const TYPES = array(
		'(?:2(?:0[023]|1[02357]|[23][045]|4[03-5])|3(?:0[06]|1[069]|[2-4][07]|5[09]|6[08]))\d{5}'=>array(
			'fixed'
		),
		'(?:0[1-9]|4\d|5[14-9]|6[015-79]|7[57-9]|8[7-9])\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>