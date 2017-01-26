<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MQ
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMQ extends data {

	const CODE = 'MQ';

	const PREFIX = 596;

	const REGION = '';

	const PATTERNS = array(
		'[56]\d{8}'
	);

	const TYPES = array(
		'596(?:0[2-5]|[12]0|3[05-9]|4[024-8]|[5-7]\d|89|9[4-8])\d{4}'=>array(
			'fixed'
		),
		'696(?:[0-479]\d|5[0-4]|8[0-689])\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>