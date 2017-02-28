<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GE
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGE extends data {

	const CODE = 'GE';

	const PREFIX = 995;

	const REGION = '';

	const PATTERNS = array(
		'[34578]\d{8}'
	);

	const TYPES = array(
		'(?:3(?:[256]\d|4[124-9]|7[0-4])|4(?:1\d|2[2-7]|3[1-79]|4[2-8]|7[239]|9[1-7]))\d{6}'=>array(
			'fixed'
		),
		'5(?:14|5[01578]|68|7[0147-9]|9[0-35-9])\d{6}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'toll_free'
		),
		'706\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3'
	);

}
?>