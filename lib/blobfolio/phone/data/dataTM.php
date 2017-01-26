<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TM
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataTM extends data {

	const CODE = 'TM';

	const PREFIX = 993;

	const REGION = '';

	const PATTERNS = array(
		'[1-6]\d{7}'
	);

	const TYPES = array(
		'(?:1(?:2\d|3[1-9])|2(?:22|4[0-35-8])|3(?:22|4[03-9])|4(?:22|3[128]|4\d|6[15])|5(?:22|5[7-9]|6[014-689]))\d{5}'=>array(
			'fixed'
		),
		'6[1-9]\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2-$3-$4',
		'(\d{2})(\d{6})'=>'$1 $2',
		'(\d{3})(\d)(\d{2})(\d{2})'=>'$1 $2-$3-$4'
	);

}
?>