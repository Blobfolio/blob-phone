<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: KW
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataKW extends data {

	const CODE = 'KW';

	const PREFIX = 965;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[12569]\d{6,7}'
	);

	const TYPES = array(
		'(?:18\d|2(?:[23]\d{2}|4(?:[1-35-9]\d|44)|5(?:0[034]|[2-46]\d|5[1-3]|7[1-7])))\d{4}'=>array(
			'fixed'
		),
		'(?:5(?:[05]\d{2}|1[0-7]\d|2(?:22|5[25])|66\d)|6(?:0[034679]\d|222|5[015-9]\d|6\d{2}|7[067]\d|9[0369]\d)|9(?:0[09]\d|22\d|4[01479]\d|55\d|6[0679]\d|[79]\d{2}|8[057-9]\d))\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{3,4})'=>'$1 $2',
		'(\d{3})(\d{5})'=>'$1 $2'
	);

}
?>