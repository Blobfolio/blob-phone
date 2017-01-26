<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: ZM
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataZM extends data {

	const CODE = 'ZM';

	const PREFIX = 260;

	const REGION = '';

	const PATTERNS = array(
		'[289]\d{8}'
	);

	const TYPES = array(
		'21[1-8]\d{6}'=>array(
			'fixed'
		),
		'9(?:5[034589]|[67]\d)\d{6}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'([29]\d)(\d{7})'=>'$1 $2',
		'(800)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>