<html>
<head>
<link href="server/css/main.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 
//$db = new SQLite3("test.db3");
include('quote.php');
$db=openSQLite3();
if(!$db)
{
	die(ERR_CONNECT_DB);
}
$fname=$_POST['formname'];
$txt=sprintf("insert into table_show values(null,\"%s\",\"%s\")",$fname,"dish");
if(!($db->exec($txt)))
{
	die(ERR_INSERT_DB);
}
$id=$db->lastInsertRowID();
$tablename="dish".$id;
$txt1=sprintf("update table_show set tablename=\"%s\" where id=%d",$tablename,intval($id));
if(!($db->exec($txt1)))
{
	die(ERR_UPDATE_DB);
}

$txt2 = sprintf("create table %s (id integer primary key autoincrement,name char(32),price numeric(4),description char(100),pictureBUrl char(100),pictureSUrl char(100),status numeric(3),backup char(2),dishorder numeric(6))" ,$tablename); 

if(!($db->exec($txt2)))
{
	die(ERR_CREATE_DB);
}
if(!($db->exec("update version set version=version+1 where id=1")))
{
	die(ERR_UPDATE_DB);
} 
 //关闭数据库
$db->close();
$db = null;

?>
<a href="addview.html" target='I1'>点击返回</a>
</body>
</html>
