<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BM
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataBM extends data {

	const CODE = 'BM';

	const PREFIX = 1;

	const REGION = '';

	const PATTERNS = array(
		'[4589]\d{9}'
	);

	const TYPES = array(
		'441(?:2(?:02|23|61|[3479]\d)|[46]\d{2}|5(?:4\d|60|89)|824)\d{4}'=>array(
			'fixed'
		),
		'441(?:[37]\d|5[0-39])\d{5}'=>array(
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