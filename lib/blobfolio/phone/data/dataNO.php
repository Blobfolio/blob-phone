<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NO
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataNO extends data {

	const CODE = 'NO';

	const PREFIX = 47;

	const REGION = 'Europe';

	const PATTERNS = array(
		'0\d{4}|[2-9]\d{7}'
	);

	const TYPES = array(
		'(?:2[1-4]|3[1-3578]|5[1-35-7]|6[1-4679]|7[0-8])\d{6}'=>array(
			'fixed'
		),
		'(?:4[015-8]|5[89]|87|9\d)\d{6}'=>array(
			'mobile'
		),
		'80[01]\d{5}'=>array(
			'toll_free'
		),
		'82[09]\d{5}'=>array(
			'premium_rate'
		),
		'810(?:0[0-6]|[2-8]\d)\d{3}'=>array(
			'shared_cost'
		),
		'880\d{5}'=>array(
			'personal_number'
		),
		'85[0-5]\d{5}'=>array(
			'voip'
		),
		'81[23]\d{5}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'([489]\d{2})(\d{2})(\d{3})'=>'$1 $2 $3',
		'([235-7]\d)(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>