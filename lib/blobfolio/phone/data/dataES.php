<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: ES
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataES extends data {

	const CODE = 'ES';

	const PREFIX = 34;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[5-9]\d{8}'
	);

	const TYPES = array(
		'8(?:[13]0|[28][0-8]|[47][1-9]|5[01346-9]|6[0457-9])\d{6}|9(?:[15]\d{7}|[238][0-8]\d{6}|4[1-9]\d{6}|6(?:[0-8]\d{6}|9(?:0(?:[0-57-9]\d{4}|6(?:0[0-8]|1[1-9]|[2-9]\d)\d{2})|[1-9]\d{5}))|7(?:[124-9]\d{2}|3(?:[0-8]\d|9[1-9]))\d{4})'=>array(
			'fixed'
		),
		'(?:6\d{6}|7[1-48]\d{5}|9(?:6906(?:09|10)|7390\d{2}))\d{2}'=>array(
			'mobile'
		),
		'[89]00\d{6}'=>array(
			'toll_free'
		),
		'80[367]\d{6}'=>array(
			'premium_rate'
		),
		'90[12]\d{6}'=>array(
			'shared_cost'
		),
		'70\d{7}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'([89]00)(\d{3})(\d{3})'=>'$1 $2 $3',
		'([5-9]\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>