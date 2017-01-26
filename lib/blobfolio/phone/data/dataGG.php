<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GG
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataGG extends data {

	const CODE = 'GG';

	const PREFIX = 44;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[135789]\d{6,9}'
	);

	const TYPES = array(
		'1481\d{6}'=>array(
			'fixed'
		),
		'7(?:781\d|839\d|911[17])\d{5}'=>array(
			'mobile'
		),
		'80(?:0(?:1111|\d{6,7})|8\d{7})|500\d{6}'=>array(
			'toll_free'
		),
		'(?:87[123]|9(?:[01]\d|8[0-3]))\d{7}'=>array(
			'premium_rate'
		),
		'8(?:4(?:5464\d|[2-5]\d{7})|70\d{7})'=>array(
			'shared_cost'
		),
		'70\d{8}'=>array(
			'personal_number'
		),
		'56\d{8}'=>array(
			'voip'
		)
	);

	const FORMATS = array();

}
?>