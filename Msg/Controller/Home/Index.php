<?php 
namespace Controller\Home;
use Controller\Controller;
use Model\DB;
class Index extends Controller
{
	public function index()
	{
		$this->display('Home/Index/index');
	}

	public function duanzi()
	{
		$this->display('Home/Index/duanzi');
	}

	public function yizpi1()
	{
		$this->display('Home/Index/yizpi1');
	}

	public function ganhuo()
	{
		$this->display('Home/Index/ganhuo');
	}

	public function about()
	{
		$this->display('Home/Index/about');
	}
}