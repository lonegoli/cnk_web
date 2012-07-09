<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
  // header("Content-type:text/html;charset=UTF-8");
$key=$_POST['key'];
$pan="true";
$db=new SQLite3("test.db3");
    /*数据库连接*/
	//$key=$_GET["username"];
	$rs=$db->query('select * from administrator');
	$colNum=$rs->numColumns();
	while($row=$rs->fetchArray())
	{
		for($i=0;$i<$colNum;$i++)
		{
			if($rs->columnName($i)=='username')
			{
				if($row[$i]==$key)
				{
					$pan="false";
					break;
				}
			}
		}
	}

		echo $pan;
	
?>
</body>
</html>