<?php
class Message{

	public function show($table_Name)
	{
		$sql = "select * from $table_Name";
		$res = mysql_query($sql);
		$data = array();
		while ($row = mysql_fetch_assoc($res)) {
			$data[] = $row;
		}
		return $data;
	}
	public function add($pdo,$table_Name,$params)
	{
		$sql = 'inset into'.$table_Name;
		$filed = '(';
		$value = 'values (';
		foreach ($params as $key => $val) {
			$filed .= $key .',';
			$value .= $val .',';
		}
		$sql .=trim($filed,',').')'.trim($values,',').')';

	}
	public function update()
	{

	}
	public function delete($table_Name,$id,$id_name)
	{
		$sql = "delete form $table_Name where $id_name=$id";
		$res = $pdo->query($sql);
		if($res){
			header("location:user.php");
		}else{
			echo "删除失败";
		}
	}
}