<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php
$tablenum=$_POST["tablenum"];
$sta=$_POST["sta"];
$db=new SQLite3("test.db3");
$txt=sprintf("insert into table_info values(null,%d,%d)",$tablenum,$sta);
$db->exec($txt);
$db->close();
$db=null;
echo "<a href=\"table.html\" target=\"I1\" >添加成功，返回</a>";

?>
</body>
</html>