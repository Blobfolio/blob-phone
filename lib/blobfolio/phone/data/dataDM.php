<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: DM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataDM extends data {

	const CODE = 'DM';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[57-9]\d{9}'
	);

	const TYPES = array(
		'767(?:2(?:55|66)|4(?:2[01]|4[0-25-9])|50[0-4]|70[1-3])\d{4}'=>array(
			'fixed'
		),
		'767(?:2(?:[234689]5|7[5-7])|31[5-7]|61[2-7])\d{4}'=>array(
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