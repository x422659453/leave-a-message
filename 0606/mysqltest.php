<?php  
      
    require_once 'mysqlfunction.php';  
    require_once 'mysqlconfig.php';  
      
    $db = new mysql();  
    $link = $db->connect2();  
    var_dump($link);  
      
      
    $sql='SELECT * FROM user';  
    $rows = $db->fetchAll($sql);  
    var_dump($rows);  
  $sql = "";
?>  