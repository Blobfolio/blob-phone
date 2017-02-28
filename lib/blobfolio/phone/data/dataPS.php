<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PS
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataPS extends data {

	const CODE = 'PS';

	const PREFIX = 970;

	const REGION = '';

	const PATTERNS = array(
		'[24589]\d{7,8}|1(?:[78]\d{8}|[49]\d{2,3})'
	);

	const TYPES = array(
		'(?:22[234789]|42[45]|82[01458]|92[369])\d{5}'=>array(
			'fixed'
		),
		'5[69]\d{7}'=>array(
			'mobile'
		),
		'1800\d{6}'=>array(
			'toll_free'
		),
		'1(?:4|9\d)\d{2}'=>array(
			'premium_rate'
		),
		'1700\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'([2489])(2\d{2})(\d{4})'=>'$1 $2 $3',
		'(5[69]\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'(1[78]00)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>