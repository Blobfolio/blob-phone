<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: EH
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataEH extends data {

	const CODE = 'EH';

	const PREFIX = 212;

	const REGION = '';

	const PATTERNS = array(
		'[5-9]\d{8}'
	);

	const TYPES = array(
		'528[89]\d{5}'=>array(
			'fixed'
		),
		'(?:6(?:[0-79]\d|8[0-247-9])|7(?:[07][07]|6[12]))\d{6}'=>array(
			'mobile'
		),
		'80\d{7}'=>array(
			'toll_free'
		),
		'89\d{7}'=>array(
			'premium_rate'
		),
		'5924[01]\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array();

}
?>