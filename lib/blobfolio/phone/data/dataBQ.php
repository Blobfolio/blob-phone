<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BQ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBQ extends data {

	const CODE = 'BQ';

	const PREFIX = 599;

	const REGION = '';

	const PATTERNS = array(
		'[347]\d{6}'
	);

	const TYPES = array(
		'(?:318[023]|416[023]|7(?:1[578]|50)\d)\d{3}'=>array(
			'fixed'
		),
		'(?:318[14-68]|416[15-9]|7(?:0[01]|7[07]|[89]\d)\d)\d{3}'=>array(
			'mobile'
		)
	);

	const FORMATS = array();

}
?>