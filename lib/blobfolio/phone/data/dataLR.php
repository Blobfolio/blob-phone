<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LR
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataLR extends data {

	const CODE = 'LR';

	const PREFIX = 231;

	const REGION = '';

	const PATTERNS = array(
		'2\d{7,8}|[378]\d{8}|4\d{6}|5\d{6,8}'
	);

	const TYPES = array(
		'2\d{7}'=>array(
			'fixed'
		),
		'(?:20\d{3}|330\d{2}|4[67]\d|5(?:55)?\d{2}|77\d{3}|88\d{3})\d{4}'=>array(
			'mobile'
		),
		'332(?:02|[25]\d)\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(2\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'([4-5])(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>