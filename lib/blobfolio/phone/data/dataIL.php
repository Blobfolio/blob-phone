<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: IL
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataIL extends data {

	const CODE = 'IL';

	const PREFIX = 972;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[17]\d{6,9}|[2-589]\d{3}(?:\d{3,6})?|6\d{3}'
	);

	const TYPES = array(
		'[2-489]\d{7}'=>array(
			'fixed'
		),
		'5(?:[02-47-9]\d{2}|5(?:01|2[23]|3[2-4]|4[45]|5[5689]|6[67]|7[0178]|8[6-9]|9[4-9])|6[2-9]\d)\d{5}'=>array(
			'mobile'
		),
		'1(?:80[019]\d{3}|255)\d{3}'=>array(
			'toll_free'
		),
		'1(?:212|(?:9(?:0[01]|19)|200)\d{2})\d{4}'=>array(
			'premium_rate'
		),
		'1700\d{6}'=>array(
			'shared_cost'
		),
		'7(?:18\d|2[23]\d|3[237]\d|47\d|6[58]\d|7\d{2}|8(?:2\d|33|55|77|81)|9[2579]\d)\d{5}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([2-489])(\d{3})(\d{4})'=>'$1-$2-$3',
		'([57]\d)(\d{3})(\d{4})'=>'$1-$2-$3',
		'(1)([7-9]\d{2})(\d{3})(\d{3})'=>'$1-$2-$3-$4',
		'(1255)(\d{3})'=>'$1-$2',
		'(1200)(\d{3})(\d{3})'=>'$1-$2-$3',
		'(1212)(\d{2})(\d{2})'=>'$1-$2-$3',
		'(1599)(\d{6})'=>'$1-$2',
		'(\d{4})'=>'*$1'
	);

}
?>