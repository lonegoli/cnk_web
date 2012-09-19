<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
td{
	border:1px solid #000;
	padding:0 20px 0 0;
}
table{
	border-collapse:collapse;
}
</style>
</head>
<body>
<?php
//$db = new SQLite3 ("test.db3");
include('quote.php');
$db=openSQLite3();
$rs = $db->query('select * from serviceList');
if(!$rs)
{
	die(ERR_SELECT_DB);
}

 //获取列字段数量
 $colNum = $rs->numColumns(); 
?>
 <table>
 <tr>
 <td>服务名</td>
  <td> 操作</td>
 </tr>
 <?php
 while ($row = $rs->fetchArray())
 { 
        
 echo '<tr> <td>'.$row['serviceName'].'</td><td><a href="deleteService.php?id='.$row['id'].' " target="showService" onclick="return confirm(\'确定要删除?\')">删除</a></td></tr>';       
     
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