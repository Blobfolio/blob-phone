<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: HU
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataHU extends data {

	const CODE = 'HU';

	const PREFIX = 36;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[1-9]\d{7,8}'
	);

	const TYPES = array(
		'(?:1\d|2[2-9]|3[2-7]|4[24-9]|5[2-79]|6[23689]|7[2-9]|8[2-57-9]|9[2-69])\d{6}'=>array(
			'fixed'
		),
		'(?:[257]0|3[01])\d{7}'=>array(
			'mobile'
		),
		'[48]0\d{6}'=>array(
			'toll_free'
		),
		'9[01]\d{6}'=>array(
			'premium_rate'
		),
		'21\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(1)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{3,4})'=>'$1 $2 $3'
	);

}
?>