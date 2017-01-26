<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GN
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataGN extends data {

	const CODE = 'GN';

	const PREFIX = 224;

	const REGION = '';

	const PATTERNS = array(
		'[367]\d{7,8}'
	);

	const TYPES = array(
		'30(?:24|3[12]|4[1-35-7]|5[13]|6[189]|[78]1|9[1478])\d{4}'=>array(
			'fixed'
		),
		'6[02356]\d{7}'=>array(
			'mobile'
		),
		'722\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>