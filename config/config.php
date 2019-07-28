<?php
	session_start();
	ini_set('display_errors', 1);
	define('DSN', 'mysql:host=localhost;dbname=poll_php_db');
	define('DBUSER', 'poll');
	define('DBPASS', 'pollpass');
	require_once(__DIR__ . '/../Controller/function.php');
	require_once(__DIR__ . '/autoload.php');
