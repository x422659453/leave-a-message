<?php
namespace Model;
class DB
	{
		public $pdo;

		public function __construct()
	    {

	    	$db = C('db');
	      	$this->pdo = new \PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'],$db['username'],$db['password']);
 
	    }
		//添加
		public function add($table_name,$arr)
		{
			$sql = 'insert into ' . $table_name;

			$key = '(';
			$value = ' values (';
			foreach ($arr as $k => $v) {
				$key .= $k.',';
				$value .= $v.','; 
			}
			// @htmlspecialchars($arr);
			$sql .= trim($key, ',').')'.trim($value, ',').')';
			return $this->$pdo->exec($sql);
		}
		//查询
		public function select($sql)
		{
			$result = $this->pdo->query($sql);
			return $result->fetchAll();
		}


		// public function select($TableName)
		// {
		// 	$sql = "select * from $TableName";
		// 	//执行sql语句
		// 	$result = $this->pdo->query($sql);
		// 	//循环获取数据
		// 	while($arr = mysql_fetch_assoc($result))
		// 	{
		// 		$data[] = $arr;
		// 	}
		// 	return $data;
		// }

		//查询一条
		// public function getone($table,$id){
		// 	$sql = "select * from $table where lid = '$id'";
		// 	$res = mysql_query($sql);
		// 	$row = mysql_fetch_assoc($res);	
		// 	return $row;	
		// }
		// //删除  批量删除
		// public function delete($table,$id){
		// 	$sql = "delete from $table where  lid in ('$id') ";
		// 	return $this->query($sql);
		// }
		// public function query($sql){
		// 	return mysql_query($sql);
		// }
		// 
		// public function select($table){
		// 	$sql = "select * from `$table`";
		// 	$res=mysql_query($sql);
		// 	while($row = mysql_fetch_assoc($res)){
		// 		$data[]=$row;
		// 	}
		// 	if(empty($data)){
		// 		return '';
		// 	}else{
		// 		return $data;
		// 	}
		
	}
