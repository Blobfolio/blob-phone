<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SG
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSG extends data {

	const CODE = 'SG';

	const PREFIX = 65;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[36]\d{7}|[17-9]\d{7,10}'
	);

	const TYPES = array(
		'6[1-9]\d{6}'=>array(
			'fixed'
		),
		'(?:8[1-8]|9[0-8])\d{6}'=>array(
			'mobile'
		),
		'1?800\d{7}'=>array(
			'toll_free'
		),
		'1900\d{7}'=>array(
			'premium_rate'
		),
		'3[12]\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([3689]\d{3})(\d{4})'=>'$1 $2',
		'(1[89]00)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(7000)(\d{4})(\d{3})'=>'$1 $2 $3',
		'(800)(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>