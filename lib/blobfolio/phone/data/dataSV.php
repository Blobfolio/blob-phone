<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SV
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSV extends data {

	const CODE = 'SV';

	const PREFIX = 503;

	const REGION = 'North America';

	const PATTERNS = array(
		'[267]\d{7}|[89]\d{6}(?:\d{4})?'
	);

	const TYPES = array(
		'2[1-6]\d{6}'=>array(
			'fixed'
		),
		'[67]\d{7}'=>array(
			'mobile'
		),
		'800\d{4}(?:\d{4})?'=>array(
			'toll_free'
		),
		'900\d{4}(?:\d{4})?'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2',
		'(\d{3})(\d{4})'=>'$1 $2',
		'(\d{3})(\d{4})(\d{4})'=>'$1 $2 $3'
	);

}
?>