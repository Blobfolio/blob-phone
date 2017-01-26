<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AG
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataAG extends data {

	const CODE = 'AG';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[2589]\d{9}'
	);

	const TYPES = array(
		'268(?:4(?:6[0-38]|84)|56[0-2])\d{4}'=>array(
			'fixed'
		),
		'268(?:464|7(?:2\d|3[246]|64|7[0-689]|8[02-68]))\d{4}'=>array(
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
		),
		'26848[01]\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>