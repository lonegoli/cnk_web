<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="../orderPad/setting/css/style.css" rel="stylesheet" type="text/css" />
<link href="../orderPad/setting/css/fileuploader.css" rel="stylesheet" type="text/css">	
<script type="text/javascript" src="../orderPad/setting/js/jquery.min.js"></script>
<script type="text/javascript" src="../orderPad/setting/js/upgrade.js"></script>
<script type="text/javascript" src="../orderPad/setting/js/fileuploader.js"></script>
<script type="application/javascript">setPath("../orderPad/setting/")</script>
<script>        
        function createUploader(){            
            var uploader = new qq.FileUploader({
                element: document.getElementById('file-uploader-demo1'),
                action: 'upgrade_file.php',
                debug: true,
                extraDropzones: [qq.getByClass(document, 'qq-upload-extra-drop-area')[0]]
            });           
        }
        
        // in your app create uploader as soon as the DOM is ready
        // don't wait for the window to load  
        window.onload = createUploader;     
    </script>    
<?php
	require("../orderPad/setting/defines.php");
	require("../orderPad/macros.php");
?>
	<div class="header">
		<div class="logo">
		<h1>cainaoke</h1>
		<span>--科技让生活更简单！</span>
		</div>
		<div class="navbar">
			<ul>
			<li><a href="#" id="currentPage">升级</a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="content_page clearfix">
			<div class="menu_bar">
				<table class="menu_bar" id="menu">
					<thead>
						<tr><th>升级</th></tr>
					</thead>
					<tbody>
					<tr><td><span>
						<?php 
							function get(){
						 		$file =  "ver";
						 
								// 判断文件是否存在，不存在则创建
								if(file_exists($file)) {
									$ver = file_get_contents($file);
								} else {
									$ver = "没有版本信息";
								}
								return $ver;
							}
							
							$ver = get();
							echo "Ver:</br>$ver";
						?>
						</span></td></tr>
					</tbody>
				</table>
			</div>
			<div class="printer_info">
				<div class="printer_info_title">
					<span>升级</span>
					<span class="setting_btn">
						<span class="addPos"></span>
						<span class="save"></span>
					</span>
				</div>
				<div class="printer_setting">
					<div id="file-uploader-demo1">		
						<noscript>			
							<p>Please enable JavaScript to use file uploader.</p>
							<!-- or put a simple form for upload here -->
						</noscript>         
					</div>
				
					<div class="qq-upload-extra-drop-area">Drop files here too</div>
					<!-- <form action="javascript: uploadAndSubmit();"" method="post"
					enctype="multipart/form-data" id="uploadUpgradePack">
					<label for="file">升级包:</label>
					<input type="file" name="file" id="file" /> 
					<input type="submit" name="submit" value="上传" id="uploadBtn"/>
					</form>
					<div id="progress">
						<span id="progressbar"><span id="done"></span></span>
						<span id="percentage">0%</span>
					</div> -->
				</div>
			</div>
		</div>
	</div>

</body>
</html>