<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
//$db = new SQLite3 ("test.db3");
include('quote.php');
$db=openSQLite3();
if(!$db)
{
	die(ERR_CONNECT_DB);
}
$rs = $db->query('select * from table_show');
if(!$rs)
{
	die(ERR_SELECT_DB);
}
$colNum = $rs->numColumns(); 
?>
 <table>
 <tr>
 <td>类别名（表名）</td>
 <td> 操作</td>
 </tr>
 <?php
 while ($row = $rs->fetchArray())
 { 
     for ($i = 0; $i < $colNum; $i++)
     {
         //判断name字段来输出表名
         if ($rs->columnName($i) == 'class')
         {
             echo '<tr> <td>' .$row[$i].'</td><td><a href="add_dele_dishes.php?tablename='.$row['tablename'].' " target="I1">点击进入</a><span>&nbsp;&nbsp;&nbsp;</span></td></tr>'; 
        }
     }
 } 
 ?>
 <?php
 $rs->finalize();
 $db->close(); 
 $rs = null;
 $db = null;
?>
</table>
</body>
</html>