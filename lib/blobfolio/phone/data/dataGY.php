<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GY
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGY extends data {

	const CODE = 'GY';

	const PREFIX = 592;

	const REGION = '';

	const PATTERNS = array(
		'[2-46-9]\d{6}'
	);

	const TYPES = array(
		'(?:2(?:1[6-9]|2[0-35-9]|3[1-4]|5[3-9]|6\d|7[0-24-79])|3(?:2[25-9]|3\d)|4(?:4[0-24]|5[56])|77[1-57])\d{4}'=>array(
			'fixed'
		),
		'6\d{6}'=>array(
			'mobile'
		),
		'(?:289|862)\d{4}'=>array(
			'toll_free'
		),
		'9008\d{3}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>