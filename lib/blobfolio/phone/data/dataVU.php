<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: VU
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataVU extends data {

	const CODE = 'VU';

	const PREFIX = 678;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[2-57-9]\d{4,6}'
	);

	const TYPES = array(
		'(?:2[02-9]\d|3(?:[5-7]\d|8[0-8])|48[4-9]|88\d)\d{2}'=>array(
			'fixed'
		),
		'(?:5(?:7[2-5]|[0-689]\d)|7[013-7]\d)\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>