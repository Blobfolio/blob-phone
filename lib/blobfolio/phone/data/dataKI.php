<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: KI
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataKI extends data {

	const CODE = 'KI';

	const PREFIX = 686;

	const REGION = '';

	const PATTERNS = array(
		'[2458]\d{4}|3\d{4,7}|7\d{7}'
	);

	const TYPES = array(
		'(?:[24]\d|3[1-9]|50|8[0-5])\d{3}|7(?:27|31|5[0-4])\d{5}'=>array(
			'fixed'
		),
		'7[23]0\d{5}'=>array(
			'mobile'
		),
		'30(?:0[01]\d{2}|12(?:11|20))\d{2}'=>array(
			'voip'
		)
	);

	const FORMATS = array();

}
?>