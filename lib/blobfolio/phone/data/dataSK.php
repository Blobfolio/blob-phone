<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SK
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSK extends data {

	const CODE = 'SK';

	const PREFIX = 421;

	const REGION = 'Europe';

	const PATTERNS = array(
		'(?:[2-68]\d{5,8}|9\d{6,8})'
	);

	const TYPES = array(
		'2(?:1(?:6\d{3,4}|7\d{3})|[2-9]\d{7})|[3-5][1-8](?:16\d{2,3}|\d{7})'=>array(
			'fixed'
		),
		'9(?:0(?:[1-8]\d|9[1-9])|(?:1[0-24-9]|[45]\d)\d)\d{5}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'9(?:[78]\d{7}|00\d{6})'=>array(
			'premium_rate'
		),
		'8[5-9]\d{7}'=>array(
			'shared_cost'
		),
		'6(?:02|5[0-4]|9[0-6])\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(2)(1[67])(\d{3,4})'=>'$1 $2 $3',
		'([3-5]\d)(16)(\d{2,3})'=>'$1 $2 $3',
		'(2)(\d{3})(\d{3})(\d{2})'=>'$1/$2 $3 $4',
		'([3-5]\d)(\d{3})(\d{2})(\d{2})'=>'$1/$2 $3 $4',
		'([689]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(9090)(\d{3})'=>'$1 $2'
	);

}
?>