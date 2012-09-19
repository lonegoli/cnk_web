<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
include('quote.php');
$db=openSQLite3();
$servicename=$_POST["servicename"];
if($servicename!="")
{
$txt=sprintf("insert into serviceList values(null,\"%s\")",$servicename);
$db->exec($txt) or die(ERR_INSERT_DB);
echo "<br/><br/><a href=\"addservice.html\" target=\"I1\" >添加成功，返回</a>";
}
$db->close();
$db=null;
?>
</body>
</html>