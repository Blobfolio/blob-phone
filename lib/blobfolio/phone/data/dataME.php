<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: ME
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataME extends data {

	const CODE = 'ME';

	const PREFIX = 382;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-9]\d{7,8}'
	);

	const TYPES = array(
		'(?:20[2-8]|3(?:0[2-7]|[12][35-7]|3[4-7])|4(?:0[2367]|1[267])|5(?:0[467]|1[267]|2[367]))\d{5}'=>array(
			'fixed'
		),
		'6(?:00\d|3[24]\d|61\d|7(?:[0-8]\d|9(?:[3-9]|[0-2]\d))|[89]\d{2})\d{4}'=>array(
			'mobile'
		),
		'80\d{6}'=>array(
			'toll_free'
		),
		'(?:9(?:4[1568]|5[178]))\d{5}'=>array(
			'premium_rate'
		),
		'78[1-9]\d{5}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(67)(9)(\d{3})(\d{3})'=>'$1 $2 $3 $4'
	);

}
?>