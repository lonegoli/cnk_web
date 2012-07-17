<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>菜脑壳无线点餐后台管理系统</title>
<script Language="JavaScript" src="js/checknum.js"> 
</script>
</head>
<body bgcolor="#66FF66">
<?php
$id=$_GET["id"];
$tablenum=$_GET["tablenum"];
$status=$_GET["status"];
?>
<br/>
<form action="updatetabledo.php" method="post" enctype="multipart/form-data" >
<input type="hidden" name="id" id="id" value=<?php echo $id?> />
<label>桌位编号：<input type="text" name="tablenum" id="tablenum" value="<?php echo $tablenum?>" onBlur="chkTableNUm(this)"/>
 </label><label style="color:#F00" id="tip1"></label><label style=" color:#33C" id="tip2"></label>
 <br/><br/>
<label>桌位状态：
         <select name="status" id="statis" size="1">
          <option value='0' selected="true">闭</option>
         <option value='1' >开</option>
        
         </select>
         </label>
         <br/>
         <br/>
         <label style=" color:#F00" name="a1" id="al"></label></br>
<input name="submit" type="submit" class="button" id="btn_login" style="width:60px;background:#efefef;height:25px;line-height:25px;font-size:12px;" value="修改"  onclick="return submitto()"/>
</form>
</body>
</html>