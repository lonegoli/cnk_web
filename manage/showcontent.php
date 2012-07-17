<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
 //$db = new SQLite3 ("test.db3");
 include('quote.php');
$db=openSQLite3();
$tablename=$_GET['name'];
$txt=sprintf("select * from %s",$tablename);
$rs = $db->query($txt);
if(!$rs)
{
	die(ERR_SELECT_DB);
}
  
 //获取表字段数量
$colNum = $rs->numColumns();
  //循环输字段名
 echo '<table><tr>';
 for ($i = 0; $i < $colNum; $i++)
 {
     echo '<td width="100px">' . $rs->columnName($i) . '</td>';
 }
 echo '</tr>';
 //循环输出记录
 while ($row = $rs->fetchArray())
 { 
     echo '<tr>';
     for ($i = 0; $i < $colNum; $i++)
     {
         echo '<td>' . $row[$i] . '</td>' ; 
    }
     echo '</tr>';
     //print_r ($row);
 } 
 $rs->finalize();
 $db->close();
 $rs = null;
 $db = null;
?>
<a href="showtable.php" target="showframe">返回</a>
</body>
</html>