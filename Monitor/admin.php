<?php
	header("Content-type:text/html;charset=utf-8");
	session_start();
	require_once('config.php');
	require_once('framework/PC.php');
	PC::run($config);
?>