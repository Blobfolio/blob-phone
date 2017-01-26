<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MU
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMU extends data {

	const CODE = 'MU';

	const PREFIX = 230;

	const REGION = '';

	const PATTERNS = array(
		'[2-9]\d{6,7}'
	);

	const TYPES = array(
		'(?:2(?:[03478]\d|1[0-7]|6[1-69])|4(?:[013568]\d|2[4-7])|5(?:44\d|471)|6\d{2}|8(?:14|3[129]))\d{4}'=>array(
			'fixed'
		),
		'5(?:2[59]\d|4(?:2[1-389]|4\d|7[1-9]|9\d)|7\d{2}|8(?:[0-25689]\d|4[47]|7[15-8])|9[0-8]\d)\d{4}'=>array(
			'mobile'
		),
		'80[012]\d{4}'=>array(
			'toll_free'
		),
		'30\d{5}'=>array(
			'premium_rate'
		),
		'3(?:20|9\d)\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([2-46-9]\d{2})(\d{4})'=>'$1 $2',
		'(5\d{3})(\d{4})'=>'$1 $2'
	);

}
?>