<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: PG
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataPG extends data {

	const CODE = 'PG';

	const PREFIX = 675;

	const REGION = 'Australia';

	const PATTERNS = array(
		'[1-9]\d{6,7}'
	);

	const TYPES = array(
		'(?:3[0-2]\d|4[257]\d|5[34]\d|64[1-9]|77(?:[0-24]\d|30)|85[02-46-9]|9[78]\d)\d{4}'=>array(
			'fixed'
		),
		'(?:20150|68\d{2}|7(?:[0-689]\d|75)\d{2})\d{3}'=>array(
			'mobile'
		),
		'180\d{4}'=>array(
			'toll_free'
		),
		'27[568]\d{4}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{3})(\d{4})'=>'$1 $2',
		'(\d{4})(\d{4})'=>'$1 $2'
	);

}
?>