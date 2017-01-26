<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CX
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCX extends data {

	const CODE = 'CX';

	const PREFIX = 61;

	const REGION = '';

	const PATTERNS = array(
		'[1458]\d{5,9}'
	);

	const TYPES = array(
		'89164\d{4}'=>array(
			'fixed'
		),
		'14(?:5\d|71)\d{5}|4(?:[0-2]\d|3[0-57-9]|4[47-9]|5[0-25-9]|6[6-9]|7[02-9]|8[147-9]|9[017-9])\d{6}'=>array(
			'mobile'
		),
		'180(?:0\d{3}|2)\d{3}'=>array(
			'toll_free'
		),
		'190[0126]\d{6}'=>array(
			'premium_rate'
		),
		'13(?:00\d{2})?\d{4}'=>array(
			'shared_cost'
		),
		'500\d{6}'=>array(
			'personal_number'
		),
		'550\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array();

}
?>