<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: HR
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataHR extends data {

	const CODE = 'HR';

	const PREFIX = 385;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[1-7]\d{5,8}|[89]\d{6,11}'
	);

	const TYPES = array(
		'1\d{7}|(?:2[0-3]|3[1-5]|4[02-47-9]|5[1-3])\d{6,7}'=>array(
			'fixed'
		),
		'9(?:[1-9]\d{6,10}|01\d{6,9})'=>array(
			'mobile'
		),
		'80[01]\d{4,7}'=>array(
			'toll_free'
		),
		'6(?:[01459]\d{4,7})'=>array(
			'premium_rate'
		),
		'7[45]\d{4,7}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(1)(\d{4})(\d{3})'=>'$1 $2 $3',
		'(6[09])(\d{4})(\d{3})'=>'$1 $2 $3',
		'([67]2)(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'([2-5]\d)(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(9\d)(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(9\d)(\d{4})(\d{4})'=>'$1 $2 $3',
		'(9\d)(\d{3,4})(\d{3})(\d{3})'=>'$1 $2 $3 $4',
		'(\d{2})(\d{2})(\d{2,3})'=>'$1 $2 $3',
		'(\d{2})(\d{3,4})(\d{3})'=>'$1 $2 $3',
		'(80[01])(\d{2})(\d{2,3})'=>'$1 $2 $3',
		'(80[01])(\d{3,4})(\d{3})'=>'$1 $2 $3'
	);

}
?>