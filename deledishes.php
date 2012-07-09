<?php
$tablename=$_GET["tablename"];
$id=$_GET["id"];
$db=new SQLite3("test.db3");
$txt=sprintf("delete from %s where(id=%d)",$tablename,intval($id));
$txt1=sprintf("delete from total_menu where(name=\"%s\")",$_GET["name"]);
if($db->exec($txt))
{echo "<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">删除成功，返回</a>";
}
else
{
	echo "<a href=\"showdishes.php?tablename=$tablename\" target=\"showframe\">删除失败，返回</a>";
}
$txt2=sprintf("select * from total_menu where name like '%s'",$_GET['name']);
$rs = $db->query($txt2);
$row = $rs->fetchArray();
if($row['usenum']==1)
{
	$db->exec($txt1);
}
else
{
	$txt3=sprintf("update total_menu set usenum=usenum-1 where name=\"%s\"",$_GET['name']);
	$db->exec($txt3);
}
$db->exec("update version set version=version+1 where id=1");
$db->close();

?>