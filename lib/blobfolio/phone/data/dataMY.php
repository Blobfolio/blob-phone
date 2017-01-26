<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MY
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMY extends data {

	const CODE = 'MY';

	const PREFIX = 60;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[13-9]\d{7,9}'
	);

	const TYPES = array(
		'(?:3[2-9]\d|[4-9][2-9])\d{6}'=>array(
			'fixed'
		),
		'1(?:1[1-5]\d{2}|[02-4679][2-9]\d|59\d{2}|8(?:1[23]|[2-9]\d))\d{5}'=>array(
			'mobile'
		),
		'1[378]00\d{6}'=>array(
			'toll_free'
		),
		'1600\d{6}'=>array(
			'premium_rate'
		),
		'154\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([4-79])(\d{3})(\d{4})'=>'$1-$2 $3',
		'(3)(\d{4})(\d{4})'=>'$1-$2 $3',
		'([18]\d)(\d{3})(\d{3,4})'=>'$1-$2 $3',
		'(1)([36-8]00)(\d{2})(\d{4})'=>'$1-$2-$3-$4',
		'(11)(\d{4})(\d{4})'=>'$1-$2 $3',
		'(15[49])(\d{3})(\d{4})'=>'$1-$2 $3'
	);

}
?>