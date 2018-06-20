<?php
namespace Controller;	

class Controller
	{
		public $assign;
		
		public function display($path)
		{
			// // extract($this->assign);
			// print_r($path);die;
			include './View/'.$path.'.php';

		} 
		public function assign($key,$value)
		{
			$this->assign[$key]=$value;
		}
	}



	