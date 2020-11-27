<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title>我的订阅</title>
	<link href="/Public/Home/css/youku.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/chuda_qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/lsidetool.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/yk.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/grid_pc.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/subscription_feed.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/yk_mobile.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/toolbar_extend.css" type="text/css" rel="stylesheet">
<link rel="Shortcut Icon" href="/Public/Home/img/favicon.ico">
<script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='/Public/Home/js/common.js'></script>
<script type="text/javascript" src='/Public/Home/js/qwindow.js'></script>

</head>
<body class="yk-w1190 body-offset-w1190">
	<div class='window'>
		<div class='screen'>
			<!-- 头部 -->
			<div class="yk-header yk-header-fixed" id="qheader">
	<div class="yk-header-container" id="qheader_box">
		<div class="yk-box">

			<div class="yk-logo">
				<a href="<?php echo U('Home/Index/index');?>" title="Shizhe 师者" attr="g_6"><img style="margin-top: 0px; margin-left: -25px" src="/Public/Home/pic/shizhe.png" alt="Shizhe 师者" attr="1"></a>
			</div>
			<div class="yk-so" style="margin-left: -200px;">
				<div class="yk-so-box">
					<form id="qheader_search" action="<?php echo U('Home/Index/search_link');?>" method="get" target="_blank" onsubmit="">
						<input name="q" id="headq" autocomplete="off" type="text">
                        <span href="#" target="_blank" class="rankq"><i></i></span>
						<button type="submit"><em>搜索</em></button>

					</form>
				</div>
			</div>

			<div class="yk-ucenter">
				<div class="yk-userlog" id="qheader_userlog">
                    <div class="yk-userlog-before" id="qheader_logbefore" style="">
                    	<div class="entry">
                            <a id="qheader_login" onclick="javascript:showLoginbox();return false;" href="#"><i class="ico-user-l2"></i>登录</a><span class="splite">|</span><a href="<?php echo U('Home/Registered/index');?>" target="_blank">注册</a>
                        </div>
                    </div>
                    <div id="qheader_logafter" style="" class="yk-userlog-after">
                                        	<div id="qheader_username" fire="hover" class="dropdown ">
                    							<div id="qheader_username_show" class="handle"><div class="yk-userlog-after-meta"><img src="/Public/Admin/UserPhoto/photo.jpg" class="yk-userlog-after-avatar"><span id="qheaer_user_name" title="admin" class="yk-userlog-after-name">加载中...</span><b class="caret yk-userlog-after-caret"></b></div></div>
                    							<div id="qheader_username_panel" class="panel"><div class="cd-hpanel-ico ico-arrow-top-grey"></div><div class="cd-hpanel-user-info"><div class="cd-hpanel-user-avatar"><a target="_blank" href="#"><img src="/Public/Admin/UserPhoto/photo.jpg"></a></div><div class="cd-hpanel-user-profile"><div class="cd-hpanel-user-name"><a id='usernamelink' title="admin" target="_blank" href="#">admin</a></div><div class="cd-hpanel-user-credit"></div><div class="cd-hpanel-user-vip"></div><div class="cd-hpanel-user-extend"><a target="_self" href="#" onclick="javascript:linktoConfig();">设置</a><span class="cd-hpanel-split">|</span><a href="#" onclick="javascript:logout();">登出</a></div></div><div class="cd-hpanel-code"><div class="ykcode-cover"><img src="" class="ykcode-cover-img"></div></div></div><div class="panel-user-grade"><div class="panel-user-grade-title"><span>我的等级</span></div><div class="panel-user-grade-info"><span title="累计活跃时长：0小时"><i class="panel-user-grade-icon panel-grade-icon-clock"></i><span>0</span><em>小时</em></span><span>（未开启加速）</span></div><div class="panel-user-grade-left"></div><div class="panel-user-grade-center"></div><div class="panel-user-grade-right"></div><div class="panel-user-grade-time"><div class="panel-user-grade-left"></div><div id="rank_todayDuraLine" class="panel-user-grade-center" style="width: 22px;"></div><div class="panel-user-grade-right"></div></div></div><div class="cd-hpanel-u-task"><div class="u-task-title"><span>我获得的证书</span></div><div class="u-task-list" id="tasklistsidetool"><div class="u-task-meta u-task-meta-null"><p class="u-task-e-null-status">更多美好 敬请期待...</p></div></div></div><div class="cd-hpanel-userservices"><ul class="cd-userservices-list cd-userservices-list-topborder"><li class="u-service-chanel"><a id='myhome' target="_blank" href="#" onclick="javascript:linktoConfig();"><i class="cd-hpanel-ico ico-myspace"></i>我的频道</a></li><li class="u-service-subscribe"><a target="_blank" href="#" onclick="javascript:linktocollect();"><i class="cd-hpanel-ico ico-subscribe"></i>我的收藏</a></li></ul></div></div>
                    						<iframe width="110px" height="60px" frameborder="0" class="mask" scrolling="0"></iframe></div>
                                        </div>
				</div>



                <div class="yk-upload">
                    <div class="dropdown" id="qheader_upload">
                        <div class="handle"><a href="<?php echo U('Home/Upload/index');?>" target="_blank"><i class="ico-upload-l2"></i><span>上传</span>
						
                        </a></div>

                    </div>
                </div>
			</div>

			<div class="yk-menus-wrap" style="margin-left: 44px;">
	            <ul class="yk-menus">
	                <li class="yk-menus-item yk-menus-item-home"><a href="<?php echo U('Home/Index/index');?>" title="返回首页">首页</a></li>
	                <!-- 此处注释勿删 -->
	                <!-- <li class="yk-menus-item yk-menus-item-channel">
	                    <div class="yk-guide">
	                        <div class="dropdown " id="qheader_channel">
	                            	<div class="handle"><a href="javascript:void(0);"><i class="ico-channels-l2"></i><span>频道</span></a></div>
	                            	<div class="panel">
                                    	<div class="yk-hpanel-ico ico-arrow-top-white"></div>
										<div class="yk-guide-entry yk-channels-1">
											<dl class="yk-guide-item">
												<dd><a href="<?php echo U('Home/Wenxue/index');?>">文学</a></dd>
												<dd><a href="<?php echo U('Home/Shuxue/index');?>">数学</a></dd>
												<dd><a href="<?php echo U('Home/Zhexue/index');?>">哲学</a></dd>
												<dd><a href="<?php echo U('Home/Yuyan/index');?>">语言</a></dd>
										        <dd><a href="<?php echo U('Home/Shehui/index');?>">社会</a></dd>
										        <dd><a href="<?php echo U('Home/Lishi/index');?>">历史</a></dd>
										        <dd><a href="<?php echo U('Home/Shangye/index');?>">商业</a></dd>
										        <dd><a href="<?php echo U('Home/Chuanmei/index');?>">传媒</a></dd>
										        <dd><a href="<?php echo U('Home/Yixue/index');?>">医学健康</a></dd>
										        <dd><a href="<?php echo U('Home/Meishu/index');?>">美术建筑</a></dd>
										        <dd><a href="<?php echo U('Home/Gongcheng/index');?>">工程技术</a></dd>
										        <dd><a href="<?php echo U('Home/Falv/index');?>">法律政治</a></dd>
										        <dd><a href="<?php echo U('Home/Zongjiao/index');?>">宗教学</a></dd>
										        <dd><a href="<?php echo U('Home/Xinlixue/index');?>">心理学</a></dd>
										        <dd><a href="<?php echo U('Home/Jiaoyu/index');?>">教育学习</a></dd>
										        <dd><a href="<?php echo U('Home/Xuexiao/index');?>">学校机构</a></dd>
										        <dd><a href="<?php echo U('Home/Chuyi/index');?>">初一</a></dd>
												<dd><a href="<?php echo U('Home/Chuer/index');?>">初二</a></dd>
												<dd><a href="<?php echo U('Home/Chusan/index');?>">初三</a></dd>
												<dd><a href="<?php echo U('Home/Gaoyi/index');?>">高一</a></dd>
										        <dd><a href="<?php echo U('Home/Gaoer/index');?>">高二</a></dd>
										        <dd><a href="<?php echo U('Home/Gaosan/index');?>">高三</a></dd>
										        <dd><a href="<?php echo U('Home/Daxue/index');?>">大学课程</a></dd>
										        <dd><a href="<?php echo U('Home/Search/index');?>">全部</a></dd>
											</dl>

										</div>
		                            </div>
	                        </div>
	                    </div>
	                </li> -->
					<li class="yk-menus-item yk-menus-item-channe2" style="margin-left: 25px"><a href="<?php echo U('Home/Index/edu_bank');?>" title="教育银行">教育银行</a></li>
					<!-- <li class="yk-menus-item yk-menus-item-channe2" style="margin-left: 25px"><a href="<?php echo U('Home/Index/edu_bank');?>" title="教辅文库">教辅文库</a></li> -->
					
	            </ul>
			</div>
		</div>
	</div><!-- yk-header end -->
</div>

<script>
$('#qheader_channel').toggle(function(){
	$(this).addClass('dropdown-open');
},function(){
	$(this).removeClass('dropdown-open');
});
$('#qheader_username').toggle(function(){
	$(this).addClass('dropdown-open');
},function(){
	$(this).removeClass('dropdown-open');
});
function showLoginbox(){
	var loginbox = '<div id="qwindow_mask" class="qwindow_mask" style="background-color: rgb(84, 84, 84); opacity: 0.5; z-index: 30000; width: 1903px; height: 2335px; display: block;"></div><div id="qwindow" class="qwindow" style="top: 68px; left: 670px; z-index: 30000; opacity: 1; visibility: visible;"><div class="winbox"><div class="winhead" style="width: 540px;"><div class="wintitle"></div><div id="winclose" class="winclose" style="display: block;" onclick="javascript:winclose();"></div></div><div class="winbody" style="width: 540px; height: 473px; overflow: hidden;"><iframe frameborder="0" scrolling="no" src="<?php echo ($servername); ?>/index.php/Home/Login/login.html"></iframe></div></div><div class="winbg"></div></div>';
	$('body').append(loginbox);
	var sT = $(window).scrollTop();
	sT = sT + 68 +'px;';
	winwidth = window.innerWidth;
	sL = winwidth/2-540/2 + 'px;';
	$('#qwindow').attr('style','top:'+sT+'left:'+sL+' z-index: 30000; opacity: 1; visibility: visible;');
	return false;
}

function winclose(){
	$('#qwindow_mask').remove();
	$('#qwindow').remove();
}

function islogin(){
	console.log(document.cookie);
	var username = '';
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if(c.indexOf('ykusername=') == 0){
			username = c.split("=")[1];
			if(username != '') break;
		}
	}

	return (username == '') ? false : true;
}
var linktohome;
if(islogin())
{
	$('#qheader_logbefore').attr('style','display:none');
	$('#qheader_logafter').attr('style','display:block');
	$.get('<?php echo U("Home/User/get_uinfo");?>',{},function(data){
		$('#qheaer_user_name').html(data.username);
		$('.yk-userlog-after-avatar').attr('src',data.photo);
		$('.cd-hpanel-user-avatar').find('img').attr('src',data.photo);
		$('.cd-hpanel-user-name').find('a').html(data.username);
		$('#usernamelink').attr('onclick','linktohome();');
		$('#myhome').attr('onclick','linktohome();');
		linktohome = function(){
			window.location.href="<?php echo ($servername); echo U('Home/Space/index');?>?id="+data.id;
		}
	},'json');
}else{
	$('#qheader_logbefore').attr('style','display:block');
	$('#qheader_logafter').attr('style','display:none');
}
function linktoConfig(){
	window.location.href="<?php echo ($servername); echo U('Home/setting/index');?>";
}
function linktocollect(){
	window.location.href="<?php echo ($servername); echo U('Home/Collect/index');?>";
}

function logout(){
	$.get('<?php echo U("Home/Login/logout");?>',{},function(){
		window.location.reload();
	});
}
</script>






			<!-- 头部结束 -->


			<!-- 工具条 -->
			<div style="display: block; left: 0px;" class="yk-sidebar yk-sidebar-position" id="ykSideBar">
    <div class="yk-side-menu">
	    <ul class="ykSideMenu">
	        <li><a target="_self" href="<?php echo U('Home/Search/index');?>"><div class="icon-1"></div><span>师者精选</span></a></li>
	        <!-- <li><a target="_self" href="<?php echo U('Home/Search/index');?>"><div class="icon-2"></div><span>猜你喜欢</span></a></li> -->
	        <li><a onclidk="" target="_self" href="<?php echo U('Home/Subscribe/index');?>"><div class="icon-3"></div><span>我的订阅</span></a></li>
			<li><a target="_self" href="<?php echo U('Home/Record/index');?>"><div class="icon-4"></div><span>观看记录</span></a></li>
			<li><a target="_self" href="<?php echo U('Home/Index/edu_bank');?>"><div style="margin-left: -50px; margin-top: -10px;"><img src="/Public/Home/pic/icon-5.jpg"></div><span>教育银行</span></a></li>
	    </ul>
    </div>
    <div class="split"></div>

</div>


			<!-- 工具条结束 -->

			<!-- 主体 -->
			<div class="yk-toolbar-con" id="yk-toolbar-con" style="overflow-y: hidden;">
			<div id="yk-toolbar-con-list" class="yk-toolbar-con-list">
    <div uid="UNDI0NjI3OTk2" class="header-nav not-rec">
    
        <span class="tit">我的订阅</span>
    </div>
    <div id="scroll_show_left" style="overflow: hidden;;" tabindex="0">
        <section class="sec-container">
            <div id="yk-toolbar-con-list-div">
                <ul id="scroll_left" class="news-list">
                                    <!-- 上传更新用户信息 -->
                    

                    <?php if(is_array($suser)): foreach($suser as $key=>$vo): ?><!-- 订阅推送列表 -->
                    <li uid="<?php echo ($vo['id']); ?>"  class="">
                        <div class="list-left">
                            <div class="img"><img alt="独孤九剑-郝浩涵" src="<?php echo ($vo['photo']); ?>"></div>
                            <div style="display:none" class="num-dot"></div>
                        </div>
                        <div data-stat-role="ck" class="list-right">
                            <div class="tit">
                                <span class="f_r">8小时前</span>
                                <span><?php echo ($vo['username']); ?></span>
                            </div>
                        </div>
                    </li><?php endforeach; endif; ?>
                </ul>
            </div>
            <div style="display: none;" id="loadsubscribe_left" class="t_c">
                <img src="">
            </div>
            <div style="display:none" id="loadsubscribe_left_wenzi" class="t_c">
                师者走神了，请稍候再试...
            </div>
        </section>
    </div>      
<div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 9px; z-index: auto; background: rgba(0, 0, 0, 0.2) none repeat scroll 0% 0%; cursor: default; position: absolute; top: 33px; left: 301px; height: 512px; display: block; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 7px; height: 98px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 7px;" class="nicescroll-cursors"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 9px; z-index: auto; background: rgba(0, 0, 0, 0.2) none repeat scroll 0% 0%; top: 536px; left: 0px; position: absolute; cursor: default; display: none; width: 301px; opacity: 0;"><div style="position: absolute; top: 0px; height: 7px; width: 310px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 7px;" class="nicescroll-cursors"></div></div></div>

			<div style="overflow: hidden;" id="yk-toolbar-con-feed" class="yk-toolbar-con-feed" tabindex="1">

</div>
			<script type="text/javascript">
    $('#scroll_left li').click(function(){
        var uid = $(this).attr('uid');

       $.get('<?php echo U("Home/Subscribe/sendSubscribe");?>',{uid:uid},function(data){

			var box = '<div id="yk-toolbar-con-update" class="yk-toolbar-con-update"><div data_date="20150803" class="middle-line mlr_10"><span class="time-dot">今天</span></div><div class="header-nav header-nav-sub"><span class="tit"><a target="_blank" href="#"><img src="#">aaa</a></span><span class="f_14 c_gray"></span></div><div class="clearfix pb20 clearfix_login"><div class="collgrid4w"><div class="items"><div class="clear"></div></div></div></div></div>';


			$('#yk-toolbar-con-feed').empty();
			$('#yk-toolbar-con-feed').append(box);
			var tit = '<img src='+data['user'].photo+'>'+data['user'].username;
			$('.header-nav-sub').find('a').empty().append(tit);

	    	if(data[0].length==0)
	    	{
	    		var ul = '<div class="yk-toolbar-con-noResult"><div class="icon-msg-noResult"></div><div class="f_18 t_c">最近没更新，去<a target="_blank" href="#" class="c_blue">TA的频道</a>看看吧</div></div>';
	    		$('.items').append(ul);
	    	}else{

		    	for(var i=0;i<data[0].length;i++)
		    	{
		    		var ul = '<ul id="u'+i+'" class="v"><li class="v_link"><a href="#"></a></li><li class="v_thumb"><img src="#"></li><li class="v_menu"></li><li class="v_time"><span class="num"></span><span class="bg"></span></li><li class="v_title"><a href="#">#</a></li></ul>';
		    		$('.items').append(ul);
					$('#u'+i+' li').eq(0).find('a').attr('href','/Youku/index.php/Home/Play/index.html?videoId='+data[0][i].id);
					$('#u'+i+' li').eq(1).find('img').attr('src',data[0][i].pic);
					$('#u'+i+' li').eq(4).find('a').html(data[0][i].title);
				}
			}
	       
        },'json');

    });
       $.get('<?php echo U("Home/Subscribe/sendSubscribe");?>',{uid:<?php echo ($suser[0]['id']); ?>},function(data){

			var box = '<div id="yk-toolbar-con-update" class="yk-toolbar-con-update"><div data_date="20150803" class="middle-line mlr_10"><span class="time-dot">今天</span></div><div class="header-nav header-nav-sub"><span class="tit"><a target="_blank" href="#"><img src="#">aaa</a></span><span class="f_14 c_gray"></span></div><div class="clearfix pb20 clearfix_login"><div class="collgrid4w"><div class="items"><div class="clear"></div></div></div></div></div>';


			$('#yk-toolbar-con-feed').empty();
			$('#yk-toolbar-con-feed').append(box);
			var tit = '<img src='+data['user'].photo+'>'+data['user'].username;
			$('.header-nav-sub').find('a').empty().append(tit);

	    	if(data[0].length==0)
	    	{
	    		var ul = '<div class="yk-toolbar-con-noResult"><div class="icon-msg-noResult"></div><div class="f_18 t_c">最近没更新，去<a target="_blank" href="#" class="c_blue">TA的频道</a>看看吧</div></div>';
	    		$('.items').append(ul);
	    	}else{

		    	for(var i=0;i<data[0].length;i++)
		    	{
		    		var ul = '<ul id="u'+i+'" class="v"><li class="v_link"><a href="#"></a></li><li class="v_thumb"><img src="#"></li><li class="v_menu"></li><li class="v_time"><span class="num"></span><span class="bg"></span></li><li class="v_title"><a href="#">#</a></li></ul>';
		    		$('.items').append(ul);
					$('#u'+i+' li').eq(0).find('a').attr('href','/Youku/index.php/Home/Play/index.html?videoId='+data[0][i].id);
					$('#u'+i+' li').eq(1).find('img').attr('src',data[0][i].pic);
					$('#u'+i+' li').eq(4).find('a').html(data[0][i].title);
				}
			}
	       
        },'json');
</script>
			</div>
			<!-- 主体结束 -->

			<!-- 底部 -->
			
			<!-- 底部结束 -->
		</div>	
	</div>
</body>
</html>