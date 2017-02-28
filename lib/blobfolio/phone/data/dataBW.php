<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BW
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBW extends data {

	const CODE = 'BW';

	const PREFIX = 267;

	const REGION = '';

	const PATTERNS = array(
		'[2-79]\d{6,7}'
	);

	const TYPES = array(
		'(?:2(?:4[0-48]|6[0-24]|9[0578])|3(?:1[0235-9]|55|[69]\d|7[01])|4(?:6[03]|7[1267]|9[0-5])|5(?:3[0389]|4[0489]|7[1-47]|88|9[0-49])|6(?:2[1-35]|5[149]|8[067]))\d{4}'=>array(
			'fixed'
		),
		'7(?:[1-6]\d|7[014-8])\d{5}'=>array(
			'mobile'
		),
		'90\d{5}'=>array(
			'premium_rate'
		),
		'79[12][01]\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2',
		'(7\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'(90)(\d{5})'=>'$1 $2'
	);

}
?>