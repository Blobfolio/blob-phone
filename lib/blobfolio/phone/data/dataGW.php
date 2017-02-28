<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GW
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGW extends data {

	const CODE = 'GW';

	const PREFIX = 245;

	const REGION = '';

	const PATTERNS = array(
		'(?:4(?:0\d{5}|4\d{7})|9\d{8})'
	);

	const TYPES = array(
		'443\d{6}'=>array(
			'fixed'
		),
		'9(?:5(?:5\d|6[0-2])|6(?:5[0-2]|6\d|9[012])|77\d)\d{5}'=>array(
			'mobile'
		),
		'40\d{5}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{3})(\d{3})'=>'$1 $2 $3',
		'(\d{3})(\d{4})'=>'$1 $2'
	);

}
?>