<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: VI
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataVI extends data {

	const CODE = 'VI';

	const PREFIX = 1;

	const REGION = 'North America';

	const PATTERNS = array(
		'[3589]\d{9}'
	);

	const TYPES = array(
		'340(?:2(?:01|2[0678]|44|77)|3(?:32|44)|4(?:22|7[34])|5(?:1[34]|55)|6(?:26|4[23]|77|9[023])|7(?:1[2-589]|27|7\d)|884|998)\d{4}'=>array(
			'fixed',
			'mobile'
		),
		'8(?:00|44|55|66|77|88)[2-9]\d{6}'=>array(
			'toll_free'
		),
		'900[2-9]\d{6}'=>array(
			'premium_rate'
		),
		'5(?:00|22|33|44|66|77|88)[2-9]\d{6}'=>array(
			'personal_number'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1-$2',
		'(\d{3})(\d{3})(\d{4})'=>'$1-$2-$3'
	);

}
?>