<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CW
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataCW extends data {

	const CODE = 'CW';

	const PREFIX = 599;

	const REGION = '';

	const PATTERNS = array(
		'[169]\d{6,7}'
	);

	const TYPES = array(
		'9(?:[48]\d{2}|50\d|7(?:2[0-24]|[34]\d|6[35-7]|77|8[7-9]))\d{4}'=>array(
			'fixed'
		),
		'9(?:5(?:[12467]\d|3[01])|6(?:[15-9]\d|3[01]))\d{4}'=>array(
			'mobile'
		),
		'60[0-2]\d{4}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2',
		'(9)(\d{3})(\d{4})'=>'$1 $2 $3'
	);

}
?>