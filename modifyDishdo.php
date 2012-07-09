<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<?php 
$db = new SQLite3 ("test.db3");
$name=$_POST['name'];
$price=$_POST['price'];
$status=$_POST['status'];
$id=$_POST['id'];
$tablename=$_POST['tablename'];
$sql1=sprintf("update total_menu set name=\"%s\",price=%d,status=%d where id=%d",$name,$price,$status,$id);
$sql2="select * from table_show";
$rs=$db->query($sql2);
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
{echo "<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">修改成功，返回</a>";
}
else
{
	echo "<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">修改失败，返回</a>";
}
?>

</body>
</html>