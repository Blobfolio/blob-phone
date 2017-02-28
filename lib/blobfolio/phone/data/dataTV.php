<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TV
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTV extends data {

	const CODE = 'TV';

	const PREFIX = 688;

	const REGION = '';

	const PATTERNS = array(
		'[279]\d{4,6}'
	);

	const TYPES = array(
		'2[02-9]\d{3}'=>array(
			'fixed'
		),
		'(?:70\d|90)\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>