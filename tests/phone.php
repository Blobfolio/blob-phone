<?php
//---------------------------------------------------------------------
// Tests!
//---------------------------------------------------------------------



@require_once(dirname(dirname(__FILE__)) . '/lib/vendor/autoload.php');
@require_once(dirname(__FILE__) . '/test.php');

$phones = array(
	array(2015550123, 'US'),
	array(2015550123, ''),
	array(94231234, 'UY'),
	array(2042345678, 'US'),
	array(1012345678, 'CN'),
	array(1012345678, 'US'),
	array(10123456, 'AM'),
	array(612345678, 'GB')
);

foreach ($phones as $phone) {
	$p = new \blobfolio\phone\phone($phone[0], $phone[1]);
	\blobfolio\test\cli::record('phone::__construct', array($phone), $p->get_data());
}

foreach ($phones AS $phone){
	$p = new \blobfolio\phone\phone($phone[0], $phone[1]);
	\blobfolio\test\cli::record('phone::is_phone', array('mobile'), $p->is_phone('mobile'));
}



\blobfolio\test\cli::print('PHONE CHALLENGES');

?>