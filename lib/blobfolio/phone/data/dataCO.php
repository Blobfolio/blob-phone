<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CO
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataCO extends data {

	const CODE = 'CO';

	const PREFIX = 57;

	const REGION = 'South America';

	const PATTERNS = array(
		'(?:[13]\d{0,3}|[24-8])\d{7}'
	);

	const TYPES = array(
		'[124-8][2-9]\d{6}'=>array(
			'fixed'
		),
		'3(?:0[0-5]|1\d|2[0-3]|5[01])\d{7}'=>array(
			'mobile'
		),
		'1800\d{7}'=>array(
			'toll_free'
		),
		'19(?:0[01]|4[78])\d{7}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d)(\d{7})'=>'$1 $2',
		'(\d{3})(\d{7})'=>'$1 $2',
		'(1)(\d{3})(\d{7})'=>'$1 $2 $3'
	);

}
?>