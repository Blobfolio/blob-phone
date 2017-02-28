<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GI
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGI extends data {

	const CODE = 'GI';

	const PREFIX = 350;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2568]\d{7}'
	);

	const TYPES = array(
		'2(?:00\d|1(?:6[24-7]|9\d)|2(?:00|2[2457]))\d{4}'=>array(
			'fixed'
		),
		'(?:5[46-8]|62)\d{6}'=>array(
			'mobile'
		),
		'80\d{6}'=>array(
			'toll_free'
		),
		'8[1-689]\d{6}'=>array(
			'premium_rate'
		),
		'87\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{5})'=>'$1 $2'
	);

}
?>