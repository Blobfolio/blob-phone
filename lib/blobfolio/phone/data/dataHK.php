<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: HK
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataHK extends data {

	const CODE = 'HK';

	const PREFIX = 852;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[235-7]\d{7}|8\d{7,8}|9\d{4,10}'
	);

	const TYPES = array(
		'(?:[23]\d|58)\d{6}'=>array(
			'fixed'
		),
		'(?:5[1-79]\d|6\d{2}|8[4-79]\d|9(?:0[1-9]|[1-8]\d))\d{5}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'900(?:[0-24-9]\d{7}|3\d{1,4})'=>array(
			'premium_rate'
		),
		'8[1-3]\d{6}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2',
		'(800)(\d{3})(\d{3})'=>'$1 $2 $3',
		'(900)(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3 $4',
		'(900)(\d{2,5})'=>'$1 $2'
	);

}
?>