<?php
include('opendb.php');
$db=openSQLite3();
$dishname=$_POST["name"];
$tablename=$_POST["tablename"];
//$dishname="回锅肉";
//$tablename="mytest";
$pan1="false";
$pan2="true";
//$db=new SQLite3("test.db3");
$txt=sprintf("select * from %s where name like '%s'",$tablename,$dishname);
$rs=$db->query($txt);
if($rs->fetchArray())
{
	echo $pan1;
}
else
{
	echo $pan2;
}
$db->close();
$rs = null;
$db = null;
?>