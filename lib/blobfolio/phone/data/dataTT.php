<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TT
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTT extends data {

	const CODE = 'TT';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[589]\d{9}'
	);

	const TYPES = array(
		'868(?:2(?:01|[23]\d)|6(?:0[79]|1[02-8]|2[1-9]|[3-69]\d|7[0-79])|82[124])\d{4}'=>array(
			'fixed'
		),
		'868(?:2(?:6[6-9]|[789]\d)|3(?:0[1-9]|1[02-9]|[2-9]\d)|4[6-9]\d|6(?:20|78|8\d)|7(?:0[1-9]|1[02-9]|[2-9]\d))\d{4}'=>array(
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
		'868619\d{4}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>