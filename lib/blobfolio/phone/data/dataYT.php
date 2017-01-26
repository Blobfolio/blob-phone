<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: YT
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataYT extends data {

	const CODE = 'YT';

	const PREFIX = 262;

	const REGION = '';

	const PATTERNS = array(
		'[268]\d{8}'
	);

	const TYPES = array(
		'269(?:6[0-4]|50)\d{4}'=>array(
			'fixed'
		),
		'639\d{6}'=>array(
			'mobile'
		),
		'80\d{7}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array();

}
?>