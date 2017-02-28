<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: FI
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataFI extends data {

	const CODE = 'FI';

	const PREFIX = 358;

	const REGION = 'Europe';

	const PATTERNS = array(
		'1\d{4,11}|[2-9]\d{4,10}'
	);

	const TYPES = array(
		'1(?:[3569][1-8]\d{3,9}|[47]\d{5,10})|2[1-8]\d{3,9}|3(?:[1-8]\d{3,9}|9\d{4,8})|[5689][1-8]\d{3,9}'=>array(
			'fixed'
		),
		'4\d{5,10}|50\d{4,8}'=>array(
			'mobile'
		),
		'800\d{4,7}'=>array(
			'toll_free'
		),
		'[67]00\d{5,6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3,7})'=>'$1 $2',
		'(116\d{3})'=>'$1',
		'(\d{2})(\d{4,10})'=>'$1 $2',
		'(\d)(\d{4,11})'=>'$1 $2'
	);

}
?>