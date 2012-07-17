<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>数据库版本查询</title>
</head>
<body>
<?php
//$db=new SQLite3("test.db3");
include('quote.php');
$db=openSQLite3();
$rs=$db->query('select * from  version');
if(!$rs)
{
	die(ERR_SELECT_DB);
}
$row=$rs->fetchArray();
if($row)
{
	$version=$row['version'];
}
//$time=$row['time'];
else
{
	die("查询失败!");
}
//$oldversion=$row['oldversion'];
$rs->finalize();
$db->close();
$rs=null;
$db=null;
?>
<p>当前数据库版本号：[<?php echo $version;?>]</p>
</body>
</html>