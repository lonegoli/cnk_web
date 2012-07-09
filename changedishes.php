<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$db = new SQLite3 ("test.db3");
//$rs = $db->query('select * from sqlite_master');
$rs = $db->query('select * from table_show');  
 //获取列字段数量
 $colNum = $rs->numColumns(); 
 
 /* fetchArray方法是把记录集转化为数组，
     它有三个参数：
     SQLITE3_ASSOC  关联索引
     SQLITE3_NUM      数值索引
     SQLITE3_BOTH    上面两者同用
 其实我觉得用哪个都无所谓，它们都即关联又是数值索引，照样能取到值
 */
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
  
 //关闭数据库
 $db->close();
  
 $rs = null;
 $db = null;


?>
</table>
</body>
</html>