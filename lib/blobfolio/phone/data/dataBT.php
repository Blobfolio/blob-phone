<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BT
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBT extends data {

	const CODE = 'BT';

	const PREFIX = 975;

	const REGION = '';

	const PATTERNS = array(
		'[1-8]\d{6,7}'
	);

	const TYPES = array(
		'(?:2[3-6]|[34][5-7]|5[236]|6[2-46]|7[246]|8[2-4])\d{5}'=>array(
			'fixed'
		),
		'(?:1[67]|77)\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'([2-8])(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>