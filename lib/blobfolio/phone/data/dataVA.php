<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: VA
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataVA extends data {

	const CODE = 'VA';

	const PREFIX = 39;

	const REGION = 'Europe';

	const PATTERNS = array(
		'(?:0(?:878\d{5}|6698\d{5})|[1589]\d{5,10}|3(?:[12457-9]\d{8}|[36]\d{7,9}))'
	);

	const TYPES = array(
		'06698\d{5}'=>array(
			'fixed'
		),
		'3(?:[12457-9]\d{8}|6\d{7,8}|3\d{7,9})'=>array(
			'mobile'
		),
		'80(?:0\d{6}|3\d{3})'=>array(
			'toll_free'
		),
		'0878\d{5}|1(?:44|6[346])\d{6}|89(?:2\d{3}|4(?:[0-4]\d{2}|[5-9]\d{4})|5(?:[0-4]\d{2}|[5-9]\d{6})|9\d{6})'=>array(
			'premium_rate'
		),
		'84(?:[08]\d{6}|[17]\d{3})'=>array(
			'shared_cost'
		),
		'1(?:78\d|99)\d{6}'=>array(
			'personal_number'
		),
		'55\d{8}'=>array(
			'voip'
		)
	);

	const FORMATS = array();

}
?>