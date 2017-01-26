<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataSE extends data {

	const CODE = 'SE';

	const PREFIX = 46;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[1-35-9]\d{5,11}|4\d{6,8}'
	);

	const TYPES = array(
		'1(?:0[1-8]\d{6}|[136]\d{5,7}|(?:2[0-35]|4[0-4]|5[0-25-9]|7[13-6]|[89]\d)\d{5,6})|2(?:[136]\d{5,7}|(?:2[0-7]|4[0136-8]|5[0138]|7[018]|8[01]|9[0-57])\d{5,6})|3(?:[356]\d{5,7}|(?:0[0-4]|1\d|2[0-25]|4[056]|7[0-2]|8[0-3]|9[023])\d{5,6})|4(?:[0246]\d{5,7}|(?:1[013-8]|3[0135]|5[14-79]|7[0-246-9]|8[0156]|9[0-689])\d{5,6})|5(?:0[0-6]|[15][0-5]|2[0-68]|3[0-4]|4\d|6[03-5]|7[013]|8[0-79]|9[01])\d{5,6}|6(?:[03]\d{5,7}|(?:1[1-3]|2[0-4]|4[02-57]|5[0-37]|6[0-3]|7[0-2]|8[0247]|9[0-356])\d{5,6})|8\d{6,8}|9(?:0[1-9]\d{4,6}|(?:1[0-68]|2\d|3[02-5]|4[0-3]|5[0-4]|[68][01]|7[0135-8])\d{5,6})'=>array(
			'fixed'
		),
		'7[02369]\d{7}'=>array(
			'mobile'
		),
		'20\d{4,7}'=>array(
			'toll_free'
		),
		'649\d{6}|9(?:00|39|44)[1-8]\d{3,6}'=>array(
			'premium_rate'
		),
		'77(?:0\d{3}(?:\d{3})?|[1-7]\d{6})'=>array(
			'shared_cost'
		),
		'75[1-8]\d{6}'=>array(
			'personal_number'
		),
		'(?:25[245]|67[3-6])\d{9}'=>array(
			'voicemail'
		)
	);

	const FORMATS = array(
		'(8)(\d{2,3})(\d{2,3})(\d{2})'=>'$1 $2 $3 $4',
		'([1-69]\d)(\d{2,3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'([1-469]\d)(\d{3})(\d{2})'=>'$1 $2 $3',
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{3})(\d{2,3})(\d{2})'=>'$1 $2 $3',
		'(7\d)(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(77)(\d{2})(\d{2})'=>'$1 $2 $3',
		'(20)(\d{2,3})(\d{2})'=>'$1 $2 $3',
		'(9[034]\d)(\d{2})(\d{2})(\d{3})'=>'$1 $2 $3 $4',
		'(9[034]\d)(\d{4})'=>'$1 $2',
		'(\d{3})(\d{2})(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4 $5'
	);

}
?>