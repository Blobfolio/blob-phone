<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: DK
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataDK extends data {

	const CODE = 'DK';

	const PREFIX = 45;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-9]\d{7}'
	);

	const TYPES = array(
		'(?:[2-7]\d|8[126-9]|9[1-36-9])\d{6}'=>array(
			'fixed',
			'mobile'
		),
		'80\d{6}'=>array(
			'toll_free'
		),
		'90\d{6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>