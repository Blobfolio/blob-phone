<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BZ
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataBZ extends data {

	const CODE = 'BZ';

	const PREFIX = 501;

	const REGION = '';

	const PATTERNS = array(
		'[2-8]\d{6}|0\d{10}'
	);

	const TYPES = array(
		'(?:[23458][02]\d|7(?:[02]\d|32))\d{4}'=>array(
			'fixed'
		),
		'6[0-35-7]\d{5}'=>array(
			'mobile'
		),
		'0800\d{7}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(0)(800)(\d{4})(\d{3})'=>'$1-$2-$3-$4'
	);

}
?>