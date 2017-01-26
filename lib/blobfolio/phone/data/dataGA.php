<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GA
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataGA extends data {

	const CODE = 'GA';

	const PREFIX = 241;

	const REGION = '';

	const PATTERNS = array(
		'0?\d{7}'
	);

	const TYPES = array(
		'01\d{6}'=>array(
			'fixed'
		),
		'0?[2-7]\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d)(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>