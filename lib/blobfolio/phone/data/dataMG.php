<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MG
//----------------------------------------------------------------------
// generated: 2017-01-26 14:40:50


namespace blobfolio\phone\data;

class dataMG extends data {

	const CODE = 'MG';

	const PREFIX = 261;

	const REGION = 'Africa';

	const PATTERNS = array(
		'[23]\d{8}'
	);

	const TYPES = array(
		'20(?:2\d{2}|4[47]\d|5[3467]\d|6[279]\d|7(?:2[29]|[35]\d)|8[268]\d|9[245]\d)\d{4}'=>array(
			'fixed'
		),
		'3[2-49]\d{7}'=>array(
			'mobile'
		),
		'22\d{7}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'([23]\d)(\d{2})(\d{3})(\d{2})'=>'$1 $2 $3 $4'
	);

}
?>