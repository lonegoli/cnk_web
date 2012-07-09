<html>
<head>
<link href="server/css/main.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php 
$db = new SQLite3("test.db3");
$fname=$_POST['formname'];
$txt=sprintf("insert into table_show values(null,\"%s\",\"%s\")",$fname,"dish");
$db->exec($txt);
$id=$db->lastInsertRowID();
$tablename="dish".$id;
$txt1=sprintf("update table_show set tablename=\"%s\" where id=%d",$tablename,intval($id));
$db->exec($txt1);

$txt2 = sprintf("create table %s (id integer primary key autoincrement,name char(32),price numeric(4),description char(100),pictureBUrl char(100),pictureSUrl char(100),status numeric(3),backup char(2))" ,$tablename); 

$db->exec($txt2);

 
 //关闭数据库
$db->close();
$db = null;

?>
<!--<script language="javascript">
alert("添加成功！！！");
history.back(-1); 
</script>-->
<a href="addview.html" target='I1'>点击返回</a>
</body>
</html>
