<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: CG
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataCG extends data {

	const CODE = 'CG';

	const PREFIX = 242;

	const REGION = '';

	const PATTERNS = array(
		'[028]\d{8}'
	);

	const TYPES = array(
		'222[1-589]\d{5}'=>array(
			'fixed'
		),
		'0[14-6]\d{7}'=>array(
			'mobile'
		),
		'800\d{6}'=>array(
			'premium_rate'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{4})'=>'$1 $2 $3',
		'(\d)(\d{4})(\d{4})'=>'$1 $2 $3'
	);

}
?>