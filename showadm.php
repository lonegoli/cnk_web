<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
 $db = new SQLite3 ("test.db3");
 $tablename="administrator";
 //查询所要的记录集
 $txt=sprintf("select * from %s",$tablename);
 $rs = $db->query($txt);
  
 //获取表字段数量
 $colNum = $rs->numColumns();
  
 //循环输字段名
 echo '<table><tr>';
 for ($i = 0; $i < $colNum; $i++)
 {
     echo '<td>' . $rs->columnName($i) . '</td>';
 }
 echo '</tr>';
 //循环输出记录
 while ($row = $rs->fetchArray())
 { 
     echo '<ttr>';
     for ($i = 0; $i < $colNum; $i++)
     {
         echo '<td>' . $row[$i] . '</td>' ; 
    }
     echo '</tr>';
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