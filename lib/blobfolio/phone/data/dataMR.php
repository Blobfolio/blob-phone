<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MR
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMR extends data {

	const CODE = 'MR';

	const PREFIX = 222;

	const REGION = '';

	const PATTERNS = array(
		'[2-48]\d{7}'
	);

	const TYPES = array(
		'25[08]\d{5}|35\d{6}|45[1-7]\d{5}'=>array(
			'fixed'
		),
		'[234][0-46-9]\d{6}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'([2-48]\d)(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>