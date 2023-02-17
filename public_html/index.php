<?php

define('__WEBROOT__',dirname(__FILE__)); 
define('__ROOT__',dirname(__WEBROOT__)); 
define('__DS__',DIRECTORY_SEPARATOR);
define('__CONFIG__',__ROOT__.__DS__.'Config'); 
define('__BASE_URL__',dirname(dirname($_SERVER['SCRIPT_NAME']))); 

require __CONFIG__.__DS__.'includes.php'; 
new Dispatcher();