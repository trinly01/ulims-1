<?php
// setting the error reporting excepting E_NOTICE [Trinmar A. Boado]
error_reporting('E_ALL && ~E_NOTICE');
// setting the timezone to Manila, Philippines [Trinmar A. Boado]
date_default_timezone_set('Asia/Manila');
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
