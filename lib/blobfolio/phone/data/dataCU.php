<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CU
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCU extends data {

	const CODE = 'CU';

	const PREFIX = 53;

	const REGION = '';

	const PATTERNS = array(
		'[2-57]\d{5,7}'
	);

	const TYPES = array(
		'2[1-4]\d{5,6}|3(?:1\d{6}|[23]\d{4,6})|4(?:[125]\d{5,6}|[36]\d{6}|[78]\d{4,6})|7\d{6,7}'=>array(
			'fixed'
		),
		'5\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d)(\d{6,7})'=>'$1 $2',
		'(\d{2})(\d{4,6})'=>'$1 $2',
		'(\d)(\d{7})'=>'$1 $2'
	);

}
?>