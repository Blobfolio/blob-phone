<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AX
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataAX extends data {

	const CODE = 'AX';

	const PREFIX = 358;

	const REGION = '';

	const PATTERNS = array(
		'[135]\d{5,9}|[27]\d{4,9}|4\d{5,10}|6\d{7,8}|8\d{6,9}'
	);

	const TYPES = array(
		'18[1-8]\d{3,9}'=>array(
			'fixed'
		),
		'4\d{5,10}|50\d{4,8}'=>array(
			'mobile'
		),
		'800\d{4,7}'=>array(
			'toll_free'
		),
		'[67]00\d{5,6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array();

}
?>