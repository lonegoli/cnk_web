<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php 
//$db = new SQLite3 ("test.db3");
include('opendb.php');
$name=$_POST['name'];
$price=$_POST['price'];
$status=$_POST['status'];
$id=$_POST['id'];
$tablename=$_POST['tablename'];
$sql1=sprintf("update total_menu set name=\"%s\",price=%d,status=%d where id=%d",$name,$price,$status,$id);
$sql2="select * from table_show";
$db=openSQLite3();
if($db)
{
$rs=$db->query($sql2);
if($rs)
{
while($row=$rs->fetchArray())
{
	$sql3=sprintf("select * from %s where id like %d",$row['tablename'],$id);
	$rs1=$db->query($sql3);
	if($rs1->fetchArray())
	{
		$sql4=sprintf("update %s set name=\"%s\",price=%d,status=%d where id=%d",$row['tablename'],$name,$price,$status,$id);
		$db->exec($sql4);
	}
}
if($db->exec($sql1))
{
	$rs=$db->exec("update version set version=version+1 where id=1");
	if($rs)
	{
	echo "<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">修改成功，返回</a>";
	}
	else
	{
		die(ERR_UPDATE_DB);
	}
}
else
{
	echo "<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">修改失败，返回</a>";
}

}
else
{
	die(ERR_SELECT_DB);
}
}
else
{
	die(ERR_CONNECT_DB);
}
$rs=null;
$db->close();
$db=null;
?>

</body>
</html>