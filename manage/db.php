<?php
// header("Content-type:text/html;charset=UTF-8");
include('quote.php');
$key=$_POST['key'];
$pan="true";
$db=openSQLite3();
if(!$db)
{
	die(ERR_CONNECT_DB);
}
$sql=sprintf("select * from administrator where username like \"%s\"",$key);
$rs=$db->query($sql);
$row=$rs->fetchArray();
if(!$row)
{
	die(ERR_SELECT_DB);
}
if($row)
{
	$pan="false";
}
else
{
	$pan="true";
	
}
/*$rs=$db->query('select * from administrator');
if(!$rs)
{ 
    die(ERR_SELECT_DB);
}
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
	*/
$rs->finalize();
$db->close();
$db=null;
echo $pan;	
?>
