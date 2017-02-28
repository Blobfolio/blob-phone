<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: UA
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataUA extends data {

	const CODE = 'UA';

	const PREFIX = 380;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[3-9]\d{8}'
	);

	const TYPES = array(
		'(?:3[1-8]|4[13-8]|5[1-7]|6[12459])\d{7}'=>array(
			'fixed'
		),
		'(?:39|50|6[36-8]|7[13]|9[1-9])\d{7}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'900\d{6}'=>array(
			'premium_rate'
		),
		'89\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([3-9]\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([3-689]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'([3-6]\d{3})(\d{5})'=>'$1 $2'
	);

}
?>