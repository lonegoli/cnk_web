<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="./css/main.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
include('quote.php');
$db=openSQLite3();
$tablename=$_POST['tablename'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
//$num3=$_POST['num3'];
$sql=sprintf("select * from \"%s\" where dishorder=%d",$tablename,$num2);
if($db->exec($sql))
{
	$sql=sprintf("update \"%s\" set dishorder=dishorder+1  where  dishorder>=%d",$tablename,$num2);
	$db->exec($sql) or die(ERR_UPDATE_DB);
	$sql=sprintf("update \"%s\" set dishorder=%d where id=%d",$tablename,$num2,$num1);
	$db->exec($sql) or die(ERR_UPDATE_BD);
}
else
{
	$sql=sprintf("update \"%s\" set dishorder=%d where id=%d",$tablename,$num2,$num1);
	$db->exec($sql) or die(ERR_UPDATE_DB);
}
$db->close();
$db=null;
?>
<a href=<?php echo "add_dele_dishes.php?tablename=$tablename"?> target='I1'>点击返回</a>
</body>
</html>