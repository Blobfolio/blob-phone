<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TH
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataTH extends data {

	const CODE = 'TH';

	const PREFIX = 66;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[2-9]\d{7,8}|1\d{3}(?:\d{5,6})?'
	);

	const TYPES = array(
		'(?:2\d|3[2-9]|4[2-5]|5[2-6]|7[3-7])\d{6}'=>array(
			'fixed'
		),
		'(?:14|6[1-5]|[89]\d)\d{7}'=>array(
			'mobile'
		),
		'1800\d{6}'=>array(
			'toll_free'
		),
		'1900\d{6}'=>array(
			'premium_rate'
		),
		'6[08]\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(2)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([13-9]\d)(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(1[89]00)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>