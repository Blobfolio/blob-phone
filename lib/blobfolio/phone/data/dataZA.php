<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: ZA
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataZA extends data {

	const CODE = 'ZA';

	const PREFIX = 27;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[1-79]\d{8}|8\d{4,8}'
	);

	const TYPES = array(
		'(?:1[0-8]|2[1-378]|3[1-69]|4\d|5[1346-8])\d{7}'=>array(
			'fixed'
		),
		'(?:6\d|7[0-46-9])\d{7}|8(?:[1-4]\d{1,5}|5\d{5})\d{2}'=>array(
			'mobile'
		),
		'80\d{7}'=>array(
			'toll_free'
		),
		'86[2-9]\d{6}|9[0-2]\d{7}'=>array(
			'premium_rate'
		),
		'860\d{6}'=>array(
			'shared_cost'
		),
		'87\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(860)(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{2})(\d{3,4})'=>'$1 $2',
		'(\d{2})(\d{3})(\d{2,3})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>