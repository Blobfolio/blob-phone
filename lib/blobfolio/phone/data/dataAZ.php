<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: AZ
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataAZ extends data {

	const CODE = 'AZ';

	const PREFIX = 994;

	const REGION = '';

	const PATTERNS = array(
		'[1-9]\d{8}'
	);

	const TYPES = array(
		'(?:1[28]\d{3}|2(?:02|1[24]|2[2-4]|33|[45]2|6[23])\d{2}|365(?:[0-46-9]\d|5[0-35-9]))\d{4}'=>array(
			'fixed'
		),
		'(?:36554|(?:4[04]|5[015]|60|7[07])\d{3})\d{4}'=>array(
			'mobile'
		),
		'88\d{7}'=>array(
			'toll_free'
		),
		'900200\d{3}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'(\d{3})(\d{2})(\d{2})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>