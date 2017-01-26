<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BB
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataBB extends data {

	const CODE = 'BB';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[2589]\d{9}'
	);

	const TYPES = array(
		'246(?:2(?:2[78]|7[0-4])|4(?:1[024-6]|2\d|3[2-9])|5(?:20|[34]\d|54|7[1-3])|6(?:2\d|38)|7(?:37|57)|9(?:1[89]|63))\d{4}'=>array(
			'fixed'
		),
		'246(?:2(?:[356]\d|4[0-57-9]|8[0-79])|45\d|8(?:[2-5]\d|83))\d{4}'=>array(
			'mobile'
		),
		'8(?:00|44|55|66|77|88)[2-9]\d{6}'=>array(
			'toll_free'
		),
		'900\d{7}|246976\d{4}'=>array(
			'premium_rate'
		),
		'5(?:00|22|33|44|66|77|88)[2-9]\d{6}'=>array(
			'personal_number'
		),
		'24631\d{5}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>