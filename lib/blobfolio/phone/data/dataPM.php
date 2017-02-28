<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataPM extends data {

	const CODE = 'PM';

	const PREFIX = 508;

	const REGION = '';

	const PATTERNS = array(
		'[45]\d{5}'
	);

	const TYPES = array(
		'41\d{4}'=>array(
			'fixed'
		),
		'55\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([45]\d)(\d{2})(\d{2})'=>'$1 $2 $3'
	);

}
?>