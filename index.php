<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


//echo $_SERVER['REQUEST_URI'];

//Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
//require_once(ROOT. '/components/Router.php');
//require_once ROOT.'/components/Db.php';

//echo ROOT;
session_start();
//Вызов Router
$router = new Router();
$router->run();