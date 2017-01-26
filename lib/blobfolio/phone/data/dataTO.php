<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TO
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataTO extends data {

	const CODE = 'TO';

	const PREFIX = 676;

	const REGION = '';

	const PATTERNS = array(
		'[02-8]\d{4,6}'
	);

	const TYPES = array(
		'(?:2\d|3[1-8]|4[1-4]|[56]0|7[0149]|8[05])\d{3}'=>array(
			'fixed'
		),
		'(?:7[578]|8[47-9])\d{5}'=>array(
			'mobile'
		),
		'0800\d{3}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})'=>'$1-$2',
		'(\d{3})(\d{4})'=>'$1 $2',
		'(\d{4})(\d{3})'=>'$1 $2'
	);

}
?>