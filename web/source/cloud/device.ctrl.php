<?php
/**
* [9号授权系统 System] Copyright (c) 2018 sq.9hym.com
 */
defined('IN_IA') or exit('Access Denied');
if ($do == 'online') {
	header('Location: //sq.9hym.com/app/api.php?referrer='.$_W['setting']['site']['key']);
	exit;
} elseif ($do == 'offline') {
	header('Location: //sq.9hym.com/app/api.php?referrer='.$_W['setting']['site']['key'].'&standalone=1');
	exit;
} else {
}
template('cloud/device');
