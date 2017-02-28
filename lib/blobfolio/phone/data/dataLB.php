<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: LB
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataLB extends data {

	const CODE = 'LB';

	const PREFIX = 961;

	const REGION = 'Asia';

	const PATTERNS = array(
		'[13-9]\d{6,7}'
	);

	const TYPES = array(
		'(?:[14-6]\d{2}|7(?:[2-57]\d|62|8[0-7]|9[04-9])|8[02-9]\d|9\d{2})\d{4}'=>array(
			'fixed'
		),
		'(?:3\d|7(?:[01]\d|6[013-9]|8[89]|9[1-3])|81\d)\d{5}'=>array(
			'mobile'
		),
		'9[01]\d{6}'=>array(
			'premium_rate'
		),
		'80\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'([7-9]\d)(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>