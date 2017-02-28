<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: IQ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataIQ extends data {

	const CODE = 'IQ';

	const PREFIX = 964;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[1-7]\d{7,9}'
	);

	const TYPES = array(
		'1\d{7}|(?:2[13-5]|3[02367]|4[023]|5[03]|6[026])\d{6,7}'=>array(
			'fixed'
		),
		'7[3-9]\d{8}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(1)(\d{3})(\d{4})'=>'$1 $2 $3',
		'([2-6]\d)(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(7\d{2})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>