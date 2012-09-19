<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="expires" CONTENT="0">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<title>菜脑壳后台管理系统</title>


<script type="text/javascript">
var next1="false";

    function chkServiceName(obj){
        if(obj.value.length<1){
            obj.style.backgroundColor="#efefef";
            //alert("请输入用户名!");
			document.getElementById("tip1").innerHTML="请输入服务名！";
			next1="false";
            obj.focus();
        }else{
			document.getElementById("tip1").innerHTML="";
			document.getElementById("al").innerHTML="";
			next1="true";
        }            

    }
	
	
	function submitto()
	{
		if(next1=="true")
		{
			document.getElementById("al").innerHTML="";
			return true;
		}
		else
		{
			document.getElementById("al").innerHTML="";
			document.getElementById("al").innerHTML="您输入的信息不正确，请检查或重新输入！！";
			return false;
		}
	}
</script>


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
</head>
<body>
</br>
    <div id="login">
        <h1>添加服务</h1>
        <form action="addservicedo.php" method="post" charset="UTF-8" id="frmlogin" name="frmlogin">
          <label>服务名称:&nbsp;&nbsp;&nbsp;
          <input name="servicename" type="text" id="servicename" size="22" maxlength="10" style="width:120px; height:20px;" onBlur="chkServiceName(this)"/>
              </label><label id="tip1"></label> 
                <p align="center">
               <label style=" color:#F00" id="al"></label></br>
                 <input name="submit" type="submit" class="button" id="btn_login" style="width:60px;background:#efefef;height:25px;line-height:25px;font-size:12px;" value="添加" onclick="return submitto()"/>
                  <input name="submit2" type="reset" class="button" style="width:60px;background:#EFEFEF;height:25px;line-height:25px;font-size:12px;" value="重置" />
                </p>
      </form>
        
</div>
</body>
</html> 