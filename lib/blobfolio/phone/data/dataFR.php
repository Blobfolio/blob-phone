<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: FR
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataFR extends data {

	const CODE = 'FR';

	const PREFIX = 33;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[1-9]\d{8}'
	);

	const TYPES = array(
		'[1-5]\d{8}'=>array(
			'fixed'
		),
		'(?:6\d|7[3-9])\d{7}'=>array(
			'mobile'
		),
		'80[0-5]\d{6}'=>array(
			'toll_free'
		),
		'89[1-37-9]\d{6}'=>array(
			'premium_rate'
		),
		'8(?:1\d|2[0156]|84|90)\d{6}'=>array(
			'shared_cost'
		),
		'9\d{8}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([1-79])(\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4 $5',
		'(1\d{2})(\d{3})'=>'$1 $2',
		'(8\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>