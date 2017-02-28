<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PL
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataPL extends data {

	const CODE = 'PL';

	const PREFIX = 48;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[12]\d{6,8}|[3-57-9]\d{8}|6\d{5,8}'
	);

	const TYPES = array(
		'(?:1[2-8]|2[2-69]|3[2-4]|4[1-468]|5[24-689]|6[1-3578]|7[14-7]|8[1-79]|9[145])\d{7}|[12]2\d{5}'=>array(
			'fixed'
		),
		'(?:5[0137]|6[069]|7[2389]|88)\d{7}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'70\d{7}'=>array(
			'premium_rate'
		),
		'801\d{6}'=>array(
			'shared_cost'
		),
		'39\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{2})(\d{1})(\d{4})'=>'$1 $2 $3',
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{3})(\d{2})(\d{2,3})'=>'$1 $2 $3',
		'(\d{3})(\d{3})'=>'$1 $2'
	);

}
?>