<?php
define('DS', DIRECTORY_SEPARATOR);
defined('DIR_ROOT') || define('DIR_ROOT', dirname(dirname(dirname(dirname(__DIR__)))) . DS . 'vvveb' . DS);
defined('DIR_CONFIG') || define('DIR_CONFIG', DIR_ROOT . 'config' . DS);
defined('DIR_SYSTEM') || define('DIR_SYSTEM', DIR_ROOT . 'system' . DS);
defined('PAGE_CACHE_DIR') || define('PAGE_CACHE_DIR', 'page-cache' . DS);

// include DIR_SYSTEM . 'vtpl' . DS . 'vtpl.php';

require_once DIR_SYSTEM . 'core/startup.php';
System\Core\start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Wokiee - Responsive HTML5 Template</title>

	<link rel="shortcut icon" href="favicon.ico">

	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Wokiee - Responsive HTML5 Template">
	<meta name="author" content="wokiee">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- theme meta -->
	<meta name="theme-name" content="wokiee" />

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
</head>