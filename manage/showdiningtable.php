<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
td{
	border:1px solid #333333;
}
</style>
</head>
<body>
<?php
// $db = new SQLite3 ("test.db3");
include('quote.php');
$db=openSQLite3Table_info();
$tablename="table_info";
 //查询所要的记录集
$txt=sprintf("select * from %s",$tablename);
$rs = $db->query($txt);
if(!$rs)
{
	die(ERR_SELECT_DB);
}
$colNum = $rs->numColumns();
  
 //循环输字段名
 echo '
 <em style="color:red;">(注：0代表桌位状态为闭台，1代表桌位状态为开台)</em>
 <table style="border:1px solid #333333;border-collapse:collapse;"><tr>';
 for ($i = 0; $i < $colNum; $i++)
 {
	 if($rs->columnName($i)=="tablenum")
	 {
		 echo '<td style="border:1px solid #333333;">桌号</td>';
	 }
	 else
	 {
		 if($rs->columnName($i)=="status")
		 {
			 echo '<td style="border:1px solid #333333;">餐桌状态</td>';
		 }
		 else
		 {
           //die(ERR_COLUMN_DB);
		 }
	 }
 }
 echo '<td>操作</td><td>操作</td></tr>';
 //循环输出记录
 while ($row = $rs->fetchArray())
 { 
     echo '<tr>';
     for ($i = 1; $i < $colNum; $i++)
     {
         echo '<td style="border:1px solid #333333;">' . $row[$i] . '</td>' ; 
     }
     echo "<td style=\"border:1px solid #333333;\"><a href=\"deletetable_info.php?id=$row[0]\" target=\"admidow\" onclick=\"return confirm('确定要删除?')\">删除</a></td>
	 <td style=\"border:1px solid #333333;\"><a href=\"updatetable_info.php?id=$row[0]&tablenum=$row[1]&status=$row[2]\" target=\"admidow\">修改</a></td></tr>";
 } 
 $rs->finalize();
 $db->close();
 $rs = null;
 $db = null;
?>
</body>
</html>