<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GD
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataGD extends data {

	const CODE = 'GD';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[4589]\d{9}'
	);

	const TYPES = array(
		'473(?:2(?:3[0-2]|69)|3(?:2[89]|86)|4(?:[06]8|3[5-9]|4[0-49]|5[5-79]|68|73|90)|63[68]|7(?:58|84)|800|938)\d{4}'=>array(
			'fixed'
		),
		'473(?:4(?:0[2-79]|1[04-9]|20|58)|5(?:2[01]|3[3-8])|901)\d{4}'=>array(
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