<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: JE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataJE extends data {

	const CODE = 'JE';

	const PREFIX = 44;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[135789]\d{6,9}'
	);

	const TYPES = array(
		'1534\d{6}'=>array(
			'fixed'
		),
		'7(?:509\d|7(?:00[378]|97[7-9])|829\d|937\d)\d{5}'=>array(
			'mobile'
		),
		'80(?:07(?:35|81)|8901)\d{4}'=>array(
			'toll_free'
		),
		'(?:871206|90(?:066[59]|1810|71(?:07|55)))\d{4}'=>array(
			'premium_rate'
		),
		'8(?:4(?:4(?:4(?:05|42|69)|703)|5(?:041|800))|70002)\d{4}'=>array(
			'shared_cost'
		),
		'701511\d{4}'=>array(
			'personal_number'
		),
		'56\d{8}'=>array(
			'voip'
		)
	);

	const FORMATS = array();

}
?>