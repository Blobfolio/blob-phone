<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataCM extends data {

	const CODE = 'CM';

	const PREFIX = 237;

	const REGION = '';

	const PATTERNS = array(
		'[2368]\d{7,8}'
	);

	const TYPES = array(
		'2(?:22|33|4[23])\d{6}'=>array(
			'fixed'
		),
		'6[5-9]\d{7}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'88\d{6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'([26])(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4 $5',
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(800)(\d{2})(\d{3})'=>'$1 $2 $3'
	);

}
?>