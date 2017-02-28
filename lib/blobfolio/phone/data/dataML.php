<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: ML
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataML extends data {

	const CODE = 'ML';

	const PREFIX = 223;

	const REGION = '';

	const PATTERNS = array(
		'[246-9]\d{7}'
	);

	const TYPES = array(
		'(?:2(?:0(?:2\d|7[0-8])|1(?:2[5-7]|[3-689]\d))|44[1239]\d)\d{4}'=>array(
			'fixed'
		),
		'(?:2(?:079|17\d)|[679]\d{3}|8[239]\d{2})\d{4}'=>array(
			'mobile'
		),
		'80\d{6}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{4})'=>'$1'
	);

}
?>