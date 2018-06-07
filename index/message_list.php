<?php
header("content-type:text/html;charset=utf8");
//连库、选库、设置字符集
mysql_connect("127.0.0.1","root","root");
mysql_select_db("test");
//mysql_query('set names utf8');
//写查询的sql语句
$sql = "select * from message";
//调用查询方法
$res = mysql_query($sql);
$data = array();
while($arr = mysql_fetch_assoc($res))
    {
       	$data[] = $arr;
    }
?>
<center>
	<table border="1">
		<tr align="center">
			<td>id</td>
			<td>留言</td>
			<td>时间</td>
		</tr>
		<?php foreach($data as $key=>$val){?>
		<tr>
			<td><?php echo $val['id']?></td>
			<td><?php echo $val['msg']?></td>
			<td><?php echo date("Y-m-d H:i:s",$val['time'])?></td>
		</tr>
		<?php }?>
	</table>
</center>