<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
//$db = new SQLite3("test.db3");
include('opendb.php');
$db=openSQLite3();
$tablename=$_GET['name'];
$txt=sprintf("drop table %s",$tablename);
$txt1=sprintf("delete from table_show where(tablename=\"%s\")",$tablename);
$db->exec($txt);
$db->exec($txt1);
$db->exec("update version set version=version+1 where id=1");
$db->close();
$db = null;
?>
<a href="showtable.php" target="showframe"">删除成功，返回</a>
</body>
</html>