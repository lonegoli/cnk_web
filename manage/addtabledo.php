<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php
include('quote.php');
$db=openSQLite3Table_info();
if($db)
{
$tablenum=$_POST["tablenum"];
$sta=0;
//$db=new SQLite3("test.db3");
$txt=sprintf("insert into table_info values(null,%d,%d)",$tablenum,$sta);
$rs=$db->exec($txt);
if($rs)
{
$db->close();
$db=null;
echo "</br></br><a href=\"table.html\" target=\"I1\" >添加成功，返回</a>";
}
}
else
{
	$db->close();
    $db=null;
	die(ERR_CONNECT_DB);
}
?>
</body>
</html>