<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TW
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTW extends data {

	const CODE = 'TW';

	const PREFIX = 886;

	const REGION = 'Asia';

	const PATTERNS = array(
		'2\d{6,8}|[3-689]\d{7,8}|7\d{7,9}'
	);

	const TYPES = array(
		'2(?:[235-8]\d{7}|4\d{6,7})|[3-8]\d{7,8}'=>array(
			'fixed'
		),
		'9\d{8}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'20(?:2|[013-9]\d{2})\d{4}'=>array(
			'premium_rate'
		),
		'70\d{8}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(20)(\d)(\d{4})'=>'$1 $2 $3',
		'(20)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([2-8])(\d{3,4})(\d{4})'=>'$1 $2 $3',
		'([89]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(70)(\d{4})(\d{4})'=>'$1 $2 $3'
	);

}
?>