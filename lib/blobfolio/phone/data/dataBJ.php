<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BJ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBJ extends data {

	const CODE = 'BJ';

	const PREFIX = 229;

	const REGION = '';

	const PATTERNS = array(
		'[2689]\d{7}|7\d{3}'
	);

	const TYPES = array(
		'2(?:02|1[037]|2[45]|3[68])\d{5}'=>array(
			'fixed'
		),
		'(?:6[1-8]|9[03-9])\d{6}'=>array(
			'mobile'
		),
		'7[3-5]\d{2}'=>array(
			'toll_free'
		),
		'857[58]\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>