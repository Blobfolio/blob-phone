<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GM
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataGM extends data {

	const CODE = 'GM';

	const PREFIX = 220;

	const REGION = '';

	const PATTERNS = array(
		'[2-9]\d{6}'
	);

	const TYPES = array(
		'(?:4(?:[23]\d{2}|4(?:1[024679]|[6-9]\d))|5(?:54[0-7]|6(?:[67]\d)|7(?:1[04]|2[035]|3[58]|48))|8\d{3})\d{3}'=>array(
			'fixed'
		),
		'[23679]\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>