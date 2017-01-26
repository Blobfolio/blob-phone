<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: DJ
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataDJ extends data {

	const CODE = 'DJ';

	const PREFIX = 253;

	const REGION = '';

	const PATTERNS = array(
		'[27]\d{7}'
	);

	const TYPES = array(
		'2(?:1[2-5]|7[45])\d{5}'=>array(
			'fixed'
		),
		'77\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>