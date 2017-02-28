<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: YE
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataYE extends data {

	const CODE = 'YE';

	const PREFIX = 967;

	const REGION = '';

	const PATTERNS = array(
		'[1-7]\d{6,8}'
	);

	const TYPES = array(
		'(?:1(?:7\d|[2-68])|2[2-68]|3[2358]|4[2-58]|5[2-6]|6[3-58]|7[24-68])\d{5}'=>array(
			'fixed'
		),
		'7[0137]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([1-7])(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(7\d{2})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>