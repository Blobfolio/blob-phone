<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AC
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataAC extends data {

	const CODE = 'AC';

	const PREFIX = 247;

	const REGION = '';

	const PATTERNS = array(
		'[46]\d{4}|[01589]\d{5}'
	);

	const TYPES = array(
		'6[2-467]\d{3}'=>array(
			'fixed'
		),
		'4\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>