<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: FO
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataFO extends data {

	const CODE = 'FO';

	const PREFIX = 298;

	const REGION = '';

	const PATTERNS = array(
		'[2-9]\d{5}'
	);

	const TYPES = array(
		'(?:20|[3-4]\d|8[19])\d{4}'=>array(
			'fixed'
		),
		'(?:[27][1-9]|5\d)\d{4}'=>array(
			'mobile'
		),
		'80[257-9]\d{3}'=>array(
			'toll_free'
		),
		'90(?:[1345][15-7]|2[125-7]|99)\d{2}'=>array(
			'premium_rate'
		),
		'(?:6[0-36]|88)\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{6})'=>'$1'
	);

}
?>