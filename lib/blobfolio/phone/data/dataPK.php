<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PK
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataPK extends data {

	const CODE = 'PK';

	const PREFIX = 92;

	const REGION = 'Asia';

	const PATTERNS = array(
		'1\d{8}|[2-8]\d{5,11}|9(?:[013-9]\d{4,9}|2\d(?:111\d{6}|\d{3,7}))'
	);

	const TYPES = array(
		'(?:21|42)[2-9]\d{7}|(?:2[25]|4[0146-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)[2-9]\d{6}|(?:2(?:3[2358]|4[2-4]|9[2-8])|45[3479]|54[2-467]|60[468]|72[236]|8(?:2[2-689]|3[23578]|4[3478]|5[2356])|9(?:2[2-8]|3[27-9]|4[2-6]|6[3569]|9[25-8]))[2-9]\d{5,6}|58[126]\d{7}'=>array(
			'fixed'
		),
		'3(?:[014]\d|2[0-5]|3[0-7]|55|64)\d{7}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'900\d{5}'=>array(
			'premium_rate'
		),
		'122\d{6}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{2})(111)(\d{3})(\d{3})'=>'$1 $2 $3 $4',
		'(\d{3})(111)(\d{3})(\d{3})'=>'$1 $2 $3 $4',
		'(\d{2})(\d{7,8})'=>'$1 $2',
		'(\d{3})(\d{6,7})'=>'$1 $2',
		'(3\d{2})(\d{7})'=>'$1 $2',
		'([15]\d{3})(\d{5,6})'=>'$1 $2',
		'(586\d{2})(\d{5})'=>'$1 $2',
		'([89]00)(\d{3})(\d{2})'=>'$1 $2 $3'
	);

}
?>