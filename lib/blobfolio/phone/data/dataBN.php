<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BN
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBN extends data {

	const CODE = 'BN';

	const PREFIX = 673;

	const REGION = '';

	const PATTERNS = array(
		'[2-578]\d{6}'
	);

	const TYPES = array(
		'2(?:[013-9]\d|2[0-7])\d{4}|[3-5]\d{6}'=>array(
			'fixed'
		),
		'22[89]\d{4}|[78]\d{6}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([2-578]\d{2})(\d{4})'=>'$1 $2'
	);

}
?>