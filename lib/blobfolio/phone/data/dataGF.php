<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: GF
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataGF extends data {

	const CODE = 'GF';

	const PREFIX = 594;

	const REGION = '';

	const PATTERNS = array(
		'[56]\d{8}'
	);

	const TYPES = array(
		'594(?:10|2[012457-9]|3[0-57-9]|4[3-9]|5[7-9]|6[0-3]|9[014])\d{4}'=>array(
			'fixed'
		),
		'694(?:[04][0-7]|1[0-5]|3[018]|[29]\d)\d{4}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>