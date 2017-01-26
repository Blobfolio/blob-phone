<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PW
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataPW extends data {

	const CODE = 'PW';

	const PREFIX = 680;

	const REGION = '';

	const PATTERNS = array(
		'[2-8]\d{6}'
	);

	const TYPES = array(
		'2552255|(?:277|345|488|5(?:35|44|87)|6(?:22|54|79)|7(?:33|47)|8(?:24|55|76))\d{4}'=>array(
			'fixed'
		),
		'(?:6[234689]0|77[45789])\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>