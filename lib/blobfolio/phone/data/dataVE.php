<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: VE
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataVE extends data {

	const CODE = 'VE';

	const PREFIX = 58;

	const REGION = 'South America';

	const PATTERNS = array(
		'[24589]\d{9}'
	);

	const TYPES = array(
		'(?:2(?:12|3[457-9]|[58][1-9]|[467]\d|9[1-6])|50[01])\d{7}'=>array(
			'fixed'
		),
		'4(?:1[24-8]|2[46])\d{7}'=>array(
			'mobile'
		),
		'800\d{7}'=>array(
			'toll_free'
		),
		'900\d{7}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{7})'=>'$1-$2'
	);

}
?>