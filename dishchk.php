<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$dishname=$_POST["name"];
$tablename=$_POST["tablename"];
//$dishname="回锅肉";
//$tablename="mytest";
$pan1="false";
$pan2="true";
$db=new SQLite3("test.db3");
$txt=sprintf("select * from %s where name like '%s'",$tablename,$dishname);
$rs=$db->query($txt);
if($rs->fetchArray())
{
	echo $pan1;}
else
{
	echo $pan2;
}
$db->close();
$rs = null;
 $db = null;


?>
</body>
</html>