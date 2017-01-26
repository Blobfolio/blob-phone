<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CK
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCK extends data {

	const CODE = 'CK';

	const PREFIX = 682;

	const REGION = '';

	const PATTERNS = array(
		'[2-8]\d{4}'
	);

	const TYPES = array(
		'(?:2\d|3[13-7]|4[1-5])\d{3}'=>array(
			'fixed'
		),
		'[5-8]\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})'=>'$1 $2'
	);

}
?>