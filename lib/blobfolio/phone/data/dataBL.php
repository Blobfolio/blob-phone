<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BL
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataBL extends data {

	const CODE = 'BL';

	const PREFIX = 590;

	const REGION = '';

	const PATTERNS = array(
		'[56]\d{8}'
	);

	const TYPES = array(
		'590(?:2[7-9]|5[12]|87)\d{4}'=>array(
			'fixed'
		),
		'690(?:0[0-7]|[1-9]\d)\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>