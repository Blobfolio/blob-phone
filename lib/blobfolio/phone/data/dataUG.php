<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: UG
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataUG extends data {

	const CODE = 'UG';

	const PREFIX = 256;

	const REGION = '';

	const PATTERNS = array(
		'\d{9}'
	);

	const TYPES = array(
		'20(?:[0147]\d{2}|2(?:40|[5-9]\d)|3(?:0[0-4]|[23]\d)|5[0-4]\d|6[035-9]\d|8[0-2]\d)\d{4}|[34]\d{8}'=>array(
			'fixed'
		),
		'7(?:(?:0[0-7]|[15789]\d|30|4[0-4])\d|2(?:[03]\d|60))\d{5}'=>array(
			'mobile'
		),
		'800[123]\d{5}'=>array(
			'toll_free'
		),
		'90[123]\d{6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{6})'=>'$1 $2',
		'(\d{2})(\d{7})'=>'$1 $2',
		'(2024)(\d{5})'=>'$1 $2'
	);

}
?>