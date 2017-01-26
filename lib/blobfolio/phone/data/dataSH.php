<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SH
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSH extends data {

	const CODE = 'SH';

	const PREFIX = 290;

	const REGION = '';

	const PATTERNS = array(
		'[256]\d{4}'
	);

	const TYPES = array(
		'2(?:[0-57-9]\d|6[4-9])\d{2}'=>array(
			'fixed'
		),
		'[56]\d{4}'=>array(
			'mobile'
		),
		'262\d{2}'=>array(
			'voip'
		)
	);

	const FORMATS = array();

}
?>