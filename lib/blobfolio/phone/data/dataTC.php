<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TC
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTC extends data {

	const CODE = 'TC';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[5689]\d{9}'
	);

	const TYPES = array(
		'649(?:712|9(?:4\d|50))\d{4}'=>array(
			'fixed'
		),
		'649(?:2(?:3[129]|4[1-7])|3(?:3[1-389]|4[1-8])|4[34][1-3])\d{4}'=>array(
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
		'64971[01]\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>