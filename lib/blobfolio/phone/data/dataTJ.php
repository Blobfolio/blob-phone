<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: TJ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataTJ extends data {

	const CODE = 'TJ';

	const PREFIX = 992;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[3-57-9]\d{8}'
	);

	const TYPES = array(
		'(?:3(?:1[3-5]|2[245]|3[12]|4[24-7]|5[25]|72)|4(?:46|74|87))\d{6}'=>array(
			'fixed'
		),
		'(?:41[18]|(?:5[05]|77|88|9[0-35-9])\d)\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([349]\d{2})(\d{2})(\d{4})'=>'$1 $2 $3',
		'([457-9]\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(331700)(\d)(\d{2})'=>'$1 $2 $3',
		'(\d{4})(\d)(\d{4})'=>'$1 $2 $3'
	);

}
?>