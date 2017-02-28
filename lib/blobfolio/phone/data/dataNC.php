<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NC
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataNC extends data {

	const CODE = 'NC';

	const PREFIX = 687;

	const REGION = '';

	const PATTERNS = array(
		'[2-57-9]\d{5}'
	);

	const TYPES = array(
		'(?:2[03-9]|3[0-5]|4[1-7]|88)\d{4}'=>array(
			'fixed'
		),
		'(?:5[0-4]|[79]\d|8[0-79])\d{4}'=>array(
			'mobile'
		),
		'36\d{4}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})'=>'$1.$2.$3'
	);

}
?>