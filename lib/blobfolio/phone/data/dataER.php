<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: ER
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataER extends data {

	const CODE = 'ER';

	const PREFIX = 291;

	const REGION = '';

	const PATTERNS = array(
		'[178]\d{6}'
	);

	const TYPES = array(
		'1(?:1[12568]|20|40|55|6[146])\d{4}|8\d{6}'=>array(
			'fixed'
		),
		'17[1-3]\d{4}|7\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>