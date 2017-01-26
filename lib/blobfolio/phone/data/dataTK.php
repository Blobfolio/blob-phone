<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TK
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataTK extends data {

	const CODE = 'TK';

	const PREFIX = 690;

	const REGION = '';

	const PATTERNS = array(
		'[2-47]\d{3,6}'
	);

	const TYPES = array(
		'(?:2[2-4]|[34]\d)\d{2,5}'=>array(
			'fixed'
		),
		'7[2-4]\d{2,5}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>