<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AL
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataAL extends data {

	const CODE = 'AL';

	const PREFIX = 355;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-57]\d{7}|6\d{8}|8\d{5,7}|9\d{5}'
	);

	const TYPES = array(
		'(?:2(?:[168][1-9]|[247]\d|9[1-7])|3(?:1[1-3]|[2-6]\d|[79][1-8]|8[1-9])|4\d{2}|5(?:1[1-4]|[2-578]\d|6[1-5]|9[1-7])|8(?:[19][1-5]|[2-6]\d|[78][1-7]))\d{5}'=>array(
			'fixed'
		),
		'6[6-9]\d{7}'=>array(
			'mobile'
		),
		'800\d{4}'=>array(
			'toll_free'
		),
		'900\d{3}'=>array(
			'premium_rate'
		),
		'808\d{3}'=>array(
			'shared_cost'
		),
		'700\d{5}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(4)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(6[6-9])(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{3})(\d{3,5})'=>'$1 $2'
	);

}
?>