<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">

</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>菜脑壳无线点餐后台管理系统</title>
</head>
<?php
$tablename=$_GET["tablename"];
?>
<frameset  cols="300,*" framespacing="0" border="6px">
  <frame src=<?php echo "new.php?tablename=$tablename" ?> name="addframe" scrolling="No" noresize="noresize" id="addframe" />
  <frame src=<?php echo "showdishes.php?tablename=$tablename" ?> name="showframe" id="showframe"/>
</frameset>
<noframes><body>你的浏览器不支持frameset,请换成高版本的浏览器！！！！
</body>
</noframes></html>
