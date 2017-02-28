<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: QA
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataQA extends data {

	const CODE = 'QA';

	const PREFIX = 974;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[2-8]\d{6,7}'
	);

	const TYPES = array(
		'4[04]\d{6}'=>array(
			'fixed'
		),
		'[3567]\d{7}'=>array(
			'mobile'
		),
		'800\d{4}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'([28]\d{2})(\d{4})'=>'$1 $2',
		'([3-7]\d{3})(\d{4})'=>'$1 $2'
	);

}
?>