<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
//$db = new SQLite3("test.db3");
include('opendb.php');
$db=openSQLite3();
$id=$_GET['id'];
$txt=sprintf("delete from serviceList where(id=%d)",$id);
$db->exec($txt);
$db->close();
$db = null;
?>
<a href="showservice.php" target="showService">删除成功，返回</a>
</body>
</html>