<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MC
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMC extends data {

	const CODE = 'MC';

	const PREFIX = 377;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[34689]\d{7,8}'
	);

	const TYPES = array(
		'870\d{5}|9[2-47-9]\d{6}'=>array(
			'fixed'
		),
		'3\d{7}|4(?:4\d|5[1-9])\d{5}|6\d{8}'=>array(
			'mobile'
		),
		'90\d{6}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(6)(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4 $5',
		'(\d{3})(\d{3})(\d{2})'=>'$1 $2 $3'
	);

}
?>