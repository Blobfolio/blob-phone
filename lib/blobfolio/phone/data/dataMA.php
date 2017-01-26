<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MA
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMA extends data {

	const CODE = 'MA';

	const PREFIX = 212;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[5-9]\d{8}'
	);

	const TYPES = array(
		'5(?:2(?:[015-79]\d|2[02-9]|3[2-57]|4[2-8]|8[235-7])\d|3(?:[0-48]\d|[57][2-9]|6[2-8]|9[3-9])\d|4[067]\d{2}|5[03]\d{2})\d{4}'=>array(
			'fixed'
		),
		'(?:6(?:[0-79]\d|8[0-247-9])|7(?:[07][07]|6[12]))\d{6}'=>array(
			'mobile'
		),
		'80\d{7}'=>array(
			'toll_free'
		),
		'89\d{7}'=>array(
			'premium_rate'
		),
		'5924[01]\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([5-7]\d{2})(\d{6})'=>'$1-$2',
		'([58]\d{3})(\d{5})'=>'$1-$2',
		'(5\d{4})(\d{4})'=>'$1-$2',
		'([5]\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(8[09])(\d{7})'=>'$1-$2'
	);

}
?>