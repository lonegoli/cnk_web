<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
include('quote.php');
$db=openSQLite3();
$username=$_POST["username"];
$pwd1=$_POST["pwd1"];
$pwd=$_POST["pwd"];
$permission=$_POST["permission"];
if($pwd1==$pwd)
{
//$db=new SQLite3("test.db3");
$txt=sprintf("insert into administrator values(null,\"%s\",\"%s\",%d)",$username,$pwd1,$permission);
$db->exec($txt) or die(ERR_INSERT_DB);
$db->exec("update version set version=version+1 where id=1") or die(ERR_UPDATE_DB); 
echo "</br></br><a href=\"Administrator.html\" target=\"I1\" >添加成功，返回</a>";
}
$db->close();
$db=null;
?>
</body>
</html>