<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MF
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMF extends data {

	const CODE = 'MF';

	const PREFIX = 590;

	const REGION = '';

	const PATTERNS = array(
		'[56]\d{8}'
	);

	const TYPES = array(
		'590(?:[02][79]|13|5[0-268]|[78]7)\d{4}'=>array(
			'fixed'
		),
		'690(?:0[0-7]|[1-9]\d)\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>