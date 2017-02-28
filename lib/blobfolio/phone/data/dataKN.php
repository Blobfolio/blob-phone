<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: KN
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataKN extends data {

	const CODE = 'KN';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[589]\d{9}'
	);

	const TYPES = array(
		'869(?:2(?:29|36)|302|4(?:6[015-9]|70))\d{4}'=>array(
			'fixed'
		),
		'869(?:5(?:5[6-8]|6[5-7])|66\d|76[02-7])\d{4}'=>array(
			'mobile'
		),
		'8(?:00|44|55|66|77|88)[2-9]\d{6}'=>array(
			'toll_free'
		),
		'900[2-9]\d{6}'=>array(
			'premium_rate'
		),
		'5(?:00|22|33|44|66|77|88)[2-9]\d{6}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>