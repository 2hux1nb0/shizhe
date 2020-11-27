<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->

    <title>学分认证&转换</title>
    
	  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="expires" content="0">    
  <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
  <meta http-equiv="description" content="This is my page">
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/cct.css"/>
    <script type="text/javascript" src='/Public/Home/js/index.js'></script>
    <script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
  </head>
  
  <body>

  <!-- cct: credit certification&transfer -->
   <div class="top">
            <img style="" alt="学分认证及转换" src="/Public/Home/pic/lvli2.jpg" />
    </div>
   <center>
   	<div>
   	<p class="p2">请认真填写以下信息</p>
   		<form action="/index.php/Home/Index/cctAdd" method="post">
          <table style="width:600px; height: auto; border-collapse:separate; border-spacing:30px; margin-left: 110px;">
         
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">学生类型</td><td><input type="radio" checked="checked" name="stutype" value="0" />非在校生&nbsp;&nbsp;<input type="radio" name="stutype" value="1" />在校生</td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">性别</td><td><input type="radio"  checked="checked" name="sex" value="1" />男&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="sex" value="0" />女</td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">证件类型</td><td><select name="cardtype" class="select">
          							              <option value="1">中华人民共和国居民身份证</option>
                                      <option value="2">台湾往来大陆居民身份证</option>
                                      <option value="3">港澳往来大陆居民身份证</option>
                                      <option value="4">护照</option></select></td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">证件号码</td><td><input name="number" class="select" type="text" /></td>
          		</tr>
          		<tr style="width:600px; height: 30px;">
          			<td style="float: right;">证书图片</td><td>	 
        <img id="image" class="img1" src="/Public/Home/pic/uploadFile.png">
        <input type="file" name="images" accept="image/*" onchange="changImg(event)" ></td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">手机号</td><td><input name="phone" class="select" type="text" /></td>
          		</tr>
          		<tr style=" width:600px; height: 30px;">
          			<td style="float: right;">备注</td><td><textarea name="remark" class="beizhu1" rows="3" cols="26"></textarea></td>
          		</tr>
          		
          </table>
          <input class="submit" style="margin-left:-6px;" type="submit" value="提交" /><input class="reset" type="reset" value="取消" />
   		</form>
   	</div>
   </center>
  </body>
  <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
  　<script>  
        function changImg(e){ 
            for (var i = 0; i < e.target.files.length; i++) {
                var file = e.target.files.item(i);
                //验证是否为图片，不是就跳出循环
                if (!(/^image\/.*$/i.test(file.type))) {
                    alert("不是图片！")
                    continue; 
                }
                //实例化FileReader API  
                var freader = new FileReader();  
                freader.readAsDataURL(file);  
                freader.onload = function(e) {  
                    $("#image").attr("src",e.target.result);  //显示图片
                }  
            }  
        }  
     </script>
</html>