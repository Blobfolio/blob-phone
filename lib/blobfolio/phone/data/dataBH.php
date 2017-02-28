<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BH
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBH extends data {

	const CODE = 'BH';

	const PREFIX = 973;

	const REGION = '';

	const PATTERNS = array(
		'[136-9]\d{7}'
	);

	const TYPES = array(
		'(?:1(?:3[1356]|6[0156]|7\d)\d|6(?:1[16]\d|500|6(?:0\d|3[12]|44|7[7-9])|9[69][69])|7(?:1(?:11|78)|7\d{2}))\d{4}'=>array(
			'fixed'
		),
		'(?:3(?:[1-4679]\d|5[013-69]|8[0-47-9])\d|6(?:3(?:00|33|6[16])|6(?:[69]\d|3[03-9]|7[0-6])))\d{4}'=>array(
			'mobile'
		),
		'80\d{6}'=>array(
			'toll_free'
		),
		'(?:87|9[014578])\d{6}'=>array(
			'premium_rate'
		),
		'84\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'(\d{4})(\d{4})'=>'$1 $2'
	);

}
?>