<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: IM
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataIM extends data {

	const CODE = 'IM';

	const PREFIX = 44;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[135789]\d{6,9}'
	);

	const TYPES = array(
		'1624\d{6}'=>array(
			'fixed'
		),
		'7(?:4576|[59]24\d)\d{5}'=>array(
			'mobile'
		),
		'808162\d{4}'=>array(
			'toll_free'
		),
		'(?:872299|90[0167]624)\d{4}'=>array(
			'premium_rate'
		),
		'8(?:4(?:40[49]06|5624\d)|70624\d)\d{3}'=>array(
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