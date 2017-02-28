<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SA
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSA extends data {

	const CODE = 'SA';

	const PREFIX = 966;

	const REGION = 'Asia';

	const PATTERNS = array(
		'1\d{7,8}|(?:[2-467]|92)\d{7}|5\d{8}|8\d{9}'
	);

	const TYPES = array(
		'11\d{7}|1?(?:2[24-8]|3[35-8]|4[3-68]|6[2-5]|7[235-7])\d{6}'=>array(
			'fixed'
		),
		'(?:5(?:[013-689]\d|7[0-26-8])|811\d)\d{6}'=>array(
			'mobile'
		),
		'800\d{7}'=>array(
			'toll_free'
		),
		'92[05]\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'([1-467])(\d{3})(\d{4})'=>'$1 $2 $3',
		'(1\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(5\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(92\d{2})(\d{5})'=>'$1 $2',
		'(800)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(811)(\d{3})(\d{3,4})'=>'$1 $2 $3'
	);

}
?>