<?php

error_reporting(E_ALL);;
ini_set( 'display_errors', 'On' );

define('APPLICATION_PATH', dirname(__FILE__));

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
