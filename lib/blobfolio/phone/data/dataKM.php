<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: KM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataKM extends data {

	const CODE = 'KM';

	const PREFIX = 269;

	const REGION = '';

	const PATTERNS = array(
		'[3478]\d{6}'
	);

	const TYPES = array(
		'7[4-7]\d{5}'=>array(
			'fixed'
		),
		'[34]\d{6}'=>array(
			'mobile'
		),
		'(?:39[01]|8\d{2})\d{4}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3'
	);

}
?>