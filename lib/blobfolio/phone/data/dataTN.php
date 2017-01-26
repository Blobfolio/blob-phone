<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TN
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataTN extends data {

	const CODE = 'TN';

	const PREFIX = 216;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[2-57-9]\d{7}'
	);

	const TYPES = array(
		'3(?:[012]\d|6[0-4]|91)\d{5}|7\d{7}|81200\d{3}'=>array(
			'fixed'
		),
		'(?:[259]\d|4[0-6])\d{6}'=>array(
			'mobile'
		),
		'8010\d{4}'=>array(
			'toll_free'
		),
		'88\d{6}'=>array(
			'premium_rate'
		),
		'8[12]10\d{4}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>