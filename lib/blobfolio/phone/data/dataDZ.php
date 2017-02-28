<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: DZ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataDZ extends data {

	const CODE = 'DZ';

	const PREFIX = 213;

	const REGION = '';

	const PATTERNS = array(
		'(?:[1-4]|[5-9]\d)\d{7}'
	);

	const TYPES = array(
		'(?:1\d|2[013-79]|3[0-8]|4[0135689])\d{6}|9619\d{5}'=>array(
			'fixed'
		),
		'(?:5[4-6]|7[7-9])\d{7}|6(?:[569]\d|7[0-6])\d{6}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'80[3-689]1\d{5}'=>array(
			'premium_rate'
		),
		'80[12]1\d{5}'=>array(
			'shared_cost'
		),
		'98[23]\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([1-4]\d)(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'([5-8]\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(9\d)(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>