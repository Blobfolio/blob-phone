<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SZ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSZ extends data {

	const CODE = 'SZ';

	const PREFIX = 268;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[027]\d{7}'
	);

	const TYPES = array(
		'2[2-5]\d{6}'=>array(
			'fixed'
		),
		'7[6-8]\d{6}'=>array(
			'mobile'
		),
		'0800\d{4}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2'
	);

}
?>