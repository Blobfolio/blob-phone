<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GT
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGT extends data {

	const CODE = 'GT';

	const PREFIX = 502;

	const REGION = 'North America';

	const PATTERNS = array(
		'[2-7]\d{7}|1[89]\d{9}'
	);

	const TYPES = array(
		'[267][2-9]\d{6}'=>array(
			'fixed'
		),
		'[345]\d{7}'=>array(
			'mobile'
		),
		'18[01]\d{8}'=>array(
			'toll_free'
		),
		'19\d{9}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2',
		'(\d{4})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>