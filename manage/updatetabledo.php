<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
include('opendb.php');
$id=$_POST['id'];
$tablenum=$_POST['tablenum'];
$status=$_POST['status'];
$sql=sprintf("update table_info set tablenum=%d,status=%d where id=%d",$tablenum,$status,$id);
$db=openSQLite3();
if($db)
{
	$rs=$db->exec($sql);
	if($rs)
	{
			$db->close();
		echo "<a href=\"showdiningtable.php\" target=\"admidow\">修改成功！点击返回。</a>";

	}
	else
	{   $db->close();
		die(ERR_UPDATE_DB);
	}
}
else
{
	die(ERR_CONNECT_DB);
}
?>
</body>
</html>