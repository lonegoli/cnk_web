<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="expires" CONTENT="0">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<title>菜脑壳后台管理系统</title>
<style type="text/css">
body{
    text-align:center;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 12px;
    background:#EFEFEF;
}
#login {
    margin-top:1%;
    margin-right:auto;
    margin-left:auto;
    line-height: 20px;
    color: #000000;
    width:500px;
    border:1px solid #336699;
    background:#FFF;
	height:auto;
}
#frmlogin{
    text-align:left;
    margin-left:8px;
}
h1{
    margin:0px 0px 10px 0px;
    padding:0px;
    width:100%;
    height:30px;
    line-height:30px;
    color:#FFF;
    background:#336699;
    font-size:18px;
    text-align:left;
    text-indent:10px;
    font-weight:normal;
    font-family:Arial, Helvetica, sans-serif;
}
input{
    border:1px solid #336699;
    height:14px;
    line-height:14px;
    width:120px;
}
.button{
    padding-right:10px;
    padding-left:10px;
    height:22px;
    line-height:22px;
    background:#fbfbfb;
    color:#000;
    text-align:center;
    border-right:2px solid #999;
    border-left:2px solid #999;
    border-top:1px solid #999;
    border-bottom:1px solid #999;
    margin-right:5px;
    margin-left:5px;
}
label{
    font-weight:bold;
    color:#336699;
}
#ps1,#tip1{
    color:#ff9900;
}

</style>
<script Language="JavaScript" src="js/checknum.js"> 
</script>
</head>
</br>
<body>
    <div id="login">
        <h1>桌号创建</h1>
        <form action="addtabledo.php" method="post" charset="UTF-8" id="frmlogin" name="frmlogin">
          <label>桌位编号:&nbsp;&nbsp;&nbsp;
          <input name="tablenum" type="text" id="tablenum" size="22" maxlength="10" style="width:100px; height:20px;" onBlur="chkTableNUm(this)" />
          </label><label id="tip1"></label><label style=" color:#090" id="tip2"></label>
           <!--     <p>
           <label>桌位状态:&nbsp;&nbsp;&nbsp;
          <select name="sta" id="sta" size="1">
          <option value='0' selected="true">闭</option>
          <option value='1'>开</option>
          </select>
          </label>
                      
          </p>
          
            -->
                <p align="center">
                <label style=" color:#F00" name="a1" id="al"></label></br>
                 <input name="submit" type="submit" class="button" id="btn_login" style="width:60px;background:#efefef;height:25px;line-height:25px;font-size:12px;" value="添加"  onclick="return submitto()"/>
                  </p>
      </form>
        
</div>
</body>
</html> 