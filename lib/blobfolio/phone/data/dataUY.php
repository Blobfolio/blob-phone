<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: UY
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataUY extends data {

	const CODE = 'UY';

	const PREFIX = 598;

	const REGION = 'South America';

	const PATTERNS = array(
		'[2489]\d{6,7}'
	);

	const TYPES = array(
		'2\d{7}|4[2-7]\d{6}'=>array(
			'fixed'
		),
		'9[1-9]\d{6}'=>array(
			'mobile'
		),
		'80[05]\d{4}'=>array(
			'toll_free'
		),
		'90[0-8]\d{4}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2',
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>