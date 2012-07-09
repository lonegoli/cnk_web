<?php
$db = new SQLite3("test.db3");
$tablename=$_GET['name'];
echo $tablename;
$txt=sprintf("drop table %s",$tablename);
$txt1=sprintf("delete from table_show where(class=\"%s\")",$tablename);
$db->exec($txt);
$db->exec($txt1);
$db->close();
 $db = null;

?>
<a href="showalltable.php" target="showframe"">删除成功，返回</a>