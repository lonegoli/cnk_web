<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../orderPad/setting/css/flavor.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../orderPad/setting/js/jquery.min.js"></script>
<script type="text/javascript" src="../orderPad/setting/js/json.js"></script>
<script type="text/javascript" src="../orderPad/setting/js/addFlavor.js"></script>
<script type="application/javascript">setPath("../orderPad/setting/")</script>
<title>口味设置--菜脑壳电子点菜系统</title>
</head>
<body style="position: relative;">

<div id="flavorBoxMain">
	<div id="flavorBoxStyle">
	</div>
	<div id="flavorBoxOutline">
		<div id="flavorBoxTitle" onmouseover="this.style.cursor='move'">
		<span>增加口味</span>
		<span class="closeBtn"><a href="javascript:void(0);" onclick="javascript:hideFlavorBox(this);" >[关闭]</a></span>
		</div>
		<div id="flavorBoxContent" >
			<form action="#" method="post">
				<table class="posTable">
				<tr><td><span>口味:</span></td><td> <input id="nameID" type="text" name="printerName" ></td></tr>
				</table>
			</form>	
			<div align="center" id="addFlavor"></div>
		</div>	
	</div>
</div>

	<div class="content">
		<div class="content_page clearfix">
			
			
			<div class="info">
				<div class="info_title">
					<span>基本设置</span>
					<span class="setting_btn">
						<span class="addPos"><a href="javascript:void(0);" onclick="javascript:addFlavor(this);" >[增加]</a></span>
						<span class="save"><a href="javascript:void(0);" onclick="saveSetting(this);">[保存设置]</a></span>
					</span>
				</div>
				<div class="setting">
					<table class="info_table" id="tablePageId">
						<thead>
						<tr>
						<th>口味</th>
						<th>操作</th>
						</tr>
						</thead>
						<tbody id="flavorList">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
</html>