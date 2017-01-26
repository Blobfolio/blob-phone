<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SD
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSD extends data {

	const CODE = 'SD';

	const PREFIX = 249;

	const REGION = '';

	const PATTERNS = array(
		'[19]\d{8}'
	);

	const TYPES = array(
		'1(?:[125]\d|8[3567])\d{6}'=>array(
			'fixed'
		),
		'9[0-3569]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>