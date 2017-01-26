<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LT
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataLT extends data {

	const CODE = 'LT';

	const PREFIX = 370;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[3-9]\d{7}'
	);

	const TYPES = array(
		'(?:3[1478]|4[124-6]|52)\d{6}'=>array(
			'fixed'
		),
		'6\d{7}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'9(?:0[0239]|10)\d{5}'=>array(
			'premium_rate'
		),
		'808\d{5}'=>array(
			'shared_cost'
		),
		'700\d{5}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'([34]\d)(\d{6})'=>'$1 $2',
		'([3-6]\d{2})(\d{5})'=>'$1 $2',
		'([7-9]\d{2})(\d{2})(\d{3})'=>'$1 $2 $3',
		'(5)(2\d{2})(\d{4})'=>'$1 $2 $3'
	);

}
?>