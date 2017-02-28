<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GP
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGP extends data {

	const CODE = 'GP';

	const PREFIX = 590;

	const REGION = '';

	const PATTERNS = array(
		'[56]\d{8}'
	);

	const TYPES = array(
		'590(?:0[13468]|1[012]|2[0-68]|3[28]|4[0-8]|5[579]|6[0189]|70|8[0-689]|9\d)\d{4}'=>array(
			'fixed'
		),
		'690(?:0[0-7]|[1-9]\d)\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([56]90)(\d{2})(\d{4})'=>'$1 $2-$3'
	);

}
?>