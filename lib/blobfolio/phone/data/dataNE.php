<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: NE
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataNE extends data {

	const CODE = 'NE';

	const PREFIX = 227;

	const REGION = '';

	const PATTERNS = array(
		'[0289]\d{7}'
	);

	const TYPES = array(
		'2(?:0(?:20|3[1-7]|4[134]|5[14]|6[14578]|7[1-578])|1(?:4[145]|5[14]|6[14-68]|7[169]|88))\d{4}'=>array(
			'fixed'
		),
		'(?:8[089]|9\d)\d{6}'=>array(
			'mobile'
		),
		'08\d{6}'=>array(
			'toll_free'
		),
		'09\d{6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(08)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>