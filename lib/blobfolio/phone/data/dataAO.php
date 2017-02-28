<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AO
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataAO extends data {

	const CODE = 'AO';

	const PREFIX = 244;

	const REGION = '';

	const PATTERNS = array(
		'[29]\d{8}'
	);

	const TYPES = array(
		'2\d(?:[26-9]\d|\d[26-9])\d{5}'=>array(
			'fixed'
		),
		'9[1-49]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>