<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NR
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataNR extends data {

	const CODE = 'NR';

	const PREFIX = 674;

	const REGION = '';

	const PATTERNS = array(
		'[458]\d{6}'
	);

	const TYPES = array(
		'(?:444|888)\d{4}'=>array(
			'fixed'
		),
		'55[5-9]\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>