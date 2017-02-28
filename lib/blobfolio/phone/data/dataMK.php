<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MK
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMK extends data {

	const CODE = 'MK';

	const PREFIX = 389;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-578]\d{7}'
	);

	const TYPES = array(
		'(?:2(?:[23]\d|5[124578]|6[01])|3(?:1[3-6]|[23][2-6]|4[2356])|4(?:[23][2-6]|4[3-6]|5[256]|6[25-8]|7[24-6]|8[4-6]))\d{5}'=>array(
			'fixed'
		),
		'7(?:[0-25-8]\d{2}|32\d|421)\d{4}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'5[02-9]\d{6}'=>array(
			'premium_rate'
		),
		'8(?:0[1-9]|[1-9]\d)\d{5}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'(2)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([347]\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'([58]\d{2})(\d)(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>