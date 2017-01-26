<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CZ
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCZ extends data {

	const CODE = 'CZ';

	const PREFIX = 420;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-8]\d{8}|9\d{8,11}'
	);

	const TYPES = array(
		'2\d{8}|(?:3[1257-9]|4[16-9]|5[13-9])\d{7}'=>array(
			'fixed'
		),
		'(?:60[1-8]|7(?:0[2-5]|[2379]\d))\d{6}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'9(?:0[05689]|76)\d{6}'=>array(
			'premium_rate'
		),
		'8[134]\d{7}'=>array(
			'shared_cost'
		),
		'70[01]\d{6}'=>array(
			'personal_number'
		),
		'9[17]0\d{6}'=>array(
			'voip'
		),
		'9(?:3\d{9}|6\d{7,10})'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'([2-9]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(96\d)(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3 $4',
		'(9\d)(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3 $4'
	);

}
?>