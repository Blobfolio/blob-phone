<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MS
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMS extends data {

	const CODE = 'MS';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[5689]\d{9}'
	);

	const TYPES = array(
		'664491\d{4}'=>array(
			'fixed'
		),
		'66449[2-6]\d{4}'=>array(
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