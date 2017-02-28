<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MW
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMW extends data {

	const CODE = 'MW';

	const PREFIX = 265;

	const REGION = 'Africa';

	const PATTERNS = array(
		'(?:1(?:\d{2})?|[2789]\d{2})\d{6}'
	);

	const TYPES = array(
		'(?:1[2-9]|21\d{2})\d{5}'=>array(
			'fixed'
		),
		'(?:111|77\d|88\d|99\d)\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'(2\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>