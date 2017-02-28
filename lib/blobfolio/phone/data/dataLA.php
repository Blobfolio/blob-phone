<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LA
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataLA extends data {

	const CODE = 'LA';

	const PREFIX = 856;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[2-8]\d{7,9}'
	);

	const TYPES = array(
		'(?:2[13]|3(?:0\d|[14])|[5-7][14]|41|8[1468])\d{6}'=>array(
			'fixed'
		),
		'20(?:2[2389]|5[4-689]|7[6-8]|9[15-9])\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(20)(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3 $4',
		'([2-8]\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'(30)(\d{2})(\d{2})(\d{3})'=>'$1 $2 $3 $4'
	);

}
?>