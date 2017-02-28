<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SY
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSY extends data {

	const CODE = 'SY';

	const PREFIX = 963;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[1-59]\d{7,8}'
	);

	const TYPES = array(
		'(?:1(?:1\d?|4\d|[2356])|2(?:1\d?|[235])|3(?:[13]\d|4)|4[13]|5[1-3])\d{6}'=>array(
			'fixed'
		),
		'9(?:22|[3-589]\d|6[024-9])\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(9\d{2})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>