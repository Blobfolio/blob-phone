<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MO
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMO extends data {

	const CODE = 'MO';

	const PREFIX = 853;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[268]\d{7}'
	);

	const TYPES = array(
		'(?:28[2-57-9]|8[2-57-9]\d)\d{5}'=>array(
			'fixed'
		),
		'6(?:[2356]\d|8[158])\d{5}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([268]\d{3})(\d{4})'=>'$1 $2'
	);

}
?>