<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$username=$_POST["username"];
$pwd1=$_POST["pwd1"];
$pwd=$_POST["pwd"];
$permission=$_POST["permission"];
if($pwd1==$pwd)
{
$db=new SQLite3("test.db3");
$txt=sprintf("insert into administrator values(null,\"%s\",\"%s\",%d)",$username,$pwd1,$permission);
$db->exec($txt);
$db->close();
$db=null;
echo "<a href=\"Administrator.html\" target=\"I1\" >添加成功，返回</a>";
}
?>
</body>
</html>