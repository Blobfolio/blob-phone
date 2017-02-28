<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BA
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBA extends data {

	const CODE = 'BA';

	const PREFIX = 387;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[3-9]\d{7,8}'
	);

	const TYPES = array(
		'(?:[35]\d|49)\d{6}'=>array(
			'fixed'
		),
		'6(?:03|44|71|[1-356])\d{6}'=>array(
			'mobile'
		),
		'8[08]\d{6}'=>array(
			'toll_free'
		),
		'9[0246]\d{6}'=>array(
			'premium_rate'
		),
		'8[12]\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{2})(\d{2})(\d{2})(\d{3})'=>'$1 $2 $3 $4'
	);

}
?>