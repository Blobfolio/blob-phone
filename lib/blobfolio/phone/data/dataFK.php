<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: FK
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataFK extends data {

	const CODE = 'FK';

	const PREFIX = 500;

	const REGION = '';

	const PATTERNS = array(
		'[2-7]\d{4}'
	);

	const TYPES = array(
		'[2-47]\d{4}'=>array(
			'fixed'
		),
		'[56]\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>