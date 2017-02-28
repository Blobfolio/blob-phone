<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GQ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGQ extends data {

	const CODE = 'GQ';

	const PREFIX = 240;

	const REGION = '';

	const PATTERNS = array(
		'[23589]\d{8}'
	);

	const TYPES = array(
		'3(?:3(?:3\d[7-9]|[0-24-9]\d[46])|5\d{2}[7-9])\d{4}'=>array(
			'fixed'
		),
		'(?:222|55[15])\d{6}'=>array(
			'mobile'
		),
		'80\d[1-9]\d{5}'=>array(
			'toll_free'
		),
		'90\d[1-9]\d{5}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{3})(\d{6})'=>'$1 $2'
	);

}
?>