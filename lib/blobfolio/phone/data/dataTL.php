<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TL
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTL extends data {

	const CODE = 'TL';

	const PREFIX = 670;

	const REGION = '';

	const PATTERNS = array(
		'[2-489]\d{6}|7\d{6,7}'
	);

	const TYPES = array(
		'(?:2[1-5]|3[1-9]|4[1-4])\d{5}'=>array(
			'fixed'
		),
		'7[3-8]\d{6}'=>array(
			'mobile'
		),
		'80\d{5}'=>array(
			'toll_free'
		),
		'90\d{5}'=>array(
			'premium_rate'
		),
		'70\d{5}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2',
		'(\d{4})(\d{4})'=>'$1 $2'
	);

}
?>