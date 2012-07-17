<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
//$db = new SQLite3 ("test.db3");
include('quote.php');
$db=openSQLite3();
//$rs = $db->query('select * from sqlite_master ');
  $rs = $db->query('select * from table_show ');
  if(!$rs)
  {
	  die(ERR_SELECT_DB);
  }
 //获取列字段数量
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
             echo '<tr> <td>' .$row[$i].'</td><td><a href="deletetable.php?name='.$row['tablename'].' " target="showframe" onclick="return confirm(\'确定要删除?\')" >删除</a><span>&nbsp;&nbsp;&nbsp;</span><a href="showcontent.php?name='.$row['tablename'].' " target="showframe">查看</a></td></tr>'; 
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
