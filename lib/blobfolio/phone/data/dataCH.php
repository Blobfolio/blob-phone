<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CH
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataCH extends data {

	const CODE = 'CH';

	const PREFIX = 41;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-9]\d{8}|860\d{9}'
	);

	const TYPES = array(
		'(?:2[12467]|3[1-4]|4[134]|5[256]|6[12]|[7-9]1)\d{7}'=>array(
			'fixed'
		),
		'7[5-9]\d{7}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'90[016]\d{6}'=>array(
			'premium_rate'
		),
		'84[0248]\d{6}'=>array(
			'shared_cost'
		),
		'878\d{6}'=>array(
			'personal_number'
		),
		'860\d{9}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'([2-9]\d)(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'([89]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{3})(\d{2})(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4 $5'
	);

}
?>