<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataBE extends data {

	const CODE = 'BE';

	const PREFIX = 32;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[1-9]\d{7,8}'
	);

	const TYPES = array(
		'(?:1[0-69]|[23][2-8]|4[23]|5\d|6[013-57-9]|71|8[1-79]|9[2-4])\d{6}|80[2-8]\d{5}'=>array(
			'fixed'
		),
		'4(?:6[0135-8]|[79]\d|8[3-9])\d{6}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'(?:70[2-467]|90[0-79])\d{5}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d)(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{3})(\d{2})(\d{3})'=>'$1 $2 $3'
	);

}
?>