<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="">
    
    <title>教育银行</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
    <script type="text/javascript" src='/Public/Home/js/index.js'></script>
    <script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/edubank.css">
  </head>
  
  <body>
 <!-- 
*   █████▒█    ██  ▄████▄   ██ ▄█▀       ██████╗ ██╗   ██╗ ██████╗
* ▓██   ▒ ██  ▓██▒▒██▀ ▀█   ██▄█▒        ██╔══██╗██║   ██║██╔════╝
* ▒████ ░▓██  ▒██░▒▓█    ▄ ▓███▄░        ██████╔╝██║   ██║██║  ███╗
* ░▓█▒  ░▓▓█  ░██░▒▓▓▄ ▄██▒▓██ █▄        ██╔══██╗██║   ██║██║   ██║
* ░▒█░   ▒▒█████▓ ▒ ▓███▀ ░▒██▒ █▄       ██████╔╝╚██████╔╝╚██████╔╝
*  ▒ ░   ░▒▓▒ ▒ ▒ ░ ░▒ ▒  ░▒ ▒▒ ▓▒       ╚═════╝  ╚═════╝  ╚═════╝
*  ░     ░░▒░ ░ ░   ░  ▒   ░ ░▒ ▒░
*  ░ ░    ░░░ ░ ░ ░        ░ ░░ ░
*           ░     ░ ░      ░  ░
 -->

  <br>
    <div class="div0">
	        <img alt="edubank.png" src="/Public/Home/pic/edubank.png">
	        <div class="div1">
	        	<img class="touxiang" alt="用户头像" src="<?php echo ($model["photo"]); ?>">
	        	<span style="font-size: 18px;vertical-align:middle;"><?php echo ($model["username"]); ?></span>
	        </div>
	</div>
	<br>
	<br>
	<div class="div2">
		<ul class="ul">
			<li class="li"><input class="button0" style="height: 65px;" type="button" value="返回首页" onclick="back()" /></li>
			<li class="li" style="margin-top: 9px;"><input class="button0" type="button" value="个人终身教育简历" onclick="resume()" /></li>
			<li class="li" style="margin-top: 5px;"><input class="button0" type="button" value="学分认证&转换" onclick="cct()" /></li>
			<li class="li" style="margin-top: 5px;"><input class="button0" type="button" value="实名认证" onclick="realname()" /></li>
			
		</ul>
		<div id="showboard" class="div3"></div>
	</div>
	<script type="text/javascript">
          function back(){
          window.location.href='index.html'; 
                         }
	</script>
  </body>
</html>