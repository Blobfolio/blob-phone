<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LS
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataLS extends data {

	const CODE = 'LS';

	const PREFIX = 266;

	const REGION = '';

	const PATTERNS = array(
		'[2568]\d{7}'
	);

	const TYPES = array(
		'2\d{7}'=>array(
			'fixed'
		),
		'[56]\d{7}'=>array(
			'mobile'
		),
		'800[256]\d{4}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2'
	);

}
?>