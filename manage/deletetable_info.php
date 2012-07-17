<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>菜脑壳无线点餐后台管理系统</title>
</head>
<?php
include('quote.php');
$id=$_GET["id"];
$sql=sprintf("delete from table_info where id=%d",$id);
$db=openSQLite3();
if($db)
{
$rs=$db->exec($sql);
if($rs)
{
	echo "<a href=\"showdiningtable.php\" target=\"admidow\">删除成功，点击返回</a>";
}
else
{
	die(ERR_DELETE_DB);
}
}
else
{
	die(ERR_CONNECT_DB);
}
$db->close();
$rs = null;
$db = null;
?>
<body>
</body>
</html>