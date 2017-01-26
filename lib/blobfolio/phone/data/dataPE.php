<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataPE extends data {

	const CODE = 'PE';

	const PREFIX = 51;

	const REGION = 'South America';

	const PATTERNS = array(
		'[14-9]\d{7,8}'
	);

	const TYPES = array(
		'(?:1\d|4[1-4]|5[1-46]|6[1-7]|7[2-46]|8[2-4])\d{6}'=>array(
			'fixed'
		),
		'9\d{8}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'805\d{5}'=>array(
			'premium_rate'
		),
		'801\d{5}'=>array(
			'shared_cost'
		),
		'80[24]\d{5}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(1)(\d{7})'=>'$1 $2',
		'([4-8]\d)(\d{6})'=>'$1 $2',
		'(\d{3})(\d{5})'=>'$1 $2',
		'(9\d{2})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>