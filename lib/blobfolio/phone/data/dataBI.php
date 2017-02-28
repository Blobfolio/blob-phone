<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BI
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBI extends data {

	const CODE = 'BI';

	const PREFIX = 257;

	const REGION = '';

	const PATTERNS = array(
		'[267]\d{7}'
	);

	const TYPES = array(
		'22\d{6}'=>array(
			'fixed'
		),
		'(?:29|6[189]|7[124-9])\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>