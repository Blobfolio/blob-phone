<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: SI
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataSI extends data {

	const CODE = 'SI';

	const PREFIX = 386;

	const REGION = 'Europe';

	const PATTERNS = array(
		'[1-7]\d{6,7}|[89]\d{4,7}'
	);

	const TYPES = array(
		'(?:1\d|[25][2-8]|3[24-8]|4[24-8]|7[3-8])\d{6}'=>array(
			'fixed'
		),
		'(?:[37][01]|4[0139]|51|6[48])\d{6}'=>array(
			'mobile'
		),
		'80\d{4,6}'=>array(
			'toll_free'
		),
		'90\d{4,6}|89[1-3]\d{2,5}'=>array(
			'premium_rate'
		),
		'(?:59|8[1-3])\d{6}'=>array(
			'voip'
		)
	);

	const FORMATS = array(
		'(\d)(\d{3})(\d{2})(\d{2})'=>'$1 $2 $3 $4',
		'([3-7]\d)(\d{3})(\d{3})'=>'$1 $2 $3',
		'([89][09])(\d{3,6})'=>'$1 $2',
		'([58]\d{2})(\d{5})'=>'$1 $2'
	);

}
?>