<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: EG
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataEG extends data {

	const CODE = 'EG';

	const PREFIX = 20;

	const REGION = 'Africa';

	const PATTERNS = array(
		'1\d{4,9}|[2456]\d{8}|3\d{7}|[89]\d{8,9}'
	);

	const TYPES = array(
		'(?:1(?:3[23]\d|5(?:[23]|9\d))|2[2-4]\d{2}|3\d{2}|4(?:0[2-5]|[578][23]|64)\d|5(?:0[2-7]|[57][23])\d|6[24-689]3\d|8(?:2[2-57]|4[26]|6[237]|8[2-4])\d|9(?:2[27]|3[24]|52|6[2356]|7[2-4])\d)\d{5}|1[69]\d{3}'=>array(
			'fixed'
		),
		'1(?:0[0-269]|1[0-245]|2[0-278])\d{7}'=>array(
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
		'(\d)(\d{7,8})'=>'$1 $2',
		'(\d{3})(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d{2})(\d{6,7})'=>'$1 $2'
	);

}
?>