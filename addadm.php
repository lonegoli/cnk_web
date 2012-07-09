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
<script type="text/javascript">
var next1="false";
var next2="false";
function createXMLHttpRequest(){
if(window.XMLHttpRequest){//非IE浏览器
			xmlHttp=new XMLHttpRequest();
		}
		else if(window.ActiveXObject){
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}

 }
 
function Ajax(data){
createXMLHttpRequest();
var  va=document.getElementById("username").value
var postStr="key="+va;
xmlHttp.open("post", "db.php");
xmlHttp.setRequestHeader("cache-control","no-cache"); 
xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
xmlHttp.send(postStr);
//xmlhttp.open("GET","db.php?username="+document.getElementById("username").value,true);
 //       xmlhttp.send(null);
xmlHttp.onreadystatechange=function()
{
if (4==xmlHttp.readyState){
                if (200==xmlHttp.status){
                    
					if(xmlHttp.responseText=="false")
					{
						document.getElementById("tip2").innerHTML="";
						document.getElementById("tip1").innerHTML="";
						document.getElementById("tip1").innerHTML="抱歉！该用户名不可用！！";
						next1="false";
					}
					else
					{
						document.getElementById("tip2").innerHTML="";
						document.getElementById("tip1").innerHTML="";
						document.getElementById("tip2").innerHTML="恭喜！该用户名可用！！";
						next1="true";
					}
					//document.getElementById("tip").innerHTML="grgeuurg";
					
					//document.write(xmlhttp.responseText);    
                }else{
                    alert("发生错误!");
                }
            }
}
}
	
            
    function chkUserName(obj){
        if(obj.value.length<1){
            obj.style.backgroundColor="#efefef";
            //alert("请输入用户名!");
			document.getElementById("tip1").innerHTML="请输入用户名！";
            obj.focus();
        }else{
			document.getElementById("tip1").innerHTML="";
            //调用Ajax函数,向服务器端发送查询
            Ajax(obj.value);
        }            

    }
	function chkPassword(obj){
		var  va=document.getElementById("pwd").value;
		var  va1=document.getElementById("pwd1").value;
		if(va==va1)
		{
			document.getElementById("ps1").innerHTML="";
			document.getElementById("ps2").innerHTML="正确！";
			next2="true"
		}
		else
		{
			document.getElementById("ps2").innerHTML="";
			document.getElementById("ps1").innerHTML="两次密码不一致,请重新输入！";
				next1="false";
		}
		
		
	}
	
	function submitto()
	{
		if(next1=="true"&&next2=="true")
		{
			document.getElementById("al").innerHTML="";
			//此处添加对用户添加的操作
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
</head>

<body>
    <div id="login">
        <h1>菜脑壳后台管理系统</h1>
        <form action="loginuser.php" method="post" charset="UTF-8" id="frmlogin" name="frmlogin">
          <label>用户名:&nbsp;&nbsp;&nbsp;
          <input name="username" type="text" id="username" size="22" maxlength="10" onblur="chkUserName(this)" />
          </label><label id="tip1"></label><label style=" color:#090" id="tip2"></label>
                <p>
                  <label>密　码:&nbsp;&nbsp;&nbsp;
                  <input name="pwd" type="password" id="pwd" size="24" maxlength="16" />
                  </label>
          </p>
          <p>
                  <label>确认密码:
                  <input name="pwd1" type="password" id="pwd1" size="24" maxlength="16" onblur="chkPassword(this)" />
                  </label><label id="ps1"></label><label style=" color:#090" id="ps2"></label>
          </p>
          <p>
          <label>权限设置:
          <select name="permission" id="permission" size="1">
          <option value='0' selected="true">管理者</option>
          <option value='1'>普通员工</option>
          </select>
          </label>
          </p>
                <p align="center">
                <label style=" color:#F00" id="al"></label></br>
                 <input name="submit" type="submit" class="button" id="btn_login" style="width:60px;background:#efefef;height:25px;line-height:25px;font-size:12px;" value="注册"  onclick="return submitto()"/>
                  <input name="submit2" type="reset" class="button" style="width:60px;background:#EFEFEF;height:25px;line-height:25px;font-size:12px;" value="重置" />
                </p>
      </form>
        
</div>
</body>
</html> 