<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CV
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataCV extends data {

	const CODE = 'CV';

	const PREFIX = 238;

	const REGION = '';

	const PATTERNS = array(
		'[259]\d{6}'
	);

	const TYPES = array(
		'2(?:2[1-7]|3[0-8]|4[12]|5[1256]|6\d|7[1-3]|8[1-5])\d{4}'=>array(
			'fixed'
		),
		'(?:9\d|59)\d{5}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3'
	);

}
?>