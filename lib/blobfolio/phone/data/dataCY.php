<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CY
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataCY extends data {

	const CODE = 'CY';

	const PREFIX = 357;

	const REGION = '';

	const PATTERNS = array(
		'[257-9]\d{7}'
	);

	const TYPES = array(
		'2[2-6]\d{6}'=>array(
			'fixed'
		),
		'9[4-79]\d{6}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'90[09]\d{5}'=>array(
			'premium_rate'
		),
		'80[1-9]\d{5}'=>array(
			'shared_cost'
		),
		'700\d{5}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{6})'=>'$1 $2'
	);

}
?>