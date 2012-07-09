<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>


<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wireless_db", $con);
mysql_query("set names UTF-8"); 
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");
$sql2="select * from usertbl where account='".$_POST['id']."'";
//echo $sql2;
$table=mysql_query($sql2);
$user=mysql_fetch_assoc($table);
if( $user!=null )
{ 
if($user['password']!=$_POST['password'])
{
echo "密码错误。"; echo "<a href='./index.html'>点击返回</a>";
}
else{echo "登陆成功。"; echo "<a href='./view.html'>点击进入</a>";}
}
else
{echo "用户不存在。"; 
echo "<a href='./index.html'>点击返回</a>"; }






mysql_close($con);
?>
</body>
</html>

