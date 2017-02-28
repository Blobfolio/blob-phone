<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: FM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataFM extends data {

	const CODE = 'FM';

	const PREFIX = 691;

	const REGION = '';

	const PATTERNS = array(
		'[39]\d{6}'
	);

	const TYPES = array(
		'3[2357]0[1-9]\d{3}|9[2-6]\d{5}'=>array(
			'fixed'
		),
		'3[2357]0[1-9]\d{3}|9[2-7]\d{5}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>