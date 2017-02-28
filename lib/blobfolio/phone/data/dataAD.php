<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AD
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataAD extends data {

	const CODE = 'AD';

	const PREFIX = 376;

	const REGION = '';

	const PATTERNS = array(
		'[16]\d{5,8}|[37-9]\d{5}'
	);

	const TYPES = array(
		'[78]\d{5}'=>array(
			'fixed'
		),
		'(?:3\d|6(?:[0-8]|90\d{2}))\d{4}'=>array(
			'mobile'
		),
		'180[02]\d{4}'=>array(
			'toll_free'
		),
		'[19]\d{5}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3})'=>'$1 $2',
		'(\d{4})(\d{4})'=>'$1 $2',
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>