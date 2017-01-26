<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NF
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataNF extends data {

	const CODE = 'NF';

	const PREFIX = 672;

	const REGION = '';

	const PATTERNS = array(
		'[13]\d{5}'
	);

	const TYPES = array(
		'(?:1(?:06|17|28|39)|3[012]\d)\d{3}'=>array(
			'fixed'
		),
		'3[58]\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{4})'=>'$1 $2',
		'(\d)(\d{5})'=>'$1 $2'
	);

}
?>