<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: EE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataEE extends data {

	const CODE = 'EE';

	const PREFIX = 372;

	const REGION = 'Europe';

	const PATTERNS = array(
		'1\d{3,4}|[3-9]\d{6,7}|800\d{6,7}'
	);

	const TYPES = array(
		'(?:3[23589]|4[3-8]|6\d|7[1-9]|88)\d{5}'=>array(
			'fixed'
		),
		'(?:5\d|8[1-5])\d{6}|5(?:[02]\d{2}|1(?:[0-8]\d|95)|5[0-478]\d|64[0-4]|65[1-589])\d{3}'=>array(
			'mobile'
		),
		'800(?:0\d{3}|1\d|[2-9])\d{3}'=>array(
			'toll_free'
		),
		'(?:40\d{2}|900)\d{4}'=>array(
			'premium_rate'
		),
		'70[0-2]\d{5}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'([3-79]\d{2})(\d{4})'=>'$1 $2',
		'(70)(\d{2})(\d{4})'=>'$1 $2 $3',
		'(8000)(\d{3})(\d{3})'=>'$1 $2 $3',
		'([458]\d{3})(\d{3,4})'=>'$1 $2'
	);

}
?>