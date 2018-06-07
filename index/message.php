<?php
header("content-type:text/html;charset=utf8");
//连库、选库、设置字符集
mysql_connect("127.0.0.1","root","root");
mysql_select_db("test");
//mysql_query('set names utf8');
$msg = isset($_POST['msg'])?$_POST['msg']:"";
$time = time();
$sql = "insert into message(msg,time) values('$msg','$time')";
//print_r($sql);exit;
$res = mysql_query($sql);
//var_dump($res);exit;
if($res)
{
	echo "<script>alert('留言成功');location.href='message_list.php';</script>";
}else{
	echo "<script>alert('留言失败');location.href='message.html';</script>";
}
?>