<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SS
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSS extends data {

	const CODE = 'SS';

	const PREFIX = 211;

	const REGION = '';

	const PATTERNS = array(
		'[19]\d{8}'
	);

	const TYPES = array(
		'18\d{7}'=>array(
			'fixed'
		),
		'(?:12|9[1257])\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>