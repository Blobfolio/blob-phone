<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: JO
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataJO extends data {

	const CODE = 'JO';

	const PREFIX = 962;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[235-9]\d{7,8}'
	);

	const TYPES = array(
		'(?:2(?:6(?:2[0-35-9]|3[0-57-8]|4[24-7]|5[0-24-8]|[6-8][023]|9[0-3])|7(?:0[1-79]|10|2[014-7]|3[0-689]|4[019]|5[0-3578]))|32(?:0[1-69]|1[1-35-7]|2[024-7]|3\d|4[0-3]|[57][023]|6[03])|53(?:0[0-3]|[13][023]|2[0-59]|49|5[0-35-9]|6[15]|7[45]|8[1-6]|9[0-36-9])|6(?:2[50]0|3(?:00|33)|4(?:0[0125]|1[2-7]|2[0569]|[38][07-9]|4[025689]|6[0-589]|7\d|9[0-2])|5(?:[01][056]|2[034]|3[0-57-9]|4[17-8]|5[0-69]|6[0-35-9]|7[1-379]|8[0-68]|9[02-39]))|87(?:[02]0|7[08]|90))\d{4}'=>array(
			'fixed'
		),
		'7(?:55|7[025-9]|8[015-9]|9[0-25-9])\d{6}'=>array(
			'mobile'
		),
		'80\d{6}'=>array(
			'toll_free'
		),
		'900\d{5}'=>array(
			'premium_rate'
		),
		'85\d{6}'=>array(
			'shared_cost'
		),
		'70\d{7}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{4})'=>'$1 $2 $3',
		'(7)(\d{4})(\d{4})'=>'$1 $2 $3',
		'(\d{3})(\d{5,6})'=>'$1 $2'
	);

}
?>