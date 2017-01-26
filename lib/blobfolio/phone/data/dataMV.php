<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MV
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMV extends data {

	const CODE = 'MV';

	const PREFIX = 960;

	const REGION = '';

	const PATTERNS = array(
		'[346-8]\d{6,9}|9(?:00\d{7}|\d{6})'
	);

	const TYPES = array(
		'(?:3(?:0[0-3]|3[0-59])|6(?:[57][02468]|6[024568]|8[024689]|90))\d{4}'=>array(
			'fixed'
		),
		'(?:46[46]|7[3-9]\d|9[15-9]\d)\d{4}'=>array(
			'mobile'
		),
		'800\d{7}'=>array(
			'toll_free'
		),
		'900\d{7}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>