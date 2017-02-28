<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CF
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataCF extends data {

	const CODE = 'CF';

	const PREFIX = 236;

	const REGION = '';

	const PATTERNS = array(
		'[278]\d{7}'
	);

	const TYPES = array(
		'2[12]\d{6}'=>array(
			'fixed'
		),
		'7[0257]\d{6}'=>array(
			'mobile'
		),
		'8776\d{4}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>