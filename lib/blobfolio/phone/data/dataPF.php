<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PF
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataPF extends data {

	const CODE = 'PF';

	const PREFIX = 689;

	const REGION = '';

	const PATTERNS = array(
		'4\d{5,7}|8\d{7}'
	);

	const TYPES = array(
		'4(?:[09][45689]\d|4)\d{4}'=>array(
			'fixed'
		),
		'8[79]\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3'
	);

}
?>