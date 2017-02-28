<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMM extends data {

	const CODE = 'MM';

	const PREFIX = 95;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[1478]\d{5,7}|[256]\d{5,8}|9(?:[279]\d{0,2}|[58]|[34]\d{1,2}|6\d?)\d{6}'
	);

	const TYPES = array(
		'1(?:2\d{1,2}|[3-5]\d|6\d?|[89][0-6]\d)\d{4}|2(?:2(?:000\d{3}|\d{4})|3\d{4}|4(?:0\d{5}|\d{4})|5(?:1\d{3,6}|[02-9]\d{3,5})|[6-9]\d{4})|4(?:2[245-8]|3(?:[2-46]|56?)|[46][2-6]|5[3-5])\d{4}|5(?:2(?:2(?:\d{1,2})?|[3-8])|3[2-68]|4(?:21?|[4-8])|5[23]|6[2-4]|7[2-8]|8[24-7]|9[2-7])\d{4}|6(?:0[23]|1(?:2(?:0|4\d)?|[356])|2[2-6]|3[24-6]|4(?:2(?:4\d)?|[3-6])|5[2-4]|6[2-8]|7(?:[2367]|4\d|5\d?|8[145]\d)|8[245]|9(?:20?|4))\d{4}|7(?:[04][24-8]|1(?:20?|[3-7])|22|3[2-4]|5[2-7])\d{4}|8(?:1(?:2\d{1,2}|[3-689]\d)|2(?:2\d|3(?:\d|20)|[4-8]\d)|3[24]\d|4[24-7]\d|5[245]\d|6[23]\d)\d{3}'=>array(
			'fixed'
		),
		'17[01]\d{4}|9(?:2(?:[0-4]|5\d{2}|6[0-5]\d)|3(?:[0-36]|4[069])\d|4(?:0[0-4]\d|[1379]\d|2\d{2}|4[0-589]\d|5\d{2}|88)|5[0-6]|61?\d|7(?:3\d|[6-9]\d{2})|8\d|9(?:1\d|[5-7]\d{2}|[089]))\d{5}'=>array(
			'mobile'
		),
		'1333\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(2)(\d{4})(\d{4})'=>'$1 $2 $3',
		'(\d)(\d{2})(\d{3})'=>'$1 $2 $3',
		'(\d{2})(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(\d{2})(\d{2})(\d{3,4})'=>'$1 $2 $3',
		'(9)(\d{3})(\d{4,6})'=>'$1 $2 $3',
		'(9)([34]\d{4})(\d{4})'=>'$1 $2 $3',
		'(9)(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3 $4',
		'(9)(\d{3})(\d{3})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>