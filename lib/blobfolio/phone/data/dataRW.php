<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: RW
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataRW extends data {

	const CODE = 'RW';

	const PREFIX = 250;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[027-9]\d{7,8}'
	);

	const TYPES = array(
		'2[258]\d{7}|06\d{6}'=>array(
			'fixed'
		),
		'7[238]\d{7}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'900\d{6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(2\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'([7-9]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(0\d)(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>