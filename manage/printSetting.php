<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../orderPad/setting/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../orderPad/setting/js/jquery.min.js"></script>
<script type="text/javascript" src="../orderPad/setting/js/json.js"></script>
<script type="text/javascript" src="../orderPad/setting/js/basic.js"></script>
<script type="text/javascript" src="../orderPad/setting/js/addPrinter.js"></script>
<script type="application/javascript">setPath("../orderPad/setting/")</script>
<title>打印设置--菜脑壳电子点菜系统</title>
</head>
<body style="position: relative;">
<?php
	require("../orderPad/setting/defines.php");
	require("../orderPad/macros.php");
?>
<div id="loginBoxMain">
	<div id="loginBoxStyle">
	</div>
	<div id="loginBoxOutline">
		<div id="loginBoxTitle" onmouseover="this.style.cursor='move'">
		<span>增加打印机</span>
		<span class="closeBtn"><a href="javascript:void(0);" onclick="javascript:hideLoginBox(this);" >[关闭]</a></span>
		</div>
		<div id="loginBoxContent" >
			<form action="#" method="post">
				<table class="posTable">
				<tr><td><span>打印机名:</span></td><td> <input id="nameID" type="text" name="printerName" ></td></tr>
	            <tr><td><span>IP地址:</span></td><td> <input id="ipID" type="text" name="printerIp"  ></td></tr>
	            <tr>
	            	<td><span>型号:</span></td>
	            	<td> <!--<input id="posModelID" type="text" name="posModel"  >-->
			            <select id="printerType">
			            	<?php
			            		echo "<option value=".PRINTER_TYPE_58.">58打印机</option>";
			            		echo "<option value=".PRINTER_TYPE_80.">80打印机</option>";
			            	?>
			            </select>
	            	</td>
	            </tr>
	            <tr>
	            	<td><span>用途:</span></td>
	            	<td> <!--<input id="posUseID" type="text" name="posUse" >-->
			            <select id="usefor">
			            	<?php
			            		echo "<option value=".PRINT_STATISTICS.">".PRINT_STATISTICS_NAME."</option>";
			            		echo "<option value=".PRINT_ORDER.">".PRINT_ORDER_NAME."</option>";
								echo "<option value=200>停用</option>";
			            	?>
			            </select>
	            	</td>
	            </tr>
	            <tr>
	            	<td><span>小票抬头:</span></td>
	            	<td> <!--<input id="posModelID" type="text" name="posModel"  >-->
			            <select id="receiptTitle">
				            <option value="存根联">存根联</option>
				            <option value="顾客联">顾客联</option>
				            <option value="厨房联">厨房联</option>
				            <option value="统计">统计</option>
			            </select>
	            	</td>
	            </tr>
				</table>
			</form>	
			<div align="center" id="submitPrinterSetting"></div>
			<div id="errMsg"></div>
		</div>	
	</div>
</div>

	<div class="header">
		<div class="logo">
		<h1>cainaoke</h1>
		<span>--科技让生活更简单！</span>
		</div>
		<div class="navbar">
			<ul>
			<li><a href="#" id="currentPage">打印机设置</a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="content_page clearfix">
			<div class="menu_bar">
				<table class="menu_bar" id="menu">
					<thead>
						<tr><th>打印机设置</th></tr>
					</thead>
					<tbody>
					<tr onclick="javascript:showBaseSetting(this);"><td>基本设置</td></tr>
					<tr onclick="javascript:showPrinterSetting(this);"><td>打印机管理</td></tr>
					<tr onclick="javascript:sendTestingRequest(this);"><td>打印测试页</td></tr>
					</tbody>
				</table>
			</div>
			<div class="shop_name">
				<div class="printer_info_title">
					<span>基本设置</span>
					<span class="setting_btn">
						<span class="save"><a ="javascript:void(0);" onclick="saveShopName(this);">[保存设置]</a></span>
					</span>
				</div>
				<div class="printer_setting">
					<div id="shopNameSetting"><span>店铺名称:</span> <span><input id="shopName" type="text" name="shopName"></span></div>
				</div>
			</div>
			<div class="printer_info">
				<div class="printer_info_title">
					<span>打印机设置</span>
					<span class="setting_btn">
						<span class="addPos"><a href="javascript:void(0);" onclick="javascript:addPrinter(this);" >[增加]</a></span>
						<span class="save"><a href="javascript:void(0);" onclick="savePrinterSetting(this);">[保存设置]</a></span>
					</span>
				</div>
				<div class="printer_setting">
					<table class="printer_info_table" id="tablePageId">
						<thead>
						<tr>
						<th>打印机名称</th>
						<th>IP地址</th>
						<th>打印机类型</th>
						<th>小票抬头</th>
						<th>打印内容</th>
						<th>操作</th>
						</tr>
						</thead>
						<tbody id="printList">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>