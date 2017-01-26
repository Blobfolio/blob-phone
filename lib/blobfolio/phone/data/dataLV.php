<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LV
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataLV extends data {

	const CODE = 'LV';

	const PREFIX = 371;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[2689]\d{7}'
	);

	const TYPES = array(
		'6\d{7}'=>array(
			'fixed'
		),
		'2\d{7}'=>array(
			'mobile'
		),
		'80\d{6}'=>array(
			'toll_free'
		),
		'90\d{6}'=>array(
			'premium_rate'
		),
		'81\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'([2689]\d)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>