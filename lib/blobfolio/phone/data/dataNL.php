<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NL
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataNL extends data {

	const CODE = 'NL';

	const PREFIX = 31;

	const REGION = 'Europe';

	const PATTERNS = array(
		'1\d{4,8}|[2-7]\d{8}|[89]\d{6,9}'
	);

	const TYPES = array(
		'(?:1[0135-8]|2[02-69]|3[0-68]|4[0135-9]|[57]\d|8[478])\d{7}'=>array(
			'fixed'
		),
		'6[1-58]\d{7}'=>array(
			'mobile'
		),
		'800\d{4,7}'=>array(
			'toll_free'
		),
		'90[069]\d{4,7}'=>array(
			'premium_rate'
		),
		'(?:6760|85\d{2})\d{5}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([1-578]\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([1-5]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(6)(\d{8})'=>'$1 $2',
		'(66)(\d{7})'=>'$1 $2',
		'(14)(\d{3,4})'=>'$1 $2',
		'([89]0\d)(\d{4,7})'=>'$1 $2'
	);

}
?>