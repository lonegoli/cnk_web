<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="./css/main.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
//$db = new SQLite3("test.db3");
include('quote.php');
$db=openSQLite3();
$tablename=$_POST["tablename"];
if (!$db)
  {
  die('Could not connect ');
  }
//echo($_POST['file']);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    //echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
    //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists(PIC_BIG_URL.$_FILES["file"]["name"]))//检查路径是否存在
      {
      echo $_FILES["file"]["name"] . " 图片已存在. ";
      }
    else
      {
	  
	  $ext = end(explode('.',$_FILES['file']['name']));
 	  $fileRandName = time();
	  
      move_uploaded_file($_FILES["file"]["tmp_name"],
      PIC_BIG_URL.$fileRandName.".".$ext);
	  echo PIC_BIG_URL.$fileRandName.".".$ext;
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	  //$url="upload\\ftp_temp\\temp\\" . $fileRandName.".".$ext;
	  $url=$fileRandName.".".$ext;
	  //$sql=sprintf("insert into %s (name,price,description,pictureBUrl,pictureSUrl,status,backup) values ( \"%s\",%d,\"%s\",\"%s\",\"null\",%d,\"null\")",$tablename,$_POST['name'],intval($_POST['price']),$_POST['remark'],$url,intval($_POST['status']));
	  
	  $sql1=sprintf("insert into total_menu(name,price,description,pictureBUrl,pictureSUrl,status,usenum,backup) values ( \"%s\",%d,\"%s\",\"%s\",\"null\",%d,1,\"null\")",$_POST['name'],intval($_POST['price']),$_POST['remark'],$url,intval($_POST['status']));
	  
	  $txt=sprintf("select * from total_menu where name like '%s'",$_POST['name']);
      //$db->exec($sql);
	  $rs=$db->query($txt);
	  $row=$rs->fetchArray();
	  if(!$row)
	  {
		 $db->exec($sql1); 
		 $num=$db->lastInsertRowID ();
		 $sql=sprintf("insert into %s values ( %d,\"%s\",%d,\"%s\",\"%s\",\"null\",%d,\"null\")",$tablename,$num,$_POST['name'],intval($_POST['price']),$_POST['remark'],$url,intval($_POST['status']));
		// echo $sql;
		 $db->exec($sql);
	  }
	  else
	  {
		  $idnum=$row['id'];
		  $txt1=sprintf("update total_menu set usenum=usenum+1 where name=\"%s\"",$_POST['name']);
		  $db->exec($txt1);
		  
		  $sql=sprintf("insert into %s values ( %d,\"%s\",%d,\"%s\",\"%s\",\"null\",%d,\"null\")",$tablename,$idnum,$_POST['name'],intval($_POST['price']),$_POST['remark'],$url,intval($_POST['status']));
		  $db->exec($sql);
	  }
	  $db->exec("update version set version=version+1 where id=1");
	  echo "添加成功";
	  }
    }
  }
else
  {
  //echo "图片文件不合法";
  $url="null";
  $sql1=sprintf("insert into total_menu(name,price,description,pictureBUrl,pictureSUrl,status,usenum,backup) values ( \"%s\",%d,\"%s\",\"%s\",\"null\",%d,1,\"null\")",$_POST['name'],intval($_POST['price']),$_POST['remark'],$url,intval($_POST['status']));
	  
	  $txt=sprintf("select * from total_menu where name like '%s'",$_POST['name']);
      //$db->exec($sql);
	  $rs=$db->query($txt);
	  $row=$rs->fetchArray();
	  if(!$row)
	  {
		 $db->exec($sql1); 
		 $num=$db->lastInsertRowID ();
		 $sql=sprintf("insert into %s values ( %d,\"%s\",%d,\"%s\",\"%s\",\"null\",%d,\"null\")",$tablename,$num,$_POST['name'],intval($_POST['price']),$_POST['remark'],$url,intval($_POST['status']));
		// echo $sql;
		 $db->exec($sql);
	  }
	  else
	  {
		  $idnum=$row['id'];
		  $txt1=sprintf("update total_menu set usenum=usenum+1 where name=\"%s\"",$_POST['name']);
		  $db->exec($txt1);
		  
		  $sql=sprintf("insert into %s values ( %d,\"%s\",%d,\"%s\",\"%s\",\"null\",%d,\"null\")",$tablename,$idnum,$_POST['name'],intval($_POST['price']),$_POST['remark'],$url,intval($_POST['status']));
		  $db->exec($sql);
	  }
	  $db->exec("update version set version=version+1 where id=1");
	  echo "添加成功";
  }
$rs->finalize();
$db->close();
$rs=null;
$db=null;
?>
<a href=<?php echo "add_dele_dishes.php?tablename=$tablename"?> target='I1'>点击返回</a>
</body>
</html>