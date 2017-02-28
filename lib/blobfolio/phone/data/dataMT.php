<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MT
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMT extends data {

	const CODE = 'MT';

	const PREFIX = 356;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2357-9]\d{7}'
	);

	const TYPES = array(
		'2(?:0(?:1[0-6]|3[1-4]|[69]\d)|[1-357]\d{2})\d{4}'=>array(
			'fixed'
		),
		'(?:7(?:210|[79]\d{2})|9(?:2(?:1[01]|31)|696|8(?:1[1-3]|89|97)|9\d{2}))\d{4}'=>array(
			'mobile'
		),
		'800[3467]\d{4}'=>array(
			'toll_free'
		),
		'5(?:0(?:0(?:37|43)|6\d{2}|70\d|9[0168]\d)|[12]\d0[1-5])\d{3}'=>array(
			'premium_rate'
		),
		'3550\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2'
	);

}
?>