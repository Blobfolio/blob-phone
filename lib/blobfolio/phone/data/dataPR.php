<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PR
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataPR extends data {

	const CODE = 'PR';

	const PREFIX = 1;

	const REGION = 'North America';

	const PATTERNS = array(
		'[5789]\d{9}'
	);

	const TYPES = array(
		'(?:787|939)[2-9]\d{6}'=>array(
			'fixed',
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