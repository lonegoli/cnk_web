<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
 //$db = new SQLite3 ("test.db3");
include('quote.php');
$db=openSQLite3();
$tablename=$_GET["tablename"]; 
 //查询所要的记录集
$txt=sprintf("select * from %s",$tablename);
$rs = $db->query($txt);
if(!$rs)
{
	die(ERR_SELECT_DB);
}
 //获取表字段数量
$colNum = $rs->numColumns();
  
 //循环输字段名
 echo '<table style="border:1px solid #333333;border-collapse:collapse;"><tr>';
 echo '<td style="border:1px solid #333333;">操作</td>';
 for ($i = 0; $i < $colNum; $i++)
 {
     echo '<td style="border:1px solid #333333;">' . $rs->columnName($i).'</td>';
 }
 echo '<td>操作</td></tr>';
 //循环输出记录
 while ($row = $rs->fetchArray())
 { 
     for ($i = 0; $i < $colNum; $i++)
     {
		 if($i==0)
		 {
     echo "<tr><td style=\"border:1px solid #333333;\"><a href=\"deledishes.php?tablename=$tablename&id=$row[0]&name=$row[1]\" target=\"showframe\" onclick=\"return confirm('确定要删除?')\">删除</a></td>";
		 }
         echo '<td style="border:1px solid #333333;">' . $row[$i] . '</td>' ; 
     }
	 echo "<td style=\"border:1px solid #333333;\"><a href=\"modifyDish.php?tablename=$tablename&id=$row[0]&name=$row[1]&price=$row[2]&status=$row[6]\" target=\"showframe\">修改</a></td></tr>"; 
     
     //print_r ($row);
 } 
 //关闭记录集
 $rs->finalize();
 //关闭数据库
 $db->close();
 $rs = null;
 $db = null;
?>
</body>
</html>