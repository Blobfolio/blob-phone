<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LK
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataLK extends data {

	const CODE = 'LK';

	const PREFIX = 94;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[1-9]\d{8}'
	);

	const TYPES = array(
		'(?:[189]1|2[13-7]|3[1-8]|4[157]|5[12457]|6[35-7])[2-57]\d{6}'=>array(
			'fixed'
		),
		'7[0125-8]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{1})(\d{6})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>