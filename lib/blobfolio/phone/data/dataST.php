<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: ST
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataST extends data {

	const CODE = 'ST';

	const PREFIX = 239;

	const REGION = '';

	const PATTERNS = array(
		'[29]\d{6}'
	);

	const TYPES = array(
		'22\d{5}'=>array(
			'fixed'
		),
		'9(?:0(?:0[5-9]|[1-9]\d)|[89]\d{2})\d{3}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>