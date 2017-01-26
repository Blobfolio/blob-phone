<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SC
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSC extends data {

	const CODE = 'SC';

	const PREFIX = 248;

	const REGION = '';

	const PATTERNS = array(
		'[24689]\d{5,6}'
	);

	const TYPES = array(
		'4[2-46]\d{5}'=>array(
			'fixed'
		),
		'2[5-8]\d{5}'=>array(
			'mobile'
		),
		'8000\d{3}'=>array(
			'toll_free'
		),
		'(?:64\d|971)\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>