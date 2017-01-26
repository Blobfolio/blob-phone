<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: WS
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataWS extends data {

	const CODE = 'WS';

	const PREFIX = 685;

	const REGION = '';

	const PATTERNS = array(
		'[2-8]\d{4,6}'
	);

	const TYPES = array(
		'(?:[2-5]\d|6[1-9]|84\d{2})\d{3}'=>array(
			'fixed'
		),
		'(?:60|7[25-7]\d)\d{4}'=>array(
			'mobile'
		),
		'800\d{3}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(8\d{2})(\d{3,4})'=>'$1 $2',
		'(7\d)(\d{5})'=>'$1 $2',
		'(\d{5})'=>'$1'
	);

}
?>