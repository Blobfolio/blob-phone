<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: EC
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataEC extends data {

	const CODE = 'EC';

	const PREFIX = 593;

	const REGION = 'South America';

	const PATTERNS = array(
		'1\d{9,10}|[2-8]\d{7}|9\d{8}'
	);

	const TYPES = array(
		'[2-7][2-7]\d{6}'=>array(
			'fixed'
		),
		'9(?:(?:39|[45][89]|7[7-9]|[89]\d)\d|6(?:[017-9]\d|2[0-4]))\d{5}'=>array(
			'mobile'
		),
		'1800\d{6,7}'=>array(
			'toll_free'
		),
		'[2-7]890\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{4})'=>'$1-$2-$3',
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3',
		'(1800)(\d{3})(\d{3,4})'=>'$1 $2 $3'
	);

}
?>