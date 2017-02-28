<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSM extends data {

	const CODE = 'SM';

	const PREFIX = 378;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[05-7]\d{7,9}'
	);

	const TYPES = array(
		'0549(?:8[0157-9]|9\d)\d{4}'=>array(
			'fixed'
		),
		'6[16]\d{6}'=>array(
			'mobile'
		),
		'7[178]\d{6}'=>array(
			'premium_rate'
		),
		'5[158]\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(0549)(\d{6})'=>'($1) $2',
		'(\d{6})'=>'(0549) $1'
	);

}
?>