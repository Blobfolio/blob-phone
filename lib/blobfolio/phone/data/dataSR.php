<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SR
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSR extends data {

	const CODE = 'SR';

	const PREFIX = 597;

	const REGION = '';

	const PATTERNS = array(
		'[2-8]\d{5,6}'
	);

	const TYPES = array(
		'(?:2[1-3]|3[0-7]|4\d|5[2-58]|68\d)\d{4}'=>array(
			'fixed'
		),
		'(?:7[124-7]|8[1-9])\d{5}'=>array(
			'mobile'
		),
		'5(?:6\d{4}|90[0-4]\d{3})'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3})'=>'$1-$2',
		'(\d{2})(\d{2})(\d{2})'=>'$1-$2-$3',
		'(\d{3})(\d{4})'=>'$1-$2'
	);

}
?>