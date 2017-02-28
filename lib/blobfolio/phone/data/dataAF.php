<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AF
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataAF extends data {

	const CODE = 'AF';

	const PREFIX = 93;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[2-7]\d{8}'
	);

	const TYPES = array(
		'(?:[25][0-8]|[34][0-4]|6[0-5])[2-9]\d{6}'=>array(
			'fixed'
		),
		'7(?:[014-9]\d{7}|2[89]\d{6})'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([2-7]\d)(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>