<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
$id=$_GET['id'];
$name=$_GET['name'];
$price=$_GET['price'];
$status=$_GET['status'];
$tablename=$_GET['tablename'];
?>
<form action="modifyDishdo.php" method="post" enctype="multipart/form-data" >
<input type="hidden" name="id" id="id" value=<?php echo $id?> />
<input type="hidden" name="tablename" id="tablename" value=<?php echo $tablename?> />
<input type="hidden" name="id" id="id" value=<?php echo $id?> />
名称：<input type="text" name="name" id="name" value="<?php echo $name?>" /><br/>
价格：<input type="text" name="price" id="price" value="<?php echo $price?>" /><br/>
状态：<input type="text" name="status" id="status" value="<?php echo $status?>" /><br/>
<input type="submit"  value="修改"/>
</form>
</body>
</html>