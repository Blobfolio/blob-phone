<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NZ
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataNZ extends data {

	const CODE = 'NZ';

	const PREFIX = 64;

	const REGION = 'Australia';

	const PATTERNS = array(
		'6[235-9]\d{6}|[2-57-9]\d{7,10}'
	);

	const TYPES = array(
		'(?:3[2-79]|[49][2-9]|6[235-9]|7[2-57-9])\d{6}|24099\d{3}'=>array(
			'fixed'
		),
		'2(?:[028]\d{7,8}|1(?:[03]\d{5,7}|[12457]\d{5,6}|[689]\d{5})|[79]\d{7})'=>array(
			'mobile'
		),
		'508\d{6,7}|80\d{6,8}'=>array(
			'toll_free'
		),
		'90\d{7,9}'=>array(
			'premium_rate'
		),
		'70\d{7}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'([34679])(\d{3})(\d{4})'=>'$1-$2 $3',
		'(24099)(\d{3})'=>'$1 $2',
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{3,5})'=>'$1 $2 $3',
		'(2\d)(\d{3,4})(\d{4})'=>'$1 $2 $3',
		'(\d{3})(\d{3})(\d{3,4})'=>'$1 $2 $3'
	);

}
?>