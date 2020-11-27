<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title><?php echo ($resources['title']); ?></title>
	<link href="/Public/Home/css/youku.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/chuda_qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/lsidetool.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/yk.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/playV5.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/qfooter.css" type="text/css" rel="stylesheet">
<link rel="icon" href="/Public/Home/pic/favicon.png" type="image/png" >
<script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
<!-- video.Js ↓ -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.3.0/video-js.min.css" rel="stylesheet">
<style>
.vjs-default-skin .vjs-big-play-button {left:45%;top:45%;}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.3.0/video.min.js"></script>
<!--此处勿删 如果h5不能播放,就调用flash -->
<!-- <script src="https://cdn.jsdelivr.net/npm/videojs-flash@2/dist/videojs-flash.min.js"></script> -->
<!-- If you'd like to support IE8 -->
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>


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
			<div class='s-body'>
				<div class='s_main layout_121'>
				
					
<div id="vpvideotitlev5_wrap">
    <div id="vpvideotitlev5">
        <!--视频基本信息-->
        <div class="base">
            <div class="base_info">
                <h1 title="" class="title">
                    <span id="subtitle">
                        <?php echo ($resources['title']); ?>
                    </span>
                </h1>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
</div>
<div id="playBox" class="play_area" style="">
    <div style="position:absolute;top:0;left:50%;z-index:10000;display:none"
    id="div_ad_crazy_v5">
    </div>
    <div id="playerBox" class="playBox">
        <div class="playArea">
            <div style="" class="player" id="player" err="">
                <!--播放器开始-->
                <video id="example_video_1" class="video-js vjs-default-skin" style="width: 100%;height: 100%;object-fit: fill;" controls preload="metadata" poster="<?php echo ($resources['pic']); ?>" data-setup='{"techOrder": ["html5", "flash"]}'>
                <source src="<?php echo ($resources['content']); ?>" type="video/mp4">
                <source src="<?php echo ($resources['content']); ?>" type="video/webm">
                  <!-- <source src="<?php echo ($resources['content']); ?>" type="video/flv"> -->
                  <!--勿删 字幕设置 ↓ -->
                  <!-- <track kind="captions" src="../shared/example-captions.vtt" srclang="en" label="English"></track> -->
                  <!-- Tracks need an ending tag thanks to IE9 -->
                  <!-- <track kind="subtitles" src="../shared/example-captions.vtt" srclang="en" label="English"></track> -->
                  <!-- Tracks need an ending tag thanks to IE9 -->
                </video>
                <!--播放器结束-->
            </div>
        </div>
    </div>
    <!--播放列表-->
    <!--mv、专辑播放列表-->
    <div id="player_sidebar" class="listBox">
        <div class="listSkip">
            <div id="listareaother" style="display: block;" class="listArea">
                <div class="show_tab">
                    <div class="tabs">
                        <ul id="DramaTab">
                            <li _to="Drama" class="current">
                                <span>
                                    选集
                                </span>
                            </li>
                            <li style="display:none" _to="timeline" class="">
                                <span>
                                    %s
                                </span>
                            </li>
                            <li style="display:none" _to="actionInfo" class="">
                                <span>
                                    %s
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="body">
                    <div style="display: block;" id="Drama">

                        <div class="scroll-area scroll-area-s">
                            <div id="Scrollbar" class="scrollbar" style="visibility: visible;">
                                <div class="scrollbar-up">
                                </div>
                                <div class="scrollbar-track">
                                </div>
                                <div class="scrollbar-down">
                                </div>
                            </div>
                            <div class="scroller">
                                <div id="playlist_list" class="scroller-container">
                                    <div class="playlists ablists">
                                        <div class="lists">
                                            <ul id="playlist_content" class="items">
                                                <div id="vpvideoplaylistv5_wrap">
                                                    <div id="vpvideoplaylistv5">
                                                        <li  seq="0" id="item_XOTYyNzcwNDMy"
                                                        class="item">
                                                            <a data-from="y1.2-3.4.1" charset="hz-4006639-1000631" title="<?php echo ($resources['title']); ?>"
                                                            href="#">
                                                                <span class="l_img">
                                                                    <img alt="<?php echo ($resources['title']); ?>" src="<?php echo ($resources['pic']); ?>">
                                                                </span>
                                                                <span class="l_title">
                                                                    <?php echo ($resources['title']); ?>
                                                                </span>
                                                                <span class="l_stat">
                                                                    <label>
                                                                        播放:
                                                                    </label>
                                                                    <em class="num">
                                                                        <?php echo ($resources['count']); ?>
                                                                    </em>
                                                                </span>

                                                                <span class="l_order">
                                                                    <em class="num">
                                                                        01
                                                                    </em>
                                                                    <span class="bg">
                                                                    </span>
                                                                </span>
                                                                <span class="l_status">
                                                                    <i class="ico__play">
                                                                    </i>
                                                                    正在播放
                                                                    <span class="bg">
                                                                    </span>
                                                                </span>
                                                                <span class="l_ishd">
                                                                    <i title="超清" class="ico__SD">
                                                                    </i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="listcontrol_side" class="listcontrol_side">
                    <a charset="hz-4006641-1000631" title="收起列表" class="listcontrol_a">
                        <span class="ctrlink">
                            <i class="ico_right">
                            </i>
                        </span>
                    </a>
                </div>
            </div>
            <!--listArea end-->
            <div style="display: block;" class="listcontrol">
                <div onclick="Log.log(1, 'tp=1&amp;cp=4006643&amp;cpp=1000631')" class="handle">
                </div>
            </div>
            <div style="display:none;" class="list_tips">
                <div class="tips">
                    <a charset="hz-4006185-1000595" class="handler">
                    </a>
                    <div class="arrow">
                    </div>
                    <div class="content">
                    </div>
                </div>
                <iframe frameborder="0" scrolling="no" class="mask">
                </iframe>
            </div>
        </div>
        <iframe frameborder="0" scrolling="no" style="display:none" class="listmask">
        </iframe>
    </div>
    <!--listBox end-->
    <div class="clear">
    </div>
</div>
<!-- 视频播放器配置 -->
<script>
  var player = videojs('example_video_1', {
    //是否静音
    muted: false,
    controls: true,
    
    //是否循环播放
    loop: false,
    // 更多配置.....
    
  });
  //获取播放时长
  $(document).ready(function () {
    var options = {
    };
    var player = videojs('example_video_1', options, function onPlayerReady() {
        var time1;
        var t1 = 0;
        function aa() {
            t1 += 1;
            document.getElementById('aa').value = t1;
            console.log('aa-' + t1);
        }
        //开始播放视频时，设置一个定时器，每2000毫秒调用一次aa(),观看时长加1秒
        this.on('play', function () {
            console.log('开始播放');
            time1 = setInterval(function () {
                aa();
            }, 2000)
        });
        //结束和暂时时清除定时器，并向后台发送数据
        this.on('ended', function () {
            console.log('结束播放');
            window.clearInterval(time1);
            countTime();   //向后台发数据
        });
        this.on('pause', function () {
            console.log('暂停播放');
            window.clearInterval(time1);
            countTime();  //向后台发数据
        });
    });
    //直接关闭页面，并向后台发送数据
    if(window.addEventListener){
        window.addEventListener("beforeunload",countTime,false);
    }else{
        window.attachEvent("onbeforeunload",countTime);
    }
})
 
function countTime() {
    
            var sTime = $("#aa").val();
            var videoId = "<?php echo ($videoId); ?>";
            $.ajax({
                url : "/index.php/Home/Play/upCredit",
                type : "POST",
                dataType : 'json',
                data : {'sTime':sTime,'videoId':videoId},
                success:function (data) {
                  
                },fail:function(data){
                    
                },complete:function(data){
                
                }
            })
        }
       
</script>

<!-- mainCol.html ↓↓↓ -->
<div class="mainCol">
    <div id="vpactionv5_wrap">
        <div id="vpactionv5">
            <div class="yk-interact">
                <div class="fns">
                    <div class="fn-updown">
                        <div id="fn_updown" class="fn">
                            <div id="fn_up" class="fn-up">
                                <a title="顶:166">
                                    <span data-stat-role="ck" class="ico">
                                        <i class="ico-fn-up">
                                        </i>
                                    </span>
                                    <span data-stat-role="ck" id="upVideoTimes" class="num">
                                        166
                                    </span>
                                </a>
                            </div>
                            <div id="fn_down" class="fn-down">
                                <a title="踩:3">
                                    <span data-stat-role="ck" class="ico">
                                        <i class="ico-fn-down">
                                        </i>
                                    </span>
                                    <span data-stat-role="ck" id="downVideoTimes" class="num">
                                        3
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="fn-collect">
                        <div id="fn_favorite" data-dest="collect" class="fn">
                            <div id="fn_favo">
                                <a link="null">
                                    <span data-stat-role="ck" class="ico">
                                        <i class="ico-fn-collect">
                                        </i>
                                    </span>
                                    <span data-stat-role="ck" class="label">
                                        收藏
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="fn-download">
                        <div id="fn_download_disabled" disabled="true" class="fn fn-disabled">
                            <div>
                                <span data-stat-role="ck" class="ico">
                                    <i class="ico-fn-download">
                                    </i>
                                </span>
                                <span data-stat-role="ck" class="label">
                                    下载
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="fn-splite">
                    </div>


                    <div class="fn-stat">
                        <div id="fn_stat" class="fn">
                            <a link="null">
                                <div data-stat-role="ck" class="playstat">
                                    <span class="ico">
                                        <i class="ico-fn-VR">
                                        </i>
                                    </span>
                                    <span id="videoTotalPV" class="stat">
                                        <em class="num">
                                            <?php echo ($resources['count']); ?>
                                        </em>
                                        播放
                                    </span>
                                </div>
                                <div data-stat-role="ck" class="fn-handle">
                                    <i class="ico-drophandle">
                                    </i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="fn-splite">
                    </div>
                    <!-- 学分积分更新 -->
                    <div class="fn-stat">
                        <div id="fn_stat" class="fn">
                            <a link="null">
                                <div data-stat-role="ck" class="playstat">
                                    <!-- <span class="ico">
                                        <i class="ico-fn-VR">
                                        </i>
                                        <img src="/Public/Home/img/jiahao.jpg" alt="jiahao">
                                    </span> -->
                                    <span id="videoTotalPV" class="stat" style="margin-top: 15px;">
                                        <b>+</b>
                                        <em class="num">
                                            <input type="button" style="width: 60px;" id="aa" value="0" />
                                        </em>
                                        学分
                                    </span>
                                </div>
                                <!-- <div data-stat-role="ck" class="fn-handle">
                                    <i class="ico-drophandle">
                                    </i>
                                </div> -->
                            </a>
                        </div>
                    </div>
                </div>
                <!--fns end-->
                <div class="yk-uploadinfo">
                    <div class="yk-userinfo">
                        <div id="subimg" class="user-photo">
                            <a target="_blank" charset="hz-4006605-1000631" href="<?php echo U('Home/Space/index');?>?id=<?php echo ($resources['id']); ?>">
                                <img src="<?php echo ($resources['photo']); ?>">
                            </a>
                        </div>
                        <div subname="独孤九剑-郝浩涵" id="subname" class="user-name">
                            <a target="_blank" charset="hz-4006606-1000631" data-from="hz-4006606-1000631"
                            href="<?php echo U('Home/Space/index');?>?id=<?php echo ($resources['id']); ?>" class="redname">
                                <?php echo ($resources['username']); ?>
                            </a>

                        </div>
                        <div class="user-action">
                            <div id="user_follow_info_videoinfo" class="sub-btn">
                                <div id="view_updates_videoinfo" class="form_btn form_btn_m ">
                                    <span class="form_btn_text">
                                        订阅
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <script>
                    //更新支持,反对数
                    $.get('<?php echo U("Home/Play/statisticSupport");?>',{videoId:<?php echo ($videoId); ?>},function(data){
                            $('#upVideoTimes').html(data.support);
                            $('#downVideoTimes').html(data.against);
                    },'json');
                    //查询订阅,收藏,支持表,确定图标状态
                    if(islogin()){
                        $.get('<?php echo U("Home/Play/updateVideoInfo");?>',{videoId:<?php echo ($videoId); ?>,pid:<?php echo ($resources['id']); ?>},function(data){
                            console.log(data);
                            //如果用户已订阅,改变图标状态
                            if(data.collection>0){
                                $('#fn_favorite').addClass('fn-return');
                                $('#fn_favorite').find('span').eq(1).html('已收藏');
                            }
                            //如果用户已收藏,改变图标状态
                            if(data.subscribe>0){
                                $('#view_updates_videoinfo').addClass('form_btnsub_m');
                                $('#view_updates_videoinfo').find('span').html('已订阅');
                            }
                            //如果用户已赞,改变图标状态
                            if(data.support>0){
                                $('#fn_up').addClass('fn-return');
                            }
                            //如果用户已踩,改变图标状态
                            if(data.against>0){
                                $('#fn_down').addClass('fn-return');
                            }
                        },'json');
                    }

                    //点击订阅按钮
                    $('#view_updates_videoinfo').toggle(function(){
                        if(!islogin()){
                                showLoginbox();
                            return 0;
                        }
                        $.get('<?php echo U("Home/Play/addSubscribe");?>',{pid:<?php echo ($resources['id']); ?>});
                        $(this).addClass('form_btnsub_m');
                        $(this).find('span').html('已订阅');
                    },function(){
                        if(!islogin()){
                                showLoginbox();
                            return 0;
                        }
                        $.get('<?php echo U("Home/Play/deleteSubscribe");?>',{pid:<?php echo ($resources['id']); ?>});
                        $(this).removeClass('form_btnsub_m');
                        $(this).find('span').html('订阅');
                    });

                    //点击收藏按钮
                    $('#fn_favorite').toggle(function(){
                        if(!islogin()){
                                showLoginbox();
                            return 0;
                        }
                        $.get('<?php echo U("Home/Play/addCollection");?>',{videoId:<?php echo ($videoId); ?>});
                        $(this).addClass('fn-return');
                        $(this).find('span').eq(1).html('已收藏');
                    },function(){
                        $.get('<?php echo U("Home/Play/deleteCollection");?>',{videoId:<?php echo ($videoId); ?>});
                        $(this).removeClass('fn-return');
                        $(this).find('span').eq(1).html('收藏');
                    });

                    //点击赞按钮
                    $('#fn_up').toggle(function(){
                        if(!islogin()){
                                showLoginbox();
                            return 0;
                        }
                        $.get('<?php echo U("Home/Play/addSupport");?>',{videoId:<?php echo ($videoId); ?>},function(data){
                            if(data.ok)
                            {
                                $('#upVideoTimes').html(data.count);
                            }
                        },'json');
                        $(this).addClass('fn-return');
                    },function(){
                        $.get('<?php echo U("Home/Play/deleteSupport");?>',{videoId:<?php echo ($videoId); ?>},function(data){
                            console.log(data);
                            if(data.ok==1)
                            {
                                $('#upVideoTimes').html(data.count);
                            }
                        },'json');
                        $(this).removeClass('fn-return');
                    });

                    //点击踩按钮
                    $('#fn_down').toggle(function(){
                        if(!islogin()){
                                showLoginbox();
                            return 0;
                        }
                        $.get('<?php echo U("Home/Play/addAgainst");?>',{videoId:<?php echo ($videoId); ?>},function(data){
                            if(data.ok)
                            {
                                $('#downVideoTimes').html(data.count);
                            }
                        },'json');
                        $(this).addClass('fn-return');
                    },function(){
                        $.get('<?php echo U("Home/Play/deleteAgainst");?>',{videoId:<?php echo ($videoId); ?>},function(data){
                            console.log(data);
                            if(data.ok)
                            {
                                $('#downVideoTimes').html(data.count);
                            }
                        },'json');
                        $(this).removeClass('fn-return');
                    });

                </script>
                <div id="vpvideoinfov5_wrap">
                    <div id="vpvideoinfov5">
                        <div class="yk-videoinfo">
                            <div id="text_short" class="text">
                                <?php echo ($resources['title']); ?>
                            </div>
                            <div style="display: none;" id="text_long" class="text">
                                乡间的小路
                                <a onclick="$('text_long').hide();$('text_short').show();Log.log(1,'');">
                                    隐藏
                                </a>
                            </div>
                            <div class="time">
                                <?php echo (beforetime($resources['time'])); ?>&nbsp;上传
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--左侧中通运营位-->
    <div id="leftoperationpos">
    </div>
    <br>
    <!--左侧中通广告位-->
    <div>
        <div id="ab_850">
        </div>
        <div id="ab_v_323">
        </div>
        <div class="clear">
        </div>
    </div>

    <div class="commentArea" id="commentArea" >
            <div id="commentAreaBox" exclude="1">
                <span style="display:none" id="totalComment">
                    156
                </span>
                <!--评论区 start-->
                <a name="replyLocation" id="replyLocation">
                </a>
                <!--评论区 start-->
                <div class="commentAction loginBefore" id="commentAction" style="display:block">
                    <div class="userPhoto" style="display: none;">
                        <a href="" target="_blank">
                            <img title="qwer" src="/Youku/Public/Admin/UserPhoto/photo.jpg">
                        </a>
                    </div>
                    <div class="loginArea" id="loginArea" style="display: none;">
                        <span>
                            <a href="">
                                qwer                        </a>
                        </span>
                    </div>


                    <div class="commentTextArea">
                        <textarea class="form_input form_input_defaultvalue" id="content" name="content" onkeydown="ctlentComments(event,'bt_comment');">有什么感想，您也来说说吧！</textarea>
                    </div>
                    <div class="clear">
                    </div>
                    <div class="toolbar" id="toolbar">
                        <div id='buttonS' class="action">
                            <div class="form_btn form_btn_m form_btnsub_m">
                                <span class="form_btn_text" id="bt_comment" name="bt_comment" onclick="javascript:sendcomment();">
                                    发表评论
                                </span>
                            </div>
                            <div class="com_overlay" id="com_overlay" style="display:none">
                                <div class="com_overlay_con">
                                    <div class="tips" id="tips">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear">
                        </div>
                        <div class="validate" id="verify_code" style="display:none;">
                            验证码:
                            <input type="text" class="defaultext" onkeydown="ctlentComments(event,'bt_comment');" name="verify_code_value" id="verify_code_value" value="输入右图的字符">
                            <span>
                                <img class="key" id="verify_code_img">
                            </span>
                            <span>
                                看不清,
                                <a onclick="verify_code_comment(true);return false;">
                                    点此刷新
                                </a>
                            </span>
                        </div>
                        <div class="clear">
                        </div>
                    </div>
                </div>
            </div>
            <div id="musicOrz">
            </div>
            <div id="videocomment" class="videoComment">
                <div class="tab_inner" id="tab_inner">
                    <div class="tabs">
                        <ul id="CommentTab">
                            <li _to="allcomment" id="allcomment" class="current">
                                <a>
                                    全部评论

                                </a>
                            </li>
                            <li _to="hotcomment" id="hotcomment" name="hotcomment" style="display:none">
                                <a>
                                    精华评论
                                </a>
                            </li>
                            <li _to="ownercomment" id="ownercomment" name="ownercomment" style="display:none">
                                <a>
                                    上传者说
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="commentpop" id="comment_new" style="display:none">
                    <a style="display:block;" charset="hz-4001208" href="javascript:location.reload();">
                        有新评论，刷新看看
                    </a>
                </div>
                <div class="commentpop" id="commentpop" style="display:none">
                    <span onclick="this.parentNode.style.display='none';" class="close">
                    </span>
                    评论已提交，请等待审核通过。
                </div>
                <div id="videobodycommentlist">
                    <?php if($nocount == 1): ?><div id="comment_none" class="null"> <h3>沙发空缺中，还不快抢～</h3> </div>
                    <?php else: ?>
                    <?php echo ($page); ?>
                    <div id="Comments" class="box nBox">
                        <div class="body">
                            <div class="comments">


                            <?php if(is_array($reply)): foreach($reply as $key=>$vo): ?><!--一条回复内容 begin-->
                                <div class="comment" >
                                    <div class="commentcon">
                                        <div class="userPhoto">
                                            <a href="<?php echo U('Home/Space/index');?>?id=<?php echo ($vo['uid']); ?>" target="_blank">
                                                <img src="<?php echo ($vo['photo']); ?>">
                                            </a>
                                        </div>
                                        <div class="bar  ">
                                                <?php echo ($vo['username']); ?>                                    </div>
                                        <div class="con">
                                            <div class="text" >
                                                <p><?php echo ($vo['con']); ?></p>
                                            </div>
                                            <div class="panel">
                                                <div class="handle" >
                                                    <div class="com_reply" style="display:block">
                                                        <a id="replylink<?php echo ($vo['iid']); ?>" onclick='javascript:replylink(replylink<?php echo ($vo['iid']); ?>);' username="<?php echo ($vo['username']); ?>" href="javascript:void(0)" >
                                                            回复
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="timestamp">
                                                    <?php echo (beforetime($vo['date'])); ?>                                            </span>
                                            </div>
                                        </div>
                                        <!--con end-->
                                    </div>
                                </div>
                                <!--comment end--><?php endforeach; endif; ?>

                            </div>
                        </div>
                        <!--body end-->

                    </div>
                    <div class='clear' style="padding-top:50px"></div>
                    <?php echo ($page); endif; ?>
                </div>
                <script>
                function replylink(aa){
                    console.log(aa);
                    if(!islogin()){
                            showLoginbox();
                            return 0;
                        }
                        window.scroll(0,760);
                        var cc = $('#'+aa).attr('username');

                        $('#content').val('@'+cc+' : ');
                        $('#content').focus();
                    };


                    function textareafocus(){
                        if(!islogin()){
                            showLoginbox();
                            return 0;
                        }
                        window.scroll(0,760);
                        $('#content').val('');
                        $('#content').focus();
                    }
                </script>
                <div class="returntop">
                    <a href="javascript:void(0)" onclick="javascript:textareafocus();">
                        发表评论
                    </a>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
    <!--左侧底通广告位-->
    <div>
        <div id="ab_747">
        </div>
        <div id="ab_v_321">
        </div>
        <div class="clear">
        </div>
    </div>
</div>
<script>

    $('#content').click(function(){
        $(this).val('');
    });
    function sendcomment(){
        if(!islogin()){
            showLoginbox();
            return 0;
        }
        var videoId = <?php echo ($videoId); ?>;
        var content = $('#content').val();
        if(content == '')
            {return;}
        $.get('/index.php/Home/Play/comment',{content:content,videoId:videoId},function(data){
            $('#comment_new').show();
        },'json');
        return false;
    };


</script>

					<div class='clear'></div>
				</div>
			</div>
			<!-- 主体结束 -->

			<!-- 底部 -->
			<div id="qfooter" class="yk-footer">
    <div class="yk-footer-con">
        
        <br>
        <br>
        <br>
        <div class="copyright">
            请使用者仔细阅读师者<a href="" target="_blank">使用协议</a>、<b><a href="" target="_blank">版权声明</a></b>、<a href="" target="_blank">反盗版盗链声明</a>&nbsp;Copyright&copy;2020 师者 shizhe.com 版权所有
			<span style="margin-left:20px;color:#555;">不良信息举报电话: 4008100580</span>
        </div>
    </div>
</div>
			<!-- 底部结束 -->
		</div>
	</div>
</body>
</html>