<?php

class User{
	public function login()
	{
		include 'User/user.php';
	}

	public function dologin()
	{
		$sql = "select * form user where user_name = '$user_name'";	
		$res = $pdo->query($sql)->fetchAll();
			
	}
	public function register()
	{
		//获取传递的值
		//验证
		//入库
		//设置登陆状态
		//跳转
	}
}
$act = isset($_GET['act']) ? $_GET['act'] : 'login' ;

$user = new user;

$user->$act();