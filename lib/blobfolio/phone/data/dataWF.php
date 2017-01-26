<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: WF
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataWF extends data {

	const CODE = 'WF';

	const PREFIX = 681;

	const REGION = '';

	const PATTERNS = array(
		'[4-8]\d{5}'
	);

	const TYPES = array(
		'(?:50|68|72)\d{4}'=>array(
			'fixed'
		),
		'(?:50|68|72|8[23])\d{4}'=>array(
			'mobile'
		),
		'[48]0\d{4}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3'
	);

}
?>