<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>菜脑壳无线点餐后台管理系统</title>
</head>
<body>
<?php
include('quote.php');
$db=openSQLite3();
if(!$db)
{
	die(ERR_CONNECT_DB);
}
$tablename=$_GET["tablename"];
$id=$_GET["id"];
$dishname=$_GET["name"];
//$db=new SQLite3("test.db3");
$txt=sprintf("delete from %s where(id=%d)",$tablename,intval($id));
//$txt1=sprintf("delete from total_menu where(name=\"%s\")",$_GET["name"]);
if($db->exec($txt))
{
	echo $dishname."<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">删除成功，点击返回</a>";
}
else
{
	echo $dishname."<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">删除失败，点击返回</a>";
	$db->close();
    $db=null;
	die(ERR_DELEDA_DB);
}

/*$txt2=sprintf("select * from total_menu where name like '%s'",$_GET['name']);
$rs = $db->query($txt2);
if(!$rs)
{
	die(ERR_SELECT_DB);
}
$row = $rs->fetchArray();
if($row['usenum']==1)
{
	$rs=$db->exec($txt1);
	if(!$rs)
	{
		die(ERR_DELETE_DB);
	}
	
}
else
{
	$txt3=sprintf("update total_menu set usenum=usenum-1 where name=\"%s\"",$_GET['name']);
	$rs=$db->exec($txt3);
	if(!$rs)
	{
		die(ERR_UPDATE_DB);
	}
}*/
$rs=$db->exec("update version set version=version+1 where id=1");
if(!$rs)
{
	die(ERR_UPDATE_DB);
}
//$rs=null;
$db->close();
$db=null;

?>
</body>
</html>
