<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: RU
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataRU extends data {

	const CODE = 'RU';

	const PREFIX = 7;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[3489]\d{9}'
	);

	const TYPES = array(
		'(?:3(?:0[12]|4[1-35-79]|5[1-3]|65|8[1-58]|9[0145])|4(?:01|1[1356]|2[13467]|7[1-5]|8[1-7]|9[1-689])|8(?:1[1-8]|2[01]|3[13-6]|4[0-8]|5[15]|6[1-35-79]|7[1-37-9]))\d{7}'=>array(
			'fixed'
		),
		'9\d{9}'=>array(
			'mobile'
		),
		'80[04]\d{7}'=>array(
			'toll_free'
		),
		'80[39]\d{7}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})'=>'$1-$2-$3',
		'([3489]\d{2})(\d{3})(\d{2})(\d{2})'=>'$1 $2-$3-$4',
		'(7\d{2})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>