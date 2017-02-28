<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataAM extends data {

	const CODE = 'AM';

	const PREFIX = 374;

	const REGION = '';

	const PATTERNS = array(
		'[1-9]\d{7}'
	);

	const TYPES = array(
		'(?:1[0-2]\d|2(?:2[2-46]|3[1-8]|4[2-69]|5[2-7]|6[1-9]|8[1-7])|3[12]2|47\d)\d{5}'=>array(
			'fixed'
		),
		'(?:4[1349]|55|77|9[1-9])\d{6}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'90[016]\d{5}'=>array(
			'premium_rate'
		),
		'80[1-4]\d{5}'=>array(
			'shared_cost'
		),
		'60(?:2[078]|[3-7]\d|8[0-5])\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{6})'=>'$1 $2',
		'(\d{3})(\d{5})'=>'$1 $2',
		'(\d{3})(\d{2})(\d{3})'=>'$1 $2 $3'
	);

}
?>