<?php
/**
 * Project: thinkphp-inaction
 * User: xialei
 * Date: 2016/8/13 0013
 * Time: 11:25
 */
return array(
	'DB_TYPE' => 'mysql',
	'DB_DSN' => 'mysql:host=localhost;dbname=bbs;charset=utf8mb4',
	'DB_uSER' => 'root',
	'DB_PWD' => 'root',
	'DB_PREFIX' => 'bbs_',
	'DB_PARAMS' => array(
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	)
);