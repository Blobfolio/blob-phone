<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SL
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSL extends data {

	const CODE = 'SL';

	const PREFIX = 232;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[2-9]\d{7}'
	);

	const TYPES = array(
		'[235]2[2-4][2-9]\d{4}'=>array(
			'fixed'
		),
		'(?:2[15]|3[03-5]|4[04]|5[05]|66|7[6-9]|88|99)\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{6})'=>'$1 $2'
	);

}
?>