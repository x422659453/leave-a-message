<?php

	function C($key)
	{
		global $config;
		
		return $config[$key];
	}

	function __autoload($className)
	{
		include './'.$className.'.php';
	}

	function url($controller,$action,$params =[])
	{
		$url = APP_HOST.'/index.php?c='.$controller.'&a='.$action;
		if(!empty($params)){
			foreach ($params as $key => $value) {
				$url .='&'.$key.'='.'$value';
			}
		}

		return APP_HOST.'/index.php?c='.$controller.'&a='.$action;
	}
	function redirect($url)
	{
		return APP_HOST.'/Public/'.$url;
	}

	function getImg($imgSrc)
	{		
		return APP_HOST.'/Public/img/'.$imgSrc;
	}

	function getJs($jsSrc)
	{
		return APP_HOST.'/Public/js/'.$jsSrc;
	}

	function getCss($cssSrc)
	{
		return APP_HOST.'/Public/css/'.$cssSrc;
	}