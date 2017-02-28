<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BF
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBF extends data {

	const CODE = 'BF';

	const PREFIX = 226;

	const REGION = '';

	const PATTERNS = array(
		'[25-7]\d{7}'
	);

	const TYPES = array(
		'2(?:0(?:49|5[23]|9[016-9])|4(?:4[569]|5[4-6]|7[0179])|5(?:[34]\d|50))\d{4}'=>array(
			'fixed'
		),
		'(?:55[0-5]|6(?:[0-689]\d|7[0-5]))\d{5}|7\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>