<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: OM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataOM extends data {

	const CODE = 'OM';

	const PREFIX = 968;

	const REGION = '';

	const PATTERNS = array(
		'(?:5|[279]\d)\d{6}|800\d{5,6}'
	);

	const TYPES = array(
		'2[2-6]\d{6}'=>array(
			'fixed'
		),
		'7[19]\d{6}|9(?:0[1-9]|[1-9]\d)\d{5}'=>array(
			'mobile'
		),
		'8007\d{4,5}|500\d{4}'=>array(
			'toll_free'
		),
		'900\d{5}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(2\d)(\d{6})'=>'$1 $2',
		'([79]\d{3})(\d{4})'=>'$1 $2',
		'([58]00)(\d{4,6})'=>'$1 $2'
	);

}
?>