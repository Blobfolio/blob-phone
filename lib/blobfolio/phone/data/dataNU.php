<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NU
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataNU extends data {

	const CODE = 'NU';

	const PREFIX = 683;

	const REGION = '';

	const PATTERNS = array(
		'[1-5]\d{3}'
	);

	const TYPES = array(
		'[34]\d{3}'=>array(
			'fixed'
		),
		'[125]\d{3}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>