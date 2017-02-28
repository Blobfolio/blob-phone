<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BL
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


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