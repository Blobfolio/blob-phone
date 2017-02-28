<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PT
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataPT extends data {

	const CODE = 'PT';

	const PREFIX = 351;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2-46-9]\d{8}'
	);

	const TYPES = array(
		'2(?:[12]\d|[35][1-689]|4[1-59]|6[1-35689]|7[1-9]|8[1-69]|9[1256])\d{6}'=>array(
			'fixed'
		),
		'9(?:[1236]\d{2}|480)\d{5}'=>array(
			'mobile'
		),
		'80[02]\d{6}'=>array(
			'toll_free'
		),
		'6(?:0[178]|4[68])\d{6}|76(?:0[1-57]|1[2-47]|2[237])\d{5}'=>array(
			'premium_rate'
		),
		'80(?:8\d|9[1579])\d{5}'=>array(
			'shared_cost'
		),
		'884[0-4689]\d{5}'=>array(
			'personal_number'
		),
		'30\d{7}'=>array(
			'voip'
		),
		'600\d{6}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'(2\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([2-46-9]\d{2})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>