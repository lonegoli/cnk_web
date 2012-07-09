<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="server/css/main.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php 
$db = new SQLite3("test.db3");
$oname=$_POST['ordername'];
$db->exec($oname);
 //关闭数据库
$db->close();
$db = null;

?>
<!--<script language="javascript">
alert("添加成功！！！");
history.back(-1); 
</script>-->
<a href="order.html" target='I1'>点击返回</a>
</body>
</html>
