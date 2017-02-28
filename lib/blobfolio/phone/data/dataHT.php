<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: HT
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataHT extends data {

	const CODE = 'HT';

	const PREFIX = 509;

	const REGION = 'North America';

	const PATTERNS = array(
		'[2-489]\d{7}'
	);

	const TYPES = array(
		'2(?:[24]\d|5[1-5])\d{5}'=>array(
			'fixed'
		),
		'(?:2(?:81|9\d)|3[1-9]\d|4\d{2}|9(?:8[0-35]|9[5-9]))\d{5}'=>array(
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