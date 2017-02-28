<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MN
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMN extends data {

	const CODE = 'MN';

	const PREFIX = 976;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[12]\d{7,9}|[57-9]\d{7}'
	);

	const TYPES = array(
		'[12](?:1\d|2(?:[1-3]\d?|7\d)|3[2-8]\d{1,2}|4[2-68]\d{1,2}|5[1-4689]\d{1,2})\d{5}|5[0568]\d{6}'=>array(
			'fixed'
		),
		'(?:8(?:[05689]\d|3[01])|9[013-9]\d)\d{5}'=>array(
			'mobile'
		),
		'7[05-8]\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([12]\d)(\d{2})(\d{4})'=>'$1 $2 $3',
		'([12]2\d)(\d{5,6})'=>'$1 $2',
		'([12]\d{3})(\d{5})'=>'$1 $2',
		'(\d{4})(\d{4})'=>'$1 $2',
		'([12]\d{4})(\d{4,5})'=>'$1 $2'
	);

}
?>