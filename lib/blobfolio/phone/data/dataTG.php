<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TG
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataTG extends data {

	const CODE = 'TG';

	const PREFIX = 228;

	const REGION = '';

	const PATTERNS = array(
		'[29]\d{7}'
	);

	const TYPES = array(
		'2(?:2[2-7]|3[23]|44|55|66|77)\d{5}'=>array(
			'fixed'
		),
		'9[0-389]\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>