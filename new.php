<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<meta name="MobileOptimized" content="320" />
<link rel="stylesheet" href="css/style.css" type="text/css">

<script type="text/javascript">
var down1="false";
var down2="false";
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
var  va=document.getElementById("name").value;
var  va1=document.getElementById("tablename").value;
var postStr="name="+va+"&tablename="+va1;

xmlHttp.open("post", "dishchk.php");
xmlHttp.setRequestHeader("cache-control","no-cache"); 
xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
xmlHttp.send(postStr);
//xmlhttp.open("GET","db.php?username="+document.getElementById("username").value,true);
 //       xmlhttp.send(null);
xmlHttp.onreadystatechange=function()
{
if (4==xmlHttp.readyState){
                if (200==xmlHttp.status){
                    //alert(xmlHttp.responseText);
					if(xmlHttp.responseText=="false")
					{
						document.getElementById("dishid1").innerHTML="";
						document.getElementById("dishid1").innerHTML="警告！该菜品名已添加！！";
						down1="false";
					}
					else
					{
						//document.getElementById("tip2").innerHTML="";
						document.getElementById("dishid1").innerHTML="该菜品可以添加！！";
						down1="true";
					}
					//document.getElementById("tip").innerHTML="grgeuurg";
					
					//document.write(xmlhttp.responseText);    
                }else{
                    alert("发生错误!");
                }
            }
}
}
	
            
    function chkDishName(obj){
        if(obj.value.length<1){
            obj.style.backgroundColor="#efefef";
            //alert("请输入用户名!");
			document.getElementById("dishid1").innerHTML="请输入菜品名！";
            obj.focus();
        }else{
			document.getElementById("dishid1").innerHTML="";
            //调用Ajax函数,向服务器端发送查询
            Ajax(obj.value);
        }            

    }
	function chkDishPrice(obj){
		var  va=document.getElementById("price").value;
		if(parseFloat(va))
		{
			down2="true";
		}
		else
		{
			document.getElementById("priceid1").innerHTML="输入的价格不符合规范";
			down2="false";
		}
	
		
		
	}
	
	function chkdish()
	{
		if(down1=="true"&&down2=="true")
		{  
		
			document.getElementById("a1").innerHTML="";
			
			return true;
		}
		else
		{
			
			document.getElementById("a1").innerHTML="";
			document.getElementById("a1").innerHTML="您输入的信息不正确，请检查或重新输入！！";
			return false;
			
		}
	}
</script>

<SCRIPT language=JavaScript> 
function length(){
messageCount.innerText = document.addform.remark.value.length;//如果文本框中有字符加载页面就计算其个数
}
</SCRIPT>

<SCRIPT language=JavaScript>
   function textLimitCheck(thisArea, messageCount,maxLength){//根据onkeyup事件计算文本框中的字符个数，限制在500以内
     if (thisArea.value.length > maxLength){
       alert(maxLength + ' 个字限制. \r超出的将自动去除.');
       thisArea.value = thisArea.value.substring(0, maxLength);
       thisArea.focus();
     }
     /*回写span的值，当前填写文字的数量*/
     messageCount.innerText = thisArea.value.length;
   }
</SCRIPT>


</head>
<body onLoad="length()">

<?php
$tablename=$_GET['tablename'];
?>
<br/>
<h3 class="title">&nbsp;菜脑壳添加菜品</h3>
<form class="td2" action="adddishes.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="tablename" id="tablename" value=<?php echo $tablename?> />
名称: <input type="text" name="name" id="name" onblur="chkDishName(this)" /><label style="color:#F00" id="dishid1"></label>
<br />
价格: <input type="text" name="price" id="price" onblur="chkDishPrice(this)"/><label style="color:#F00" id="priceid1"></label>
<br />
状态: <input type="text" name="status" id="status" value="1"/>
<br />
<label for="file">图片:</label>
<input type="file" name="file" id="file" /> 
<br />
<br/>
描述: <textarea name="remark" id="remark" rows="5" cols="20" onKeyUp="textLimitCheck(this, messageCount1,36)"></textarea>
<BR>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;限36个字符已输入<FONT color=#cc0000><SPAN id=messageCount1>0</SPAN></FONT> 个字</span>
<br/>
<label style="color:#F00" name="a1" id="a1"></label>
<input type="submit" name="submit" id="submit" onClick="return chkdish(this)"  value="添加"/>
</form>
<a href="<?php echo "showdishes.php?tablename=$tablename" ?>" target="showframe">刷新</a>
</body>
</html>