<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: RO
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataRO extends data {

	const CODE = 'RO';

	const PREFIX = 40;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[23]\d{5,8}|[7-9]\d{8}'
	);

	const TYPES = array(
		'2(?:1(?:\d{7}|9\d{3})|[3-6](?:\d{7}|\d9\d{2}))|3(?:1\d{4}(?:\d{3})?|[3-6]\d{7})'=>array(
			'fixed'
		),
		'7(?:[0-8]\d{2}|99\d)\d{5}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'90[036]\d{6}'=>array(
			'premium_rate'
		),
		'801\d{6}'=>array(
			'shared_cost'
		),
		'802\d{6}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d{2})(\d{4})'=>'$1 $2',
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(2\d{2})(\d{3})'=>'$1 $2'
	);

}
?>