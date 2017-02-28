<?php
// @codingStandardsIgnoreFile
//----------------------------------------------------------------------
// DATA: BO
//----------------------------------------------------------------------
// generated: 2017-02-28 11:30:19


namespace blobfolio\phone\data;

class dataBO extends data {

	const CODE = 'BO';

	const PREFIX = 591;

	const REGION = 'South America';

	const PATTERNS = array(
		'[23467]\d{7}'
	);

	const TYPES = array(
		'(?:2(?:2\d{2}|5(?:11|[258]\d|9[67])|6(?:12|2\d|9[34])|8(?:2[34]|39|62))|3(?:3\d{2}|4(?:6\d|8[24])|8(?:25|42|5[257]|86|9[25])|9(?:2\d|3[234]|4[248]|5[24]|6[2-6]|7\d))|4(?:4\d{2}|6(?:11|[24689]\d|72)))\d{4}'=>array(
			'fixed'
		),
		'[67]\d{7}'=>array(
			'mobile'
		)
	);

	const FORMATS = array(
		'([234])(\d{7})'=>'$1 $2',
		'([67]\d{7})'=>'$1'
	);

}
?>