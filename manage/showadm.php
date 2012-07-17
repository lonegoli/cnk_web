<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
 //$db = new SQLite3 ("test.db3");
include('quote.php');
$tablename="administrator";
$txt=sprintf("select * from %s",$tablename);
$db=openSQLite3() or die(ERR_CONNECT_DB);
$rs = $db->query($txt);
if($rs)
{
 //获取表字段数量
 $colNum = $rs->numColumns();
  
 //循环输字段名
 echo '<table><tr>';
 for ($i = 0; $i < $colNum; $i++)
 {
    if($rs->columnName($i)==COLUMN_USERNAME)
	{
		echo '<td>用户名</td>';
	}
	else if($rs->columnName($i)==COLUMN_PASSWORD)
	{
		echo '<td>密码</td>';
	}
	
 }
 echo '</tr>';
 //循环输出记录
 while ($row = $rs->fetchArray())
 { 
     echo '<tr>';
     for ($i = 1; $i < 3; $i++)
     {
		 if($row['username']!=$_SESSION[CAINAOKEUSERNAME])
		 {
         echo '<td>' . $row[$i] . '</td>' ; 
		 }
     }
	 if($row['username']!=$_SESSION[CAINAOKEUSERNAME])
	 {
     echo '<td><a href="deleteadmin.php?id='.$row["id"].'" onclick="return confirm(\'确定要删除?\')">删除</a></td></tr>';
	 }
     //print_r ($row);
 } 
}
else
{
$rs->finalize();
$db->close();
$rs = null;
$db = null;
die(ERR_SELECT_DB);
}
$rs->finalize();
$db->close();
$rs = null;
$db = null;
?>
</body>
</html>