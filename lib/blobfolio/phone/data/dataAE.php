<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataAE extends data {

	const CODE = 'AE';

	const PREFIX = 971;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[2-79]\d{7,8}|800\d{2,9}'
	);

	const TYPES = array(
		'[2-4679][2-8]\d{6}'=>array(
			'fixed'
		),
		'5[024-68]\d{7}'=>array(
			'mobile'
		),
		'400\d{6}|800\d{2,9}'=>array(
			'toll_free'
		),
		'900[02]\d{5}'=>array(
			'premium_rate'
		),
		'700[05]\d{5}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'([2-4679])(\d{3})(\d{4})'=>'$1 $2 $3',
		'(5\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([479]00)(\d)(\d{5})'=>'$1 $2 $3',
		'([68]00)(\d{2,9})'=>'$1 $2'
	);

}
?>