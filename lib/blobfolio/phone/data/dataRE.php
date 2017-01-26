<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: RE
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataRE extends data {

	const CODE = 'RE';

	const PREFIX = 262;

	const REGION = '';

	const PATTERNS = array(
		'[268]\d{8}'
	);

	const TYPES = array(
		'262\d{6}'=>array(
			'fixed'
		),
		'6(?:9[23]|47)\d{6}'=>array(
			'mobile'
		),
		'80\d{7}'=>array(
			'toll_free'
		),
		'89[1-37-9]\d{6}'=>array(
			'premium_rate'
		),
		'8(?:1[019]|2[0156]|84|90)\d{6}'=>array(
			'shared_cost'
		)
	);

	const FORMATS = array(
		'([268]\d{2})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>