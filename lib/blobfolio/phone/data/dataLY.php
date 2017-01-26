<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LY
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataLY extends data {

	const CODE = 'LY';

	const PREFIX = 218;

	const REGION = '';

	const PATTERNS = array(
		'[25679]\d{8}'
	);

	const TYPES = array(
		'(?:2[1345]|5[1347]|6[123479]|71)\d{7}'=>array(
			'fixed'
		),
		'9[1-6]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([25679]\d)(\d{7})'=>'$1-$2'
	);

}
?>