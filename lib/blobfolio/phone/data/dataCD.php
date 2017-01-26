<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CD
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCD extends data {

	const CODE = 'CD';

	const PREFIX = 243;

	const REGION = '';

	const PATTERNS = array(
		'[2-6]\d{6}|[18]\d{6,8}|9\d{8}'
	);

	const TYPES = array(
		'1(?:2\d{7}|\d{6})|[2-6]\d{6}'=>array(
			'fixed'
		),
		'8(?:[0-2459]\d{2}|8)\d{5}|9[017-9]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3',
		'([89]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{2})(\d{2})(\d{3})'=>'$1 $2 $3',
		'(\d{2})(\d{5})'=>'$1 $2'
	);

}
?>