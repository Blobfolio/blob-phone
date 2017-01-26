<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TR
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataTR extends data {

	const CODE = 'TR';

	const PREFIX = 90;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-589]\d{9}|444\d{4}'
	);

	const TYPES = array(
		'(?:2(?:[13][26]|[28][2468]|[45][268]|[67][246])|3(?:[13][28]|[24-6][2468]|[78][02468]|92)|4(?:[16][246]|[23578][2468]|4[26]))\d{7}'=>array(
			'fixed'
		),
		'5(?:(?:0[1-7]|22|[34]\d|5[1-59]|9[246])\d{2}|6161)\d{5}'=>array(
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
		'(\d{3})(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{3})(\d{3})(\d{4})'=>'$1 $2 $3',
		'(444)(\d{1})(\d{3})'=>'$1 $2 $3'
	);

}
?>