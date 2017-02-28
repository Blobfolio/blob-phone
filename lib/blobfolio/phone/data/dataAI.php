<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AI
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataAI extends data {

	const CODE = 'AI';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[2589]\d{9}'
	);

	const TYPES = array(
		'2644(?:6[12]|9[78])\d{4}'=>array(
			'fixed'
		),
		'264(?:235|476|5(?:3[6-9]|8[1-4])|7(?:29|72))\d{4}'=>array(
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