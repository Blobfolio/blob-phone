<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: KE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataKE extends data {

	const CODE = 'KE';

	const PREFIX = 254;

	const REGION = 'Africa';

	const PATTERNS = array(
		'20\d{6,7}|[4-9]\d{6,9}'
	);

	const TYPES = array(
		'20\d{6,7}|4(?:[0136]\d{7}|[245]\d{5,7})|5(?:[08]\d{7}|[1-79]\d{5,7})|6(?:[01457-9]\d{5,7}|[26]\d{7})'=>array(
			'fixed'
		),
		'7(?:[0-369]\d|4[0-2]|5[0-6]|7[0-7]|8[0-25-9])\d{6}'=>array(
			'mobile'
		),
		'800[24-8]\d{5,6}'=>array(
			'toll_free'
		),
		'900[02-9]\d{5}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{5,7})'=>'$1 $2',
		'(\d{3})(\d{6})'=>'$1 $2',
		'(\d{3})(\d{3})(\d{3,4})'=>'$1 $2 $3'
	);

}
?>