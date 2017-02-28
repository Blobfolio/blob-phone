<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: VG
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataVG extends data {

	const CODE = 'VG';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[2589]\d{9}'
	);

	const TYPES = array(
		'284(?:(?:229|4(?:22|9[45])|774|8(?:52|6[459]))\d{4}|496[0-5]\d{3})'=>array(
			'fixed'
		),
		'284(?:(?:3(?:0[0-3]|4[0-7]|68|9[34])|4(?:4[0-6]|68|99)|54[0-57])\d{4}|496[6-9]\d{3})'=>array(
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