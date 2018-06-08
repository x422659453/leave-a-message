<?php

class dbname
{
		public function add($table_Name,$params)
		{
			$sql = 'inset into'.$table_Name;
			$filed = '(';
			$value = 'values (';
			foreach ($params as $key => $val) {
				$filed .= $key .',';
				$value .= $val .',';
			}
			$sql .=trim($filed,',').')'.trim($values,',').')';

			return $pdo -> exec($sql);
		}

		public function select($table_Name)
		{
			$sql = "select * from $table_Name";
			$res = mysql_query($sql);
			$data = array();
			while ($row = mysql_fetch_assoc($res)) {
				$data[] = $row;
			}
			return $data;
			
		}
		public function update($table_Name,$data,$where)
		{
			$sql = "update $table_Name set ";
			foreach($data as $k=>$v){
				$sql.="".$k."='".$v."',";
			}
			$sql=rtrim($sql,',');
			$sql.=" where ".$where;
			$res=mysql_query($sql);
			return $res?true:false;
		}
		public function delete($table_Name,$where)
		{
			$sql = "delete from $table_Name where 主键名=值";
			list($key,$values)=each($where);
			$sql = "delete from $table_Name where $key='$values'";
			$res=mysql_query($sql);
			return $res?true:false;
		}

		 public function pdo(){
				$pdo = new \PDO('mysql:host=127.0.0.1;dbname=test','root','root');
				return $pdo;
		 }


}		 

