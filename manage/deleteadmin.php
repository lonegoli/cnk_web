<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>菜脑壳无线点餐后台管理系统</title>
</head>
<body>
<?php
include('quote.php');
$id=$_GET['id'];
$db=openSQLite3();
if($db)
{
$sql=sprintf("delete from administrator where id=%d",$id);
$db->exec($sql) or die(ERR_DELETE_DB);
echo "<a href=\"showadm.php\" target=\"admidow\">删除成功！点击返回。</a>" ;
$db->close();
$db = null;
	die(0);
}
else
{
$db->close();
$db = null;
die(ERR_CONNECT_DB);	
}
?>
</body>
</html>