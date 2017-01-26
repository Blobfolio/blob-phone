<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AW
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataAW extends data {

	const CODE = 'AW';

	const PREFIX = 297;

	const REGION = '';

	const PATTERNS = array(
		'[25-9]\d{6}'
	);

	const TYPES = array(
		'5(?:2\d|8[1-9])\d{4}'=>array(
			'fixed'
		),
		'(?:5(?:6\d|9[2-478])|6(?:[039]0|22|4[01]|6[0-2])|7[34]\d|9(?:6[45]|9[4-8]))\d{4}'=>array(
			'mobile'
		),
		'800\d{4}'=>array(
			'toll_free'
		),
		'900\d{4}'=>array(
			'premium_rate'
		),
		'28\d{5}|501\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>