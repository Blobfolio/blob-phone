<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TD
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTD extends data {

	const CODE = 'TD';

	const PREFIX = 235;

	const REGION = '';

	const PATTERNS = array(
		'[2679]\d{7}'
	);

	const TYPES = array(
		'22(?:[3789]0|5[0-5]|6[89])\d{4}'=>array(
			'fixed'
		),
		'(?:6[023568]\d|77\d|9\d{2})\d{5}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>