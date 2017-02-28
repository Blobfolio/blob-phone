<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MH
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMH extends data {

	const CODE = 'MH';

	const PREFIX = 692;

	const REGION = '';

	const PATTERNS = array(
		'[2-6]\d{6}'
	);

	const TYPES = array(
		'(?:247|528|625)\d{4}'=>array(
			'fixed'
		),
		'(?:235|329|45[56]|545)\d{4}'=>array(
			'mobile'
		),
		'635\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2'
	);

}
?>