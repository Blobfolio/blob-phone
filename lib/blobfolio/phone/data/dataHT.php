<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: HT
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataHT extends data {

	const CODE = 'HT';

	const PREFIX = 509;

	const REGION = 'North America';

	const PATTERNS = array(
		'[2-489]\d{7}'
	);

	const TYPES = array(
		'2(?:[248]\d|5[1-5]|94)\d{5}'=>array(
			'fixed'
		),
		'(?:3[1-9]\d|4\d{2}|9(?:8[0-35]|9[5-9]))\d{5}'=>array(
			'mobile'
		),
		'8\d{7}'=>array(
			'toll_free'
		),
		'98[89]\d{5}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{4})'=>'$1 $2 $3'
	);

}
?>