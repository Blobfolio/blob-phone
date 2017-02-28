<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MZ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMZ extends data {

	const CODE = 'MZ';

	const PREFIX = 258;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[28]\d{7,8}'
	);

	const TYPES = array(
		'2(?:[1346]\d|5[0-2]|[78][12]|93)\d{5}'=>array(
			'fixed'
		),
		'8[2-7]\d{7}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		)
	);

	const FORMATS = array(
		'([28]\d)(\d{3})(\d{3,4})'=>'$1 $2 $3',
		'(80\d)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>