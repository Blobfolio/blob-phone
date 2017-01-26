<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: KP
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataKP extends data {

	const CODE = 'KP';

	const PREFIX = 850;

	const REGION = '';

	const PATTERNS = array(
		'1\d{9}|[28]\d{7}'
	);

	const TYPES = array(
		'2\d{7}|85\d{6}'=>array(
			'fixed'
		),
		'19[123]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>