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
var  va=document.getElementById("tablenum").value
var postStr="tablenum="+va;
xmlHttp.open("post", "tablechk.php");
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
						document.getElementById("tip1").innerHTML="抱歉！该桌位号已添加！！";
						next1="false";
					}
					else
					{
						document.getElementById("tip2").innerHTML="";
						document.getElementById("tip2").innerHTML="恭喜！该座位号可添加！！";
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
	
            
    function chkTableNUm(obj){
        if(obj.value.length<1){
            obj.style.backgroundColor="#efefef";
            //alert("请输入用户名!");
			document.getElementById("tip1").innerHTML="请输入座位号！";
            obj.focus();
        }else{
			document.getElementById("tip1").innerHTML="";
            //调用Ajax函数,向服务器端发送查询
            Ajax(obj.value);
        }            

    }
	function chkStatus(obj){
		var  va=document.getElementById("sta").value;
		if(va==0||va==1)
		{
			document.getElementById("sta1").innerHTML="";
			document.getElementById("sta2").innerHTML="正确！";
			next2="true"
		}
		else
		{
			document.getElementById("sta2").innerHTML="";
			document.getElementById("sta1").innerHTML="信息输入不正确，只能输入1或0！";
				next2="false";
		}
		
		
	}
	
	function submitto()
	{
		if(next1=="true")
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
        <h1>座号管理</h1>
        <form action="addtabledo.php" method="post" charset="UTF-8" id="frmlogin" name="frmlogin">
          <label>座位编号:&nbsp;&nbsp;&nbsp;
          <input name="tablenum" type="text" id="tablenum" size="22" maxlength="10" onBlur="chkTableNUm(this)" />
          </label><label id="tip1"></label><label style=" color:#090" id="tip2"></label>
                <p>
                
                <label>座位状态:&nbsp;&nbsp;&nbsp;
                  <input name="sta" type="text" id="sta" size="24"  value="1" onBlur="" />
                  </label>
                  </label><label id="sta1"></label><label style=" color:#090" id="sta2"></label>
                  
          </p>
          
                <p align="center">
                <label style=" color:#F00" name="a1" id="al"></label></br>
                 <input name="submit" type="submit" class="button" id="btn_login" style="width:60px;background:#efefef;height:25px;line-height:25px;font-size:12px;" value="添加"  onclick="return submitto()"/>
                  </p>
      </form>
        
</div>
</body>
</html> 