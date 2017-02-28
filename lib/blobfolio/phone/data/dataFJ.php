<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: FJ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataFJ extends data {

	const CODE = 'FJ';

	const PREFIX = 679;

	const REGION = 'Australia';

	const PATTERNS = array(
		'[36-9]\d{6}|0\d{10}'
	);

	const TYPES = array(
		'(?:3[0-5]|6[25-7]|8[58])\d{5}'=>array(
			'fixed'
		),
		'(?:7[0-8]|8[034679]|9\d)\d{5}'=>array(
			'mobile'
		),
		'0800\d{7}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2',
		'(\d{4})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>