<?php
// include('./Common/function.php');
// use Controller\Home\User;
// $obj = new User();
// $obj -> login();

define('APP_HOST',$_SERVER['HTTP_HOST']);

$controller = isset($_GET['c']) ? ucfirst($_GET['c']):'Index';

$action = isset($_GET['a']) ? $_GET['a'] : 'index';

$config = include('./config.php');

include('./Common/function.php');
// include('./Controller/'.$controller.'.php');//默认
include('./Model/DB.php');
$controller = 'Controller\Home\\'.$controller;
// $db = new DB();

// $info = $db->select('select * from novel');

// print_r($info);die;
$ob = new $controller();
$ob->$action();