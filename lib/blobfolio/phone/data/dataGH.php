<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GH
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGH extends data {

	const CODE = 'GH';

	const PREFIX = 233;

	const REGION = '';

	const PATTERNS = array(
		'[235]\d{8}|8\d{7}'
	);

	const TYPES = array(
		'3(?:0[237]\d|[167](?:2[0-6]|7\d)|2(?:2[0-5]|7\d)|3(?:2[0-3]|7\d)|4(?:2[013-9]|3[01]|7\d)|5(?:2[0-7]|7\d)|8(?:2[0-2]|7\d)|9(?:20|7\d))\d{5}'=>array(
			'fixed'
		),
		'(?:2[034678]\d|5(?:[0457]\d|6[01]))\d{6}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d{3})(\d{5})'=>'$1 $2'
	);

}
?>