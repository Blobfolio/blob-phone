<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TZ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTZ extends data {

	const CODE = 'TZ';

	const PREFIX = 255;

	const REGION = 'Africa';

	const PATTERNS = array(
		'\d{9}'
	);

	const TYPES = array(
		'2[2-8]\d{7}'=>array(
			'fixed'
		),
		'(?:6[2-9]|7[13-9])\d{7}'=>array(
			'mobile'
		),
		'80[08]\d{6}'=>array(
			'toll_free'
		),
		'90\d{7}'=>array(
			'premium_rate'
		),
		'8(?:40|6[01])\d{6}'=>array(
			'shared_cost'
		),
		'41\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([24]\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([67]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'([89]\d{2})(\d{2})(\d{4})'=>'$1 $2 $3'
	);

}
?>