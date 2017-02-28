<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: MD
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataMD extends data {

	const CODE = 'MD';

	const PREFIX = 373;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[235-9]\d{7}'
	);

	const TYPES = array(
		'(?:2[1-9]\d|3[1-79]\d|5(?:33|5[257]))\d{5}'=>array(
			'fixed'
		),
		'(?:562|6\d{2}|7(?:[189]\d|6[07]|7[457-9]))\d{5}'=>array(
			'mobile'
		),
		'800\d{5}'=>array(
			'toll_free'
		),
		'90[056]\d{5}'=>array(
			'premium_rate'
		),
		'808\d{5}'=>array(
			'shared_cost'
		),
		'3[08]\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d{2})(\d{3})(\d{3})'=>'$1 $2 $3',
		'([25-7]\d{2})(\d{2})(\d{3})'=>'$1 $2 $3',
		'([89]\d{2})(\d{5})'=>'$1 $2'
	);

}
?>