<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: IO
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataIO extends data {

	const CODE = 'IO';

	const PREFIX = 246;

	const REGION = '';

	const PATTERNS = array(
		'3\d{6}'
	);

	const TYPES = array(
		'37\d{5}'=>array(
			'fixed'
		),
		'38\d{5}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>