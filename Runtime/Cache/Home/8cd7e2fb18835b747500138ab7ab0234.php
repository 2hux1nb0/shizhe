<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title><?php echo ($datas[0]['title']); ?></title>
	<meta name="keywords" content="<?php echo ($datas[0]['keywords']); ?>" />
    <meta name="description" content="<?php echo ($datas[0]['description']); ?>" />
	<link href="/Public/Home/css/youku.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/chuda_qheader.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/lsidetool.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/yk.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/grid_pc.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/qfooter.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/css/ykhome.css" type="text/css" rel="stylesheet">
<link rel="icon" href="/Public/Home/pic/favicon.png" type="image/png" >
<script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
</head>
<body class="yk-w1190 body-offset-w1190">
	
	<div class='window'>
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

			<!-- 首页导航 -->
			<html>
 <head></head>
 <body>
  <div id="qheader_nav" class="yk-nav">
   <div class="yk-box">
    <div class="yk-nav-first">
     <div class="yk-nav-main">
      <ul class="yk-nav-pills">
       <li class="current"><a charset="100-004-1" href="<?php echo U('Home/index/index');?>">首页</a></li>

         <!-- <?php if(is_array($cates)): foreach($cates as $key=>$vo): ?><li><a charset="100-004-3" href="/index.php/<?php echo ($vo["aliress"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?> -->
       <li><a charset="100-004-4" href="<?php echo U('Home/Wenxue/index');?>">文学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Shuxue/index');?>">数学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Yuyan/index');?>">语言</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Wuli/index');?>">物理</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Huaxue/index');?>">化学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Shengwu/index');?>">生物</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Lishi/index');?>">历史</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Dili/index');?>">地理</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Zhengzhi/index');?>">政治</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Jisuanji/index');?>">计算机科学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Zhexue/index');?>">哲学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Falv/index');?>">法学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Shehui/index');?>">社会学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Shangye/index');?>">商业</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Chuanmei/index');?>">传媒</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Jingji/index');?>">经济学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Yixue/index');?>">医学健康</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Yishu/index');?>">艺术学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Gongxue/index');?>">工学类</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Lixue/index');?>">理学类</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Nongxue/index');?>">农学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Junshi/index');?>">军事学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Guanli/index');?>">管理学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Jiaoyu/index');?>">教育学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Zongjiao/index');?>">宗教学</a></li>
       <li><a charset="100-004-4" href="<?php echo U('Home/Xinlixue/index');?>">心理学</a></li> 
       <li><a charset="100-004-4" href="<?php echo U('Home/Xuexiao/index');?>">学校&机构</a></li>
       <li><a charset="100-001-91" href="<?php echo U('Home/Search/index');?>">全部</a></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
			<!-- 首页导航结束 -->

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
				<div class='s-main'>
					<div class="yk-con" style="position: relative;">
						<div id="m_205805" name="m_pos" lazy-loaded="true">
    <!-- row 1 页首 8/5 +1 START -->
    <div class="yk-row-index">
        <div class="yk-row">
            <div id="m_205902" name="m_pos">
                <div class="yk-col12">
                    <div class="yk-row">
                        <div class="yk-col8">

                            <div class="v v-large focusVideo ishover">
                                <div class="v-thumb">
                                    <img alt="<?php echo ($mainShow[0]['title']); ?>" src="<?php echo ($mainShow[0]['pic']); ?>">
                                </div>
                                <div class="v-link">
                                    <a title="<?php echo ($mainShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[0]['id']); ?>">
                                    </a>
                                </div>
                                <div class="v-meta vb">
                                    <div class="v-meta-title">
                                        <a target="video" data-from="1-2" href="">
                                           
                                            <?php echo ($mainShow[0]['title']); ?>
                                        </a>
                                    </div>

                                    <div class="v-meta-overlay">
                                    </div>
                                </div>
                                <div class="v-meta-deep">
                                    <a target="_blank" data-from="1-3 " href="<?php echo U('Home/Search/index');?>">
                                        深度精选
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="yk-col4">
                            <div class="v ishover" id="">
                                <div class="v-thumb">
                                    <img alt="<?php echo ($mainShow[1]['title']); ?>" src="<?php echo ($mainShow[1]['pic']); ?>">
                                </div>
                                <div class="v-link">
                                    <a title="<?php echo ($mainShow[1]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[1]['id']); ?>">
                                    </a>
                                </div>
                                <div class="v-meta vb vb-oneline">
                                    <div class="v-meta-title">
                                        <a target="video" data-from="2-2" href="">
                                            
                                            <?php echo ($mainShow[1]['title']); ?>
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <span>
                                            水手吃"花"被判重刑
                                        </span>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a target="_blank" data-from="2-3" href="">
                                         
                                            <i class="ico-user">
                                            </i>
                                            看理想
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a class="btn btn-small" target="video" data-from="2-4" href="">
                                          
                                            播&nbsp;&nbsp;放
                                        </a>
                                    </div>
                                    <div class="v-meta-tagrt">
                                        <i title="播放" class="ico-statplay">
                                        </i>
                                        <span class="v-num">
                                            8.3万
                                        </span>
                                    </div>
                                    <div class="v-meta-tagrb">
                                        <a title="下载" class="ico_download" data-id="XMTI5NDgxNjMxMg==" data-link=""
                                        data-type="video" href="javascript:void(0);">
                                        
                                        </a>
                                    </div>
                                    <div class="v-meta-overlay">
                                    </div>
                                </div>
                            </div>
                            <div class="v ishover" id="">
                                <div class="v-thumb">
                                    <img alt="<?php echo ($mainShow[2]['title']); ?>" src="<?php echo ($mainShow[2]['pic']); ?>">
                                </div>
                                <div class="v-link">
                                    <a title="<?php echo ($mainShow[2]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[2]['id']); ?>">
                                    </a>
                                </div>
                                <div class="v-meta vb vb-oneline">
                                    <div class="v-meta-title">
                                        <a target="video" data-from="3-2" href="">
                                          
                                            <?php echo ($mainShow[2]['title']); ?>
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <span>
                                            &lt;歌手是谁&gt;帮你上头条
                                        </span>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a target="_blank" data-from="3-3" href="">
                                            <i class="ico-user">
                                            
                                            </i>
                                            歌手是谁
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a class="btn btn-small" target="video" data-from="3-4" href="">
                                           
                                            播&nbsp;&nbsp;放
                                        </a>
                                    </div>
                                    <div class="v-meta-tagrt">
                                        <i title="播放" class="ico-statplay">
                                        </i>
                                        <span class="v-num">
                                            13.0万
                                        </span>
                                    </div>
                                    <div class="v-meta-tagrb">
                                        <a title="下载" class="ico_download" data-id="XMTI5NTcwMDA3Mg==" data-link=""
                                        data-type="video" href="javascript:void(0);">
                                        </a>
                                    </div>
                                    <div class="v-meta-overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="yk-row">
                        <div class="yk-col4">
                            <div _showid="299011" class="v ishover" id="">
                                <div class="v-thumb">
                                    <img alt="<?php echo ($mainShow[3]['title']); ?>" src="<?php echo ($mainShow[3]['pic']); ?>">
                                </div>
                                <div class="v-link">
                                    <a title="<?php echo ($mainShow[3]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[3]['id']); ?>">
                                    </a>
                                </div>
                                <div class="v-isdrama">
                                </div>
                                <div class="v-meta vb vb-oneline">
                                    <div class="v-meta-title">
                                        <a target="video" data-from="3-2" href="">
                                            <?php echo ($mainShow[3]['title']); ?>
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <span>
                                            霍建华赵丽颖师徒禁恋
                                        </span>
                                    </div>
                                    <div class="v-meta-entry">
                                        <span>
                                            每周日周一晚24时更新两集
                                        </span>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a class="btn btn-small" target="video" data-from="3-3" href="">
                                            播&nbsp;&nbsp;放
                                        </a>
                                    </div>
                                    <div class="v-meta-tagrt">
                                        <span class="v-status">
                                            更新至34
                                        </span>
                                    </div>
                                    <div class="v-meta-tagrb">
                                    </div>
                                    <div class="v-meta-tagrb">
                                        <a title="下载" class="ico_download" data-id="af02ac580b5711e5a080" data-type="vshow"
                                        href="javascript:void(0);">
                                        </a>
                                    </div>
                                    <div class="v-meta-overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="yk-col4">
                            <div _showid="297237" class="v ishover" id="">
                                <div class="v-thumb">
                                    <img alt="<?php echo ($mainShow[4]['title']); ?>" src="<?php echo ($mainShow[4]['pic']); ?>">
                                </div>
                                <div class="v-link">
                                    <a title="<?php echo ($mainShow[4]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[4]['id']); ?>">
                                    </a>
                                </div>
                                <div class="v-isdrama">
                                </div>
                                <div class="v-meta vb vb-oneline">
                                    <div class="v-meta-title">
                                        <a target="video" data-from="3-2" href="">
                                            <?php echo ($mainShow[4]['title']); ?>
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <span>
                                            唐嫣俘获Rain欧巴芳心
                                        </span>
                                    </div>
                                    <div class="v-meta-entry">
                                        <span>
                                            每晚24时更新2集
                                        </span>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a class="btn btn-small" target="video" data-from="3-3" href="">
                                            播&nbsp;&nbsp;放
                                        </a>
                                    </div>
                                    <div class="v-meta-tagrt">
                                        <span class="v-status">
                                            更新至14
                                        </span>
                                    </div>
                                    <div class="v-meta-tagrb">
                                    </div>
                                    <div class="v-meta-tagrb">
                                        <a title="下载" class="ico_download" data-id="cfe83b2aa50111e4abda" data-type="vshow"
                                        href="javascript:void(0);">
                                        </a>
                                    </div>
                                    <div class="v-meta-overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="yk-col4">
                            <div class="v ishover" id="">
                                <div class="v-thumb">
                                    <img alt="<?php echo ($mainShow[5]['title']); ?>" src="<?php echo ($mainShow[5]['pic']); ?>">
                                </div>
                                <div class="v-link">
                                    <a title="<?php echo ($mainShow[5]['title']); ?>" target="video" data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[5]['id']); ?>">
                                    </a>
                                </div>
                                <div class="v-meta vb vb-oneline">
                                    <div class="v-meta-title">
                                        <a target="video" data-from="6-2" href="">
                                            <?php echo ($mainShow[5]['title']); ?>
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <span>
                                            奥莉示爱馨爷
                                        </span>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a target="_blank" data-from="6-3" href=""
                                        class="v-username">
                                            <i class="ico-user">
                                            </i>
                                            爸爸回来了 第二季
                                        </a>
                                    </div>
                                    <div class="v-meta-entry">
                                        <a class="btn btn-small" target="video" data-from="6-4" href="">
                                            播&nbsp;&nbsp;放
                                        </a>
                                    </div>
                                    <div class="v-meta-tagrt">
                                        <i title="播放" class="ico-statplay">
                                        </i>
                                        <span class="v-num">
                                            1,200万
                                        </span>
                                    </div>
                                    <div class="v-meta-tagrb">
                                        <a title="下载" class="ico_download" data-id="XMTI5MzQ5NjUzMg==" data-link=""
                                        data-type="video" href="javascript:void(0);">
                                        </a>
                                    </div>
                                    <div class="v-meta-overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="yk-col4 yk-w970-hide">
                    <div class="v ishover" id="">
                        <div class="v-thumb">
                            <img alt="<?php echo ($mainShow[6]['title']); ?>" src="<?php echo ($mainShow[6]['pic']); ?>">
                        </div>
                        <div class="v-link">
                            <a title="<?php echo ($mainShow[6]['title']); ?>" target="video" data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[6]['id']); ?>">
                            </a>
                        </div>
                        <div class="v-meta vb vb-oneline">
                            <div class="v-meta-title">
                                <a target="video" data-from="7-2" href="">
                                    <?php echo ($mainShow[6]['title']); ?>
                                </a>
                            </div>
                            <div class="v-meta-entry">
                                <span>
                                    自侃：没熊猫机智
                                </span>
                            </div>
                            <div class="v-meta-entry">
                                <a target="_blank" data-from="7-3" href=""
                                class="v-username">
                                    <i class="ico-user">
                                    </i>
                                    师者教育
                                </a>
                            </div>
                            <div class="v-meta-entry">
                                <a class="btn btn-small" target="video" data-from="7-4" href="">
                                    播&nbsp;&nbsp;放
                                </a>
                            </div>
                            <div class="v-meta-tagrt">
                                <i title="播放" class="ico-statplay">
                                </i>
                                <span class="v-num">
                                    18.0万
                                </span>
                            </div>
                            <div class="v-meta-tagrb">
                                <a title="下载" class="ico_download" data-id="XMTI5NjAxMjgwNA==" data-link=""
                                data-type="video" href="javascript:void(0);">
                                </a>
                            </div>
                            <div class="v-meta-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="v ishover" id="">
                        <div class="v-thumb">
                            <img alt="<?php echo ($mainShow[7]['title']); ?>" src="<?php echo ($mainShow[7]['pic']); ?>">
                        </div>
                        <div class="v-link">
                            <a title="<?php echo ($mainShow[7]['title']); ?>" target="video" data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[7]['id']); ?>">
                            </a>
                        </div>
                        <div class="v-meta vb vb-oneline">
                            <div class="v-meta-title">
                                <a target="video" data-from="8-2" href="">
                                    <?php echo ($mainShow[7]['title']); ?>
                                </a>
                            </div>
                            <div class="v-meta-entry">
                                <span>
                                    朱元璋用特务自毁长城
                                </span>
                            </div>
                            <div class="v-meta-entry">
                                <a target="_blank" data-from="8-3" href=""
                                class="v-username">
                                    <i class="ico-user">
                                    </i>
                                    袁腾飞袁游
                                </a>
                            </div>
                            <div class="v-meta-entry">
                                <a class="btn btn-small" target="video" data-from="8-4" href="">
                                    播&nbsp;&nbsp;放
                                </a>
                            </div>
                            <div class="v-meta-tagrt">
                                <i title="播放" class="ico-statplay">
                                </i>
                                <span class="v-num">
                                    16.0万
                                </span>
                            </div>
                            <div class="v-meta-tagrb">
                                <a title="下载" class="ico_download" data-id="XMTI5NTYxODAwNA==" data-link=""
                                data-type="video" href="javascript:void(0);">
                                </a>
                            </div>
                            <div class="v-meta-overlay">
                            </div>
                        </div>
                    </div>
                    <div class="v ishover" id="">
                        <div class="v-thumb">
                            <img alt="<?php echo ($mainShow[8]['title']); ?>" src="<?php echo ($mainShow[8]['pic']); ?>">
                        </div>
                        <div class="v-link">
                            <a title="<?php echo ($mainShow[8]['title']); ?>" target="video" data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($mainShow[8]['id']); ?>">
                            </a>
                        </div>
                        <div class="v-meta vb vb-oneline">
                            <div class="v-meta-title">
                                <a target="video" data-from="9-2" href="">
                                    <?php echo ($mainShow[8]['title']); ?>
                                </a>
                            </div>
                            <div class="v-meta-entry">
                                <span>
                                    史上最轻电动长板
                                </span>
                            </div>
                            <div class="v-meta-entry">
                                <a target="_blank" data-from="9-3" href=""
                                class="v-username">
                                    <i class="ico-user">
                                    </i>
                                    TED官方频道
                                </a>
                            </div>
                            <div class="v-meta-entry">
                                <a class="btn btn-small" target="video" data-from="9-4" href="">
                                    播&nbsp;&nbsp;放
                                </a>
                            </div>
                            <div class="v-meta-tagrt">
                                <i title="播放" class="ico-statplay">
                                </i>
                                <span class="v-num">
                                    33.0万
                                </span>
                            </div>
                            <div class="v-meta-tagrb">
                                <a title="下载" class="ico_download" data-id="XNzg5NDk0MzAw" data-link=""
                                data-type="video" href="javascript:void(0);">
                                </a>
                            </div>
                            <div class="v-meta-overlay">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="m_205904" name="m_pos">
                <div class="yk-col6">
                    <div id="m_205906" name="m_pos">
                        <div class="yk-AD-310x110 b20">
                            <div class="ad-wrap">
                                <div class="ad-con">
                                    <div id="ab_101557" class="ad-inner yk-AD-random yk-AD-random" style="display: block; position: relative; width: 310px; height: 110px;">
                                        <div class="yk-AD-310x110 b20">
                                            <div class="ad-wrap">
                                                <div class="ad-con">
                                                    <div id="ab_101557" class="ad-inner">
                                                        <div style="height: 110px; overflow:hidden;" id="yk-AD-random-wrap">
                                                            <div id="ab_22" style="display: block;">
                                                                <div align="center" id="s_h_573982" class="mod">
                                                                    <a target="_blank" onclick="window.location.href='edu_bank.html'">
                                                                        <img border="0" src="/Public/Home/img/edubank.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            
            <div id="m_205904" name="m_pos">
                <div class="yk-col6">
                    <div id="m_205906" name="m_pos">
                        <div class="yk-AD-310x110 b20">
                            <div class="ad-wrap">
                                <div class="ad-con">
                                    <div id="ab_101557" class="ad-inner yk-AD-random yk-AD-random" style="display: block; position: relative; width: 310px; height: 110px;">
                                        <div class="yk-AD-310x110 b20">
                                            <div class="ad-wrap">
                                                <div class="ad-con">
                                                    <div id="ab_101557" class="ad-inner">
                                                        <div style="height: 110px; overflow:hidden;" id="yk-AD-random-wrap">
                                                            <div id="ab_22" style="display: block;">
                                                                <div align="center" id="s_h_573982" class="mod">
                                                                    <a target="_blank" href="http://www.lj.com">
                                                                        <img border="0" src="/Public/Home/img/forum.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <div id="m_205904" name="m_pos">
                <div class="yk-col6">
                    <div id="m_205906" name="m_pos">
                        <div class="yk-AD-310x110 b20">
                            <div class="ad-wrap">
                                <div class="ad-con">
                                    <div id="ab_101557" class="ad-inner yk-AD-random yk-AD-random" style="display: block; position: relative; width: 310px; height: 110px;">
                                        <div class="yk-AD-310x110 b20">
                                            <div class="ad-wrap">
                                                <div class="ad-con">
                                                    <div id="ab_101557" class="ad-inner">
                                                        <div style="height: 110px; overflow:hidden;" id="yk-AD-random-wrap">
                                                            <div id="ab_22" style="display: block;">
                                                                <div align="center" id="s_h_573982" class="mod">
                                                                    <a target="_blank" href="http://www.jk.com">
                                                                        <img border="0" src="/Public/Home/img/jikeworld.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Wenxue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/wenxue.png" /><font style="font-family:'隶书'; font-size: 35px;">文学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wenxueShow[0]['title']); ?>" src="<?php echo ($wenxueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wenxueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[0]["id"]); ?>"=""><?php echo ($wenxueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wenxueShow[1]['title']); ?>" src="<?php echo ($wenxueShow[1]['pic']); ?>" _src="<?php echo ($wenxueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($wenxueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[1]["id"]); ?>"=""><?php echo ($wenxueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wenxueShow[2]['title']); ?>" src="<?php echo ($wenxueShow[2]['pic']); ?>" _src="<?php echo ($wenxueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wenxueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[2]["id"]); ?>"=""><?php echo ($wenxueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wenxueShow[3]['title']); ?>" src="<?php echo ($wenxueShow[3]['pic']); ?>" _src="<?php echo ($wenxueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wenxueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[3]["id"]); ?>"=""><?php echo ($wenxueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wenxueShow[4]['title']); ?>" src="<?php echo ($wenxueShow[4]['pic']); ?>" _src="<?php echo ($wenxueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($wenxueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[4]["id"]); ?>"=""><?php echo ($wenxueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wenxueShow[5]['title']); ?>" src="<?php echo ($wenxueShow[5]['pic']); ?>" _src="<?php echo ($wenxueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wenxueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[5]["id"]); ?>"=""><?php echo ($wenxueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($wenxueShow[6]['title']); ?>" src="<?php echo ($wenxueShow[6]['pic']); ?>" _src="<?php echo ($wenxueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($wenxueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[6]["id"]); ?>"=""><?php echo ($wenxueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($wenxueShow[7]['title']); ?>" src="<?php echo ($wenxueShow[7]['pic']); ?>" _src="<?php echo ($wenxueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($wenxueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[7]["id"]); ?>"=""><?php echo ($wenxueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($wenxueShow[8]['title']); ?>" src="<?php echo ($wenxueShow[8]['pic']); ?>" _src="<?php echo ($wenxueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($wenxueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[8]["id"]); ?>"=""><?php echo ($wenxueShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Wenxue/index');?>" class="yk-drawer-title">文学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wenxueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($wenxueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Shuxue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/shuxue.png" /><font style="font-family:'隶书'; font-size: 35px;">数学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shuxueShow[0]['title']); ?>" src="<?php echo ($shuxueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shuxueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[0]["id"]); ?>"=""><?php echo ($shuxueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shuxueShow[1]['title']); ?>" src="<?php echo ($shuxueShow[1]['pic']); ?>" _src="<?php echo ($shuxueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shuxueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[1]["id"]); ?>"=""><?php echo ($shuxueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shuxueShow[2]['title']); ?>" src="<?php echo ($shuxueShow[2]['pic']); ?>" _src="<?php echo ($shuxueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shuxueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[2]["id"]); ?>"=""><?php echo ($shuxueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shuxueShow[3]['title']); ?>" src="<?php echo ($shuxueShow[3]['pic']); ?>" _src="<?php echo ($shuxueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shuxueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[3]["id"]); ?>"=""><?php echo ($shuxueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shuxueShow[4]['title']); ?>" src="<?php echo ($shuxueShow[4]['pic']); ?>" _src="<?php echo ($shuxueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shuxueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[4]["id"]); ?>"=""><?php echo ($shuxueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shuxueShow[5]['title']); ?>" src="<?php echo ($shuxueShow[5]['pic']); ?>" _src="<?php echo ($shuxueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shuxueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[5]["id"]); ?>"=""><?php echo ($shuxueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shuxueShow[6]['title']); ?>" src="<?php echo ($shuxueShow[6]['pic']); ?>" _src="<?php echo ($shuxueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shuxueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[6]["id"]); ?>"=""><?php echo ($shuxueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shuxueShow[7]['title']); ?>" src="<?php echo ($shuxueShow[7]['pic']); ?>" _src="<?php echo ($shuxueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($shuxueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[7]["id"]); ?>"=""><?php echo ($shuxueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shuxueShow[8]['title']); ?>" src="<?php echo ($shuxueShow[8]['pic']); ?>" _src="<?php echo ($shuxueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shuxueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[8]["id"]); ?>"=""><?php echo ($shuxueShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Shuxue/index');?>" class="yk-drawer-title">数学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shuxueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($shuxueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ====================================广告位================================= -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Yuyan/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/yuyan.png" /><font style="font-family:'隶书'; font-size: 35px;">语言</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yuyanShow[0]['title']); ?>" src="<?php echo ($yuyanShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yuyanShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[0]["id"]); ?>"=""><?php echo ($yuyanShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yuyanShow[1]['title']); ?>" src="<?php echo ($yuyanShow[1]['pic']); ?>" _src="<?php echo ($yuyanShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($yuyanShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[1]["id"]); ?>"=""><?php echo ($yuyanShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yuyanShow[2]['title']); ?>" src="<?php echo ($yuyanShow[2]['pic']); ?>" _src="<?php echo ($yuyanShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yuyanShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[2]["id"]); ?>"=""><?php echo ($yuyanShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yuyanShow[3]['title']); ?>" src="<?php echo ($yuyanShow[3]['pic']); ?>" _src="<?php echo ($yuyanShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yuyanShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[3]["id"]); ?>"=""><?php echo ($yuyanShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yuyanShow[4]['title']); ?>" src="<?php echo ($yuyanShow[4]['pic']); ?>" _src="<?php echo ($yuyanShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($yuyanShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[4]["id"]); ?>"=""><?php echo ($yuyanShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yuyanShow[5]['title']); ?>" src="<?php echo ($yuyanShow[5]['pic']); ?>" _src="<?php echo ($yuyanShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yuyanShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[5]["id"]); ?>"=""><?php echo ($yuyanShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yuyanShow[6]['title']); ?>" src="<?php echo ($yuyanShow[6]['pic']); ?>" _src="<?php echo ($yuyanShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($yuyanShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[6]["id"]); ?>"=""><?php echo ($yuyanShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yuyanShow[7]['title']); ?>" src="<?php echo ($yuyanShow[7]['pic']); ?>" _src="<?php echo ($yuyanShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($yuyanShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[7]["id"]); ?>"=""><?php echo ($yuyanShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yuyanShow[8]['title']); ?>" src="<?php echo ($yuyanShow[8]['pic']); ?>" _src="<?php echo ($yuyanShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($yuyanShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[8]["id"]); ?>"=""><?php echo ($yuyanShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Yuyan/index');?>" class="yk-drawer-title">语言榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yuyanShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($yuyanShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ================================广告位================================= -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Wuli/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/wuli.png" /><font style="font-family:'隶书'; font-size: 35px;">物理</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wuliShow[0]['title']); ?>" src="<?php echo ($wuliShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wuliShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[0]["id"]); ?>"=""><?php echo ($wuliShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wuliShow[1]['title']); ?>" src="<?php echo ($wuliShow[1]['pic']); ?>" _src="<?php echo ($wuliShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($wuliShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[1]["id"]); ?>"=""><?php echo ($wuliShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wuliShow[2]['title']); ?>" src="<?php echo ($wuliShow[2]['pic']); ?>" _src="<?php echo ($wuliShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wuliShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[2]["id"]); ?>"=""><?php echo ($wuliShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wuliShow[3]['title']); ?>" src="<?php echo ($wuliShow[3]['pic']); ?>" _src="<?php echo ($wuliShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wuliShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[3]["id"]); ?>"=""><?php echo ($wuliShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wuliShow[4]['title']); ?>" src="<?php echo ($wuliShow[4]['pic']); ?>" _src="<?php echo ($wuliShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($wuliShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[4]["id"]); ?>"=""><?php echo ($wuliShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($wuliShow[5]['title']); ?>" src="<?php echo ($wuliShow[5]['pic']); ?>" _src="<?php echo ($wuliShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($wuliShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[5]["id"]); ?>"=""><?php echo ($wuliShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($wuliShow[6]['title']); ?>" src="<?php echo ($wuliShow[6]['pic']); ?>" _src="<?php echo ($wuliShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($wuliShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[6]["id"]); ?>"=""><?php echo ($wuliShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($wuliShow[7]['title']); ?>" src="<?php echo ($wuliShow[7]['pic']); ?>" _src="<?php echo ($wuliShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($wuliShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[7]["id"]); ?>"=""><?php echo ($wuliShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($wuliShow[8]['title']); ?>" src="<?php echo ($wuliShow[8]['pic']); ?>" _src="<?php echo ($wuliShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($wuliShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[8]["id"]); ?>"=""><?php echo ($wuliShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Wuli/index');?>" class="yk-drawer-title">物理榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($wuliShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($wuliShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Huaxue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/huaxue.png" /><font style="font-family:'隶书'; font-size: 35px;">化学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($huaxueShow[0]['title']); ?>" src="<?php echo ($huaxueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($huaxueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[0]["id"]); ?>"=""><?php echo ($huaxueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($huaxueShow[1]['title']); ?>" src="<?php echo ($huaxueShow[1]['pic']); ?>" _src="<?php echo ($huaxueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($huaxueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[1]["id"]); ?>"=""><?php echo ($huaxueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($huaxueShow[2]['title']); ?>" src="<?php echo ($huaxueShow[2]['pic']); ?>" _src="<?php echo ($huaxueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($huaxueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[2]["id"]); ?>"=""><?php echo ($huaxueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($huaxueShow[3]['title']); ?>" src="<?php echo ($huaxueShow[3]['pic']); ?>" _src="<?php echo ($huaxueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($huaxueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[3]["id"]); ?>"=""><?php echo ($huaxueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($huaxueShow[4]['title']); ?>" src="<?php echo ($huaxueShow[4]['pic']); ?>" _src="<?php echo ($huaxueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($huaxueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[4]["id"]); ?>"=""><?php echo ($huaxueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($huaxueShow[5]['title']); ?>" src="<?php echo ($huaxueShow[5]['pic']); ?>" _src="<?php echo ($huaxueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($huaxueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[5]["id"]); ?>"=""><?php echo ($huaxueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($huaxueShow[6]['title']); ?>" src="<?php echo ($huaxueShow[6]['pic']); ?>" _src="<?php echo ($huaxueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($huaxueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[6]["id"]); ?>"=""><?php echo ($huaxueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($huaxueShow[7]['title']); ?>" src="<?php echo ($huaxueShow[7]['pic']); ?>" _src="<?php echo ($huaxueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($huaxueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[7]["id"]); ?>"=""><?php echo ($huaxueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($huaxueShow[8]['title']); ?>" src="<?php echo ($huaxueShow[8]['pic']); ?>" _src="<?php echo ($huaxueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($huaxueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[8]["id"]); ?>"=""><?php echo ($huaxueShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Huaxue/index');?>" class="yk-drawer-title">化学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($huaxueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($huaxueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Shengwu/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/shengwu.png" /><font style="font-family:'隶书'; font-size: 35px;">生物</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shengwuShow[0]['title']); ?>" src="<?php echo ($shengwuShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shengwuShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[0]["id"]); ?>"=""><?php echo ($shengwuShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shengwuShow[1]['title']); ?>" src="<?php echo ($shengwuShow[1]['pic']); ?>" _src="<?php echo ($shengwuShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shengwuShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[1]["id"]); ?>"=""><?php echo ($shengwuShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shengwuShow[2]['title']); ?>" src="<?php echo ($shengwuShow[2]['pic']); ?>" _src="<?php echo ($shengwuShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shengwuShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[2]["id"]); ?>"=""><?php echo ($shengwuShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shengwuShow[3]['title']); ?>" src="<?php echo ($shengwuShow[3]['pic']); ?>" _src="<?php echo ($shengwuShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shengwuShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[3]["id"]); ?>"=""><?php echo ($shengwuShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shengwuShow[4]['title']); ?>" src="<?php echo ($shengwuShow[4]['pic']); ?>" _src="<?php echo ($shengwuShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shengwuShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[4]["id"]); ?>"=""><?php echo ($shengwuShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shengwuShow[5]['title']); ?>" src="<?php echo ($shengwuShow[5]['pic']); ?>" _src="<?php echo ($shengwuShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shengwuShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[5]["id"]); ?>"=""><?php echo ($shengwuShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shengwuShow[6]['title']); ?>" src="<?php echo ($shengwuShow[6]['pic']); ?>" _src="<?php echo ($shengwuShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shengwuShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[6]["id"]); ?>"=""><?php echo ($shengwuShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shengwuShow[7]['title']); ?>" src="<?php echo ($shengwuShow[7]['pic']); ?>" _src="<?php echo ($shengwuShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($shengwuShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[7]["id"]); ?>"=""><?php echo ($shengwuShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shengwuShow[8]['title']); ?>" src="<?php echo ($shengwuShow[8]['pic']); ?>" _src="<?php echo ($shengwuShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shengwuShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[8]["id"]); ?>"=""><?php echo ($shengwuShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Shengwu/index');?>" class="yk-drawer-title">生物榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shengwuShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($shengwuShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Lishi/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/lishixue.png" /><font style="font-family:'隶书'; font-size: 35px;">历史学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接没填地址 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lishiShow[0]['title']); ?>" src="<?php echo ($lishiShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lishiShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[0]["id"]); ?>"=""><?php echo ($lishiShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lishiShow[1]['title']); ?>" src="<?php echo ($lishiShow[1]['pic']); ?>" _src="<?php echo ($lishiShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($lishiShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[1]["id"]); ?>"=""><?php echo ($lishiShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lishiShow[2]['title']); ?>" src="<?php echo ($lishiShow[2]['pic']); ?>" _src="<?php echo ($lishiShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lishiShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[2]["id"]); ?>"=""><?php echo ($lishiShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lishiShow[3]['title']); ?>" src="<?php echo ($lishiShow[3]['pic']); ?>" _src="<?php echo ($lishiShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lishiShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[3]["id"]); ?>"=""><?php echo ($lishiShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lishiShow[4]['title']); ?>" src="<?php echo ($lishiShow[4]['pic']); ?>" _src="<?php echo ($lishiShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($lishiShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[4]["id"]); ?>"=""><?php echo ($lishiShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lishiShow[5]['title']); ?>" src="<?php echo ($lishiShow[5]['pic']); ?>" _src="<?php echo ($lishiShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lishiShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[5]["id"]); ?>"=""><?php echo ($lishiShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($lishiShow[6]['title']); ?>" src="<?php echo ($lishiShow[6]['pic']); ?>" _src="<?php echo ($lishiShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($lishiShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[6]["id"]); ?>"=""><?php echo ($lishiShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($lishiShow[7]['title']); ?>" src="<?php echo ($lishiShow[7]['pic']); ?>" _src="<?php echo ($lishiShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($lishiShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[7]["id"]); ?>"=""><?php echo ($lishiShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($lishiShow[8]['title']); ?>" src="<?php echo ($lishiShow[8]['pic']); ?>" _src="<?php echo ($lishiShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($lishiShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[8]["id"]); ?>"=""><?php echo ($lishiShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Lishi/index');?>" class="yk-drawer-title">历史学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lishiShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($lishiShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ============================广告位============================ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Dili/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/dili.png" /><font style="font-family:'隶书'; font-size: 35px;">地理</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($diliShow[0]['title']); ?>" src="<?php echo ($diliShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($diliShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[0]["id"]); ?>"=""><?php echo ($diliShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($diliShow[1]['title']); ?>" src="<?php echo ($diliShow[1]['pic']); ?>" _src="<?php echo ($diliShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($diliShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[1]["id"]); ?>"=""><?php echo ($diliShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($diliShow[2]['title']); ?>" src="<?php echo ($diliShow[2]['pic']); ?>" _src="<?php echo ($diliShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($diliShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[2]["id"]); ?>"=""><?php echo ($diliShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($diliShow[3]['title']); ?>" src="<?php echo ($diliShow[3]['pic']); ?>" _src="<?php echo ($diliShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($diliShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[3]["id"]); ?>"=""><?php echo ($diliShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($diliShow[4]['title']); ?>" src="<?php echo ($diliShow[4]['pic']); ?>" _src="<?php echo ($diliShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($diliShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[4]["id"]); ?>"=""><?php echo ($diliShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($diliShow[5]['title']); ?>" src="<?php echo ($diliShow[5]['pic']); ?>" _src="<?php echo ($diliShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($diliShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[5]["id"]); ?>"=""><?php echo ($diliShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($diliShow[6]['title']); ?>" src="<?php echo ($diliShow[6]['pic']); ?>" _src="<?php echo ($diliShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($diliShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[6]["id"]); ?>"=""><?php echo ($diliShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($diliShow[7]['title']); ?>" src="<?php echo ($diliShow[7]['pic']); ?>" _src="<?php echo ($diliShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($diliShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[7]["id"]); ?>"=""><?php echo ($diliShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($diliShow[8]['title']); ?>" src="<?php echo ($diliShow[8]['pic']); ?>" _src="<?php echo ($diliShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($diliShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[8]["id"]); ?>"=""><?php echo ($diliShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Dili/index');?>" class="yk-drawer-title">地理榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($diliShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($diliShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Zhengzhi/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/zhengzhi.png" /><font style="font-family:'隶书'; font-size: 35px;">政治</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhengzhiShow[0]['title']); ?>" src="<?php echo ($zhengzhiShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhengzhiShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[0]["id"]); ?>"=""><?php echo ($zhengzhiShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhengzhiShow[1]['title']); ?>" src="<?php echo ($zhengzhiShow[1]['pic']); ?>" _src="<?php echo ($zhengzhiShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhengzhiShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[1]["id"]); ?>"=""><?php echo ($zhengzhiShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhengzhiShow[2]['title']); ?>" src="<?php echo ($zhengzhiShow[2]['pic']); ?>" _src="<?php echo ($zhengzhiShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhengzhiShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[2]["id"]); ?>"=""><?php echo ($zhengzhiShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhengzhiShow[3]['title']); ?>" src="<?php echo ($zhengzhiShow[3]['pic']); ?>" _src="<?php echo ($zhengzhiShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhengzhiShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[3]["id"]); ?>"=""><?php echo ($zhengzhiShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhengzhiShow[4]['title']); ?>" src="<?php echo ($zhengzhiShow[4]['pic']); ?>" _src="<?php echo ($zhengzhiShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhengzhiShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[4]["id"]); ?>"=""><?php echo ($zhengzhiShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhengzhiShow[5]['title']); ?>" src="<?php echo ($zhengzhiShow[5]['pic']); ?>" _src="<?php echo ($zhengzhiShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhengzhiShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[5]["id"]); ?>"=""><?php echo ($zhengzhiShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zhengzhiShow[6]['title']); ?>" src="<?php echo ($zhengzhiShow[6]['pic']); ?>" _src="<?php echo ($zhengzhiShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($zhengzhiShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[6]["id"]); ?>"=""><?php echo ($zhengzhiShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zhengzhiShow[7]['title']); ?>" src="<?php echo ($zhengzhiShow[7]['pic']); ?>" _src="<?php echo ($zhengzhiShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($zhengzhiShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[7]["id"]); ?>"=""><?php echo ($zhengzhiShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zhengzhiShow[8]['title']); ?>" src="<?php echo ($zhengzhiShow[8]['pic']); ?>" _src="<?php echo ($zhengzhiShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($zhengzhiShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[8]["id"]); ?>"=""><?php echo ($zhengzhiShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Zhengzhi/index');?>" class="yk-drawer-title">政治榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhengzhiShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($zhengzhiShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Jisuanji/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/jisuanji.png" /><font style="font-family:'隶书'; font-size: 35px;">计算机科学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jisuanjiShow[0]['title']); ?>" src="<?php echo ($jisuanjiShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jisuanjiShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[0]["id"]); ?>"=""><?php echo ($jisuanjiShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jisuanjiShow[1]['title']); ?>" src="<?php echo ($jisuanjiShow[1]['pic']); ?>" _src="<?php echo ($jisuanjiShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($jisuanjiShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[1]["id"]); ?>"=""><?php echo ($jisuanjiShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jisuanjiShow[2]['title']); ?>" src="<?php echo ($jisuanjiShow[2]['pic']); ?>" _src="<?php echo ($jisuanjiShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jisuanjiShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[2]["id"]); ?>"=""><?php echo ($jisuanjiShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jisuanjiShow[3]['title']); ?>" src="<?php echo ($jisuanjiShow[3]['pic']); ?>" _src="<?php echo ($jisuanjiShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jisuanjiShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[3]["id"]); ?>"=""><?php echo ($jisuanjiShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jisuanjiShow[4]['title']); ?>" src="<?php echo ($jisuanjiShow[4]['pic']); ?>" _src="<?php echo ($jisuanjiShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($jisuanjiShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[4]["id"]); ?>"=""><?php echo ($jisuanjiShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jisuanjiShow[5]['title']); ?>" src="<?php echo ($jisuanjiShow[5]['pic']); ?>" _src="<?php echo ($jisuanjiShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jisuanjiShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[5]["id"]); ?>"=""><?php echo ($jisuanjiShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jisuanjiShow[6]['title']); ?>" src="<?php echo ($jisuanjiShow[6]['pic']); ?>" _src="<?php echo ($jisuanjiShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($jisuanjiShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[6]["id"]); ?>"=""><?php echo ($jisuanjiShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jisuanjiShow[7]['title']); ?>" src="<?php echo ($jisuanjiShow[7]['pic']); ?>" _src="<?php echo ($jisuanjiShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($jisuanjiShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[7]["id"]); ?>"=""><?php echo ($jisuanjiShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jisuanjiShow[8]['title']); ?>" src="<?php echo ($jisuanjiShow[8]['pic']); ?>" _src="<?php echo ($jisuanjiShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($jisuanjiShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[8]["id"]); ?>"=""><?php echo ($jisuanjiShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Jisuanji/index');?>" class="yk-drawer-title">计算机科学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jisuanjiShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($jisuanjiShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Zhexue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/zhexue.png" /><font style="font-family:'隶书'; font-size: 35px;">哲学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhexueShow[0]['title']); ?>" src="<?php echo ($zhexueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhexueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[0]["id"]); ?>"=""><?php echo ($zhexueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhexueShow[1]['title']); ?>" src="<?php echo ($zhexueShow[1]['pic']); ?>" _src="<?php echo ($zhexueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhexueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[1]["id"]); ?>"=""><?php echo ($zhexueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhexueShow[2]['title']); ?>" src="<?php echo ($zhexueShow[2]['pic']); ?>" _src="<?php echo ($zhexueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhexueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[2]["id"]); ?>"=""><?php echo ($zhexueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhexueShow[3]['title']); ?>" src="<?php echo ($zhexueShow[3]['pic']); ?>" _src="<?php echo ($zhexueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhexueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[3]["id"]); ?>"=""><?php echo ($zhexueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhexueShow[4]['title']); ?>" src="<?php echo ($zhexueShow[4]['pic']); ?>" _src="<?php echo ($zhexueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhexueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[4]["id"]); ?>"=""><?php echo ($zhexueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zhexueShow[5]['title']); ?>" src="<?php echo ($zhexueShow[5]['pic']); ?>" _src="<?php echo ($zhexueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zhexueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[5]["id"]); ?>"=""><?php echo ($zhexueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zhexueShow[6]['title']); ?>" src="<?php echo ($zhexueShow[6]['pic']); ?>" _src="<?php echo ($zhexueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($zhexueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[6]["id"]); ?>"=""><?php echo ($zhexueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zhexueShow[7]['title']); ?>" src="<?php echo ($zhexueShow[7]['pic']); ?>" _src="<?php echo ($zhexueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($zhexueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[7]["id"]); ?>"=""><?php echo ($zhexueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zhexueShow[8]['title']); ?>" src="<?php echo ($zhexueShow[8]['pic']); ?>" _src="<?php echo ($zhexueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($zhexueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[8]["id"]); ?>"=""><?php echo ($zhexueShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Zhexue/index');?>" class="yk-drawer-title">哲学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zhexueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($zhexueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ===============================广告位========================== -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Falv/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/faxue.png" /><font style="font-family:'隶书'; font-size: 35px;">法学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处有三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($falvShow[0]['title']); ?>" src="<?php echo ($falvShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($falvShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[0]["id"]); ?>"=""><?php echo ($falvShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($falvShow[1]['title']); ?>" src="<?php echo ($falvShow[1]['pic']); ?>" _src="<?php echo ($falvShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($falvShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[1]["id"]); ?>"=""><?php echo ($falvShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($falvShow[2]['title']); ?>" src="<?php echo ($falvShow[2]['pic']); ?>" _src="<?php echo ($falvShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($falvShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[2]["id"]); ?>"=""><?php echo ($falvShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($falvShow[3]['title']); ?>" src="<?php echo ($falvShow[3]['pic']); ?>" _src="<?php echo ($falvShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($falvShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[3]["id"]); ?>"=""><?php echo ($falvShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($falvShow[4]['title']); ?>" src="<?php echo ($falvShow[4]['pic']); ?>" _src="<?php echo ($falvShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($falvShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[4]["id"]); ?>"=""><?php echo ($falvShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($falvShow[5]['title']); ?>" src="<?php echo ($falvShow[5]['pic']); ?>" _src="<?php echo ($falvShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($falvShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[5]["id"]); ?>"=""><?php echo ($falvShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($falvShow[6]['title']); ?>" src="<?php echo ($falvShow[6]['pic']); ?>" _src="<?php echo ($falvShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($falvShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[6]["id"]); ?>"=""><?php echo ($falvShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($falvShow[7]['title']); ?>" src="<?php echo ($falvShow[7]['pic']); ?>" _src="<?php echo ($falvShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($falvShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[7]["id"]); ?>"=""><?php echo ($falvShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($falvShow[8]['title']); ?>" src="<?php echo ($falvShow[8]['pic']); ?>" _src="<?php echo ($falvShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($falvShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[8]["id"]); ?>"=""><?php echo ($falvShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Falv/index');?>" class="yk-drawer-title">法学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($falvShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($falvShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ===============================广告位============================== -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>					
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Shehui/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/shehui.png" /><font style="font-family:'隶书'; font-size: 35px;">社会学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shehuiShow[0]['title']); ?>" src="<?php echo ($shehuiShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shehuiShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[0]["id"]); ?>"=""><?php echo ($shehuiShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shehuiShow[1]['title']); ?>" src="<?php echo ($shehuiShow[1]['pic']); ?>" _src="<?php echo ($shehuiShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shehuiShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[1]["id"]); ?>"=""><?php echo ($shehuiShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shehuiShow[2]['title']); ?>" src="<?php echo ($shehuiShow[2]['pic']); ?>" _src="<?php echo ($shehuiShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shehuiShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[2]["id"]); ?>"=""><?php echo ($shehuiShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shehuiShow[3]['title']); ?>" src="<?php echo ($shehuiShow[3]['pic']); ?>" _src="<?php echo ($shehuiShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shehuiShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[3]["id"]); ?>"=""><?php echo ($shehuiShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shehuiShow[4]['title']); ?>" src="<?php echo ($shehuiShow[4]['pic']); ?>" _src="<?php echo ($shehuiShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shehuiShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[4]["id"]); ?>"=""><?php echo ($shehuiShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shehuiShow[5]['title']); ?>" src="<?php echo ($shehuiShow[5]['pic']); ?>" _src="<?php echo ($shehuiShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shehuiShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[5]["id"]); ?>"=""><?php echo ($shehuiShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shehuiShow[6]['title']); ?>" src="<?php echo ($shehuiShow[6]['pic']); ?>" _src="<?php echo ($shehuiShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shehuiShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[6]["id"]); ?>"=""><?php echo ($shehuiShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shehuiShow[7]['title']); ?>" src="<?php echo ($shehuiShow[7]['pic']); ?>" _src="<?php echo ($shehuiShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($shehuiShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[7]["id"]); ?>"=""><?php echo ($shehuiShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shehuiShow[8]['title']); ?>" src="<?php echo ($shehuiShow[8]['pic']); ?>" _src="<?php echo ($shehuiShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shehuiShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[8]["id"]); ?>"=""><?php echo ($shehuiShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Shehui/index');?>" class="yk-drawer-title">社会学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shehuiShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($shehuiShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- =================================广告位========================== -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>						
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Shangye/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/shangye.png" /><font style="font-family:'隶书'; font-size: 35px;">商业</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shangyeShow[0]['title']); ?>" src="<?php echo ($shangyeShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shangyeShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[0]["id"]); ?>"=""><?php echo ($shangyeShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shangyeShow[1]['title']); ?>" src="<?php echo ($shangyeShow[1]['pic']); ?>" _src="<?php echo ($shangyeShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shangyeShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[1]["id"]); ?>"=""><?php echo ($shangyeShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shangyeShow[2]['title']); ?>" src="<?php echo ($shangyeShow[2]['pic']); ?>" _src="<?php echo ($shangyeShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shangyeShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[2]["id"]); ?>"=""><?php echo ($shangyeShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shangyeShow[3]['title']); ?>" src="<?php echo ($shangyeShow[3]['pic']); ?>" _src="<?php echo ($shangyeShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shangyeShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[3]["id"]); ?>"=""><?php echo ($shangyeShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shangyeShow[4]['title']); ?>" src="<?php echo ($shangyeShow[4]['pic']); ?>" _src="<?php echo ($shangyeShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($shangyeShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[4]["id"]); ?>"=""><?php echo ($shangyeShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($shangyeShow[5]['title']); ?>" src="<?php echo ($shangyeShow[5]['pic']); ?>" _src="<?php echo ($shangyeShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($shangyeShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[5]["id"]); ?>"=""><?php echo ($shangyeShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shangyeShow[6]['title']); ?>" src="<?php echo ($shangyeShow[6]['pic']); ?>" _src="<?php echo ($shangyeShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shangyeShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[6]["id"]); ?>"=""><?php echo ($shangyeShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shangyeShow[7]['title']); ?>" src="<?php echo ($shangyeShow[7]['pic']); ?>" _src="<?php echo ($shangyeShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($shangyeShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[7]["id"]); ?>"=""><?php echo ($shangyeShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($shangyeShow[8]['title']); ?>" src="<?php echo ($shangyeShow[8]['pic']); ?>" _src="<?php echo ($shangyeShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($shangyeShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[8]["id"]); ?>"=""><?php echo ($shangyeShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Shangye/index');?>" class="yk-drawer-title">商业榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($shangyeShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($shangyeShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- =======================广告位=========================== -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Chuanmei/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/chuanmei.png" /><font style="font-family:'隶书'; font-size: 35px;">传媒</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意该处有三个链接没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($chuanmeiShow[0]['title']); ?>" src="<?php echo ($chuanmeiShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($chuanmeiShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[0]["id"]); ?>"=""><?php echo ($chuanmeiShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($chuanmeiShow[1]['title']); ?>" src="<?php echo ($chuanmeiShow[1]['pic']); ?>" _src="<?php echo ($chuanmeiShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($chuanmeiShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[1]["id"]); ?>"=""><?php echo ($chuanmeiShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($chuanmeiShow[2]['title']); ?>" src="<?php echo ($chuanmeiShow[2]['pic']); ?>" _src="<?php echo ($chuanmeiShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($chuanmeiShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[2]["id"]); ?>"=""><?php echo ($chuanmeiShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($chuanmeiShow[3]['title']); ?>" src="<?php echo ($chuanmeiShow[3]['pic']); ?>" _src="<?php echo ($chuanmeiShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($chuanmeiShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[3]["id"]); ?>"=""><?php echo ($chuanmeiShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($chuanmeiShow[4]['title']); ?>" src="<?php echo ($chuanmeiShow[4]['pic']); ?>" _src="<?php echo ($chuanmeiShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($chuanmeiShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[4]["id"]); ?>"=""><?php echo ($chuanmeiShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($chuanmeiShow[5]['title']); ?>" src="<?php echo ($chuanmeiShow[5]['pic']); ?>" _src="<?php echo ($chuanmeiShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($chuanmeiShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[5]["id"]); ?>"=""><?php echo ($chuanmeiShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($chuanmeiShow[6]['title']); ?>" src="<?php echo ($chuanmeiShow[6]['pic']); ?>" _src="<?php echo ($chuanmeiShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($chuanmeiShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[6]["id"]); ?>"=""><?php echo ($chuanmeiShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($chuanmeiShow[7]['title']); ?>" src="<?php echo ($chuanmeiShow[7]['pic']); ?>" _src="<?php echo ($chuanmeiShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($chuanmeiShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[7]["id"]); ?>"=""><?php echo ($chuanmeiShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($chuanmeiShow[8]['title']); ?>" src="<?php echo ($chuanmeiShow[8]['pic']); ?>" _src="<?php echo ($chuanmeiShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($chuanmeiShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[8]["id"]); ?>"=""><?php echo ($chuanmeiShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Chuanmei/index');?>" class="yk-drawer-title">传媒榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($chuanmeiShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($chuanmeiShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- =======================================广告位===================================== -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Jingji/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/jingjixue.png" /><font style="font-family:'隶书'; font-size: 35px;">经济学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jingjiShow[0]['title']); ?>" src="<?php echo ($jingjiShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jingjiShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[0]["id"]); ?>"=""><?php echo ($jingjiShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jingjiShow[1]['title']); ?>" src="<?php echo ($jingjiShow[1]['pic']); ?>" _src="<?php echo ($jingjiShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($jingjiShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[1]["id"]); ?>"=""><?php echo ($jingjiShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jingjiShow[2]['title']); ?>" src="<?php echo ($jingjiShow[2]['pic']); ?>" _src="<?php echo ($jingjiShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jingjiShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[2]["id"]); ?>"=""><?php echo ($jingjiShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jingjiShow[3]['title']); ?>" src="<?php echo ($jingjiShow[3]['pic']); ?>" _src="<?php echo ($jingjiShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jingjiShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[3]["id"]); ?>"=""><?php echo ($jingjiShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jingjiShow[4]['title']); ?>" src="<?php echo ($jingjiShow[4]['pic']); ?>" _src="<?php echo ($jingjiShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($jingjiShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[4]["id"]); ?>"=""><?php echo ($jingjiShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jingjiShow[5]['title']); ?>" src="<?php echo ($jingjiShow[5]['pic']); ?>" _src="<?php echo ($jingjiShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jingjiShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[5]["id"]); ?>"=""><?php echo ($jingjiShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jingjiShow[6]['title']); ?>" src="<?php echo ($jingjiShow[6]['pic']); ?>" _src="<?php echo ($jingjiShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($jingjiShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[6]["id"]); ?>"=""><?php echo ($jingjiShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jingjiShow[7]['title']); ?>" src="<?php echo ($jingjiShow[7]['pic']); ?>" _src="<?php echo ($jingjiShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($jingjiShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[7]["id"]); ?>"=""><?php echo ($jingjiShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jingjiShow[8]['title']); ?>" src="<?php echo ($jingjiShow[8]['pic']); ?>" _src="<?php echo ($jingjiShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($jingjiShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[8]["id"]); ?>"=""><?php echo ($jingjiShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Jingji/index');?>" class="yk-drawer-title">经济学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jingjiShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($jingjiShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Yixue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/yixue.png" /><font style="font-family:'隶书'; font-size: 35px;">医学与健康</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yixueShow[0]['title']); ?>" src="<?php echo ($yixueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yixueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[0]["id"]); ?>"=""><?php echo ($yixueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yixueShow[1]['title']); ?>" src="<?php echo ($yixueShow[1]['pic']); ?>" _src="<?php echo ($yixueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($yixueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[1]["id"]); ?>"=""><?php echo ($yixueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yixueShow[2]['title']); ?>" src="<?php echo ($yixueShow[2]['pic']); ?>" _src="<?php echo ($yixueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yixueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[2]["id"]); ?>"=""><?php echo ($yixueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yixueShow[3]['title']); ?>" src="<?php echo ($yixueShow[3]['pic']); ?>" _src="<?php echo ($yixueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yixueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[3]["id"]); ?>"=""><?php echo ($yixueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yixueShow[4]['title']); ?>" src="<?php echo ($yixueShow[4]['pic']); ?>" _src="<?php echo ($yixueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($yixueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[4]["id"]); ?>"=""><?php echo ($yixueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yixueShow[5]['title']); ?>" src="<?php echo ($yixueShow[5]['pic']); ?>" _src="<?php echo ($yixueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yixueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[5]["id"]); ?>"=""><?php echo ($yixueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yixueShow[6]['title']); ?>" src="<?php echo ($yixueShow[6]['pic']); ?>" _src="<?php echo ($yixueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($yixueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[6]["id"]); ?>"=""><?php echo ($yixueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yixueShow[7]['title']); ?>" src="<?php echo ($yixueShow[7]['pic']); ?>" _src="<?php echo ($yixueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($yixueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[7]["id"]); ?>"=""><?php echo ($yixueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yixueShow[8]['title']); ?>" src="<?php echo ($yixueShow[8]['pic']); ?>" _src="<?php echo ($yixueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($yixueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[8]["id"]); ?>"=""><?php echo ($yixueShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Yixue/index');?>" class="yk-drawer-title">医学&健康榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yixueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($yixueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ========================广告位========================= -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Yishu/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/meishu.png" /><font style="font-family:'隶书'; font-size: 35px;">艺术学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yishuShow[0]['title']); ?>" src="<?php echo ($yishuShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yishuShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[0]["id"]); ?>"=""><?php echo ($yishuShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yishuShow[1]['title']); ?>" src="<?php echo ($yishuShow[1]['pic']); ?>" _src="<?php echo ($yishuShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($yishuShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[1]["id"]); ?>"=""><?php echo ($yishuShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yishuShow[2]['title']); ?>" src="<?php echo ($yishuShow[2]['pic']); ?>" _src="<?php echo ($yishuShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yishuShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[2]["id"]); ?>"=""><?php echo ($yishuShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yishuShow[3]['title']); ?>" src="<?php echo ($yishuShow[3]['pic']); ?>" _src="<?php echo ($yishuShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yishuShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[3]["id"]); ?>"=""><?php echo ($yishuShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yishuShow[4]['title']); ?>" src="<?php echo ($yishuShow[4]['pic']); ?>" _src="<?php echo ($yishuShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($yishuShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[4]["id"]); ?>"=""><?php echo ($yishuShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($yishuShow[5]['title']); ?>" src="<?php echo ($yishuShow[5]['pic']); ?>" _src="<?php echo ($yishuShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($yishuShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[5]["id"]); ?>"=""><?php echo ($yishuShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yishuShow[6]['title']); ?>" src="<?php echo ($yishuShow[6]['pic']); ?>" _src="<?php echo ($yishuShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($yishuShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[6]["id"]); ?>"=""><?php echo ($yishuShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yishuShow[7]['title']); ?>" src="<?php echo ($yishuShow[7]['pic']); ?>" _src="<?php echo ($yishuShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($yishuShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[7]["id"]); ?>"=""><?php echo ($yishuShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($yishuShow[8]['title']); ?>" src="<?php echo ($yishuShow[8]['pic']); ?>" _src="<?php echo ($yishuShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($yishuShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[8]["id"]); ?>"=""><?php echo ($yishuShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Yishu/index');?>" class="yk-drawer-title">艺术榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($yishuShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($yishuShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Gongxue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/gongxue.png" /><font style="font-family:'隶书'; font-size: 35px;">工学类</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($gongxueShow[0]['title']); ?>" src="<?php echo ($gongxueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($gongxueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[0]["id"]); ?>"=""><?php echo ($gongxueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($gongxueShow[1]['title']); ?>" src="<?php echo ($gongxueShow[1]['pic']); ?>" _src="<?php echo ($gongxueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($gongxueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[1]["id"]); ?>"=""><?php echo ($gongxueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($gongxueShow[2]['title']); ?>" src="<?php echo ($gongxueShow[2]['pic']); ?>" _src="<?php echo ($gongxueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($gongxueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[2]["id"]); ?>"=""><?php echo ($gongxueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($gongxueShow[3]['title']); ?>" src="<?php echo ($gongxueShow[3]['pic']); ?>" _src="<?php echo ($gongxueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($gongxueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[3]["id"]); ?>"=""><?php echo ($gongxueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($gongxueShow[4]['title']); ?>" src="<?php echo ($gongxueShow[4]['pic']); ?>" _src="<?php echo ($gongxueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($gongxueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[4]["id"]); ?>"=""><?php echo ($gongxueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($gongxueShow[5]['title']); ?>" src="<?php echo ($gongxueShow[5]['pic']); ?>" _src="<?php echo ($gongxueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($gongxueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[5]["id"]); ?>"=""><?php echo ($gongxueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($gongxueShow[6]['title']); ?>" src="<?php echo ($gongxueShow[6]['pic']); ?>" _src="<?php echo ($gongxueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($gongxueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[6]["id"]); ?>"=""><?php echo ($gongxueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($gongxueShow[7]['title']); ?>" src="<?php echo ($gongxueShow[7]['pic']); ?>" _src="<?php echo ($gongxueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($gongxueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[7]["id"]); ?>"=""><?php echo ($gongxueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($gongxueShow[8]['title']); ?>" src="<?php echo ($gongxueShow[8]['pic']); ?>" _src="<?php echo ($gongxueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($gongxueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[8]["id"]); ?>"=""><?php echo ($gongxueShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Gongxue/index');?>" class="yk-drawer-title">工学类榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($gongxueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($gongxueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Lixue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/lixue.png" /><font style="font-family:'隶书'; font-size: 35px;">理学类</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lixueShow[0]['title']); ?>" src="<?php echo ($lixueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lixueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[0]["id"]); ?>"=""><?php echo ($lixueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lixueShow[1]['title']); ?>" src="<?php echo ($lixueShow[1]['pic']); ?>" _src="<?php echo ($lixueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($lixueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[1]["id"]); ?>"=""><?php echo ($lixueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lixueShow[2]['title']); ?>" src="<?php echo ($lixueShow[2]['pic']); ?>" _src="<?php echo ($lixueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lixueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[2]["id"]); ?>"=""><?php echo ($lixueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lixueShow[3]['title']); ?>" src="<?php echo ($lixueShow[3]['pic']); ?>" _src="<?php echo ($lixueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lixueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[3]["id"]); ?>"=""><?php echo ($lixueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lixueShow[4]['title']); ?>" src="<?php echo ($lixueShow[4]['pic']); ?>" _src="<?php echo ($lixueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($lixueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[4]["id"]); ?>"=""><?php echo ($lixueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($lixueShow[5]['title']); ?>" src="<?php echo ($lixueShow[5]['pic']); ?>" _src="<?php echo ($lixueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($lixueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[5]["id"]); ?>"=""><?php echo ($lixueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($lixueShow[6]['title']); ?>" src="<?php echo ($lixueShow[6]['pic']); ?>" _src="<?php echo ($lixueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($lixueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[6]["id"]); ?>"=""><?php echo ($lixueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($lixueShow[7]['title']); ?>" src="<?php echo ($lixueShow[7]['pic']); ?>" _src="<?php echo ($lixueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($lixueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[7]["id"]); ?>"=""><?php echo ($lixueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($lixueShow[8]['title']); ?>" src="<?php echo ($lixueShow[8]['pic']); ?>" _src="<?php echo ($lixueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($lixueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[8]["id"]); ?>"=""><?php echo ($lixueShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Lixue/index');?>" class="yk-drawer-title">理学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($lixueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($lixueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Nongxue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/nongxue.png" /><font style="font-family:'隶书'; font-size: 35px;">农学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($nongxueShow[0]['title']); ?>" src="<?php echo ($nongxueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($nongxueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[0]["id"]); ?>"=""><?php echo ($nongxueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($nongxueShow[1]['title']); ?>" src="<?php echo ($nongxueShow[1]['pic']); ?>" _src="<?php echo ($nongxueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($nongxueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[1]["id"]); ?>"=""><?php echo ($nongxueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($nongxueShow[2]['title']); ?>" src="<?php echo ($nongxueShow[2]['pic']); ?>" _src="<?php echo ($nongxueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($nongxueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[2]["id"]); ?>"=""><?php echo ($nongxueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($nongxueShow[3]['title']); ?>" src="<?php echo ($nongxueShow[3]['pic']); ?>" _src="<?php echo ($nongxueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($nongxueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[3]["id"]); ?>"=""><?php echo ($nongxueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($nongxueShow[4]['title']); ?>" src="<?php echo ($nongxueShow[4]['pic']); ?>" _src="<?php echo ($nongxueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($nongxueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[4]["id"]); ?>"=""><?php echo ($nongxueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($nongxueShow[5]['title']); ?>" src="<?php echo ($nongxueShow[5]['pic']); ?>" _src="<?php echo ($nongxueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($nongxueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[5]["id"]); ?>"=""><?php echo ($nongxueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($nongxueShow[6]['title']); ?>" src="<?php echo ($nongxueShow[6]['pic']); ?>" _src="<?php echo ($nongxueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($nongxueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[6]["id"]); ?>"=""><?php echo ($nongxueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($nongxueShow[7]['title']); ?>" src="<?php echo ($nongxueShow[7]['pic']); ?>" _src="<?php echo ($nongxueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($nongxueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[7]["id"]); ?>"=""><?php echo ($nongxueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($nongxueShow[8]['title']); ?>" src="<?php echo ($nongxueShow[8]['pic']); ?>" _src="<?php echo ($nongxueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($nongxueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[8]["id"]); ?>"=""><?php echo ($nongxueShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Nongxue/index');?>" class="yk-drawer-title">农学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($nongxueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($nongxueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Junshi/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/junshixue.png" /><font style="font-family:'隶书'; font-size: 35px;">军事学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($junshiShow[0]['title']); ?>" src="<?php echo ($junshiShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($junshiShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[0]["id"]); ?>"=""><?php echo ($junshiShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($junshiShow[1]['title']); ?>" src="<?php echo ($junshiShow[1]['pic']); ?>" _src="<?php echo ($junshiShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($junshiShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[1]["id"]); ?>"=""><?php echo ($junshiShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($junshiShow[2]['title']); ?>" src="<?php echo ($junshiShow[2]['pic']); ?>" _src="<?php echo ($junshiShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($junshiShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[2]["id"]); ?>"=""><?php echo ($junshiShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($junshiShow[3]['title']); ?>" src="<?php echo ($junshiShow[3]['pic']); ?>" _src="<?php echo ($junshiShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($junshiShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[3]["id"]); ?>"=""><?php echo ($junshiShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($junshiShow[4]['title']); ?>" src="<?php echo ($junshiShow[4]['pic']); ?>" _src="<?php echo ($junshiShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($junshiShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[4]["id"]); ?>"=""><?php echo ($junshiShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($junshiShow[5]['title']); ?>" src="<?php echo ($junshiShow[5]['pic']); ?>" _src="<?php echo ($junshiShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($junshiShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[5]["id"]); ?>"=""><?php echo ($junshiShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($junshiShow[6]['title']); ?>" src="<?php echo ($junshiShow[6]['pic']); ?>" _src="<?php echo ($junshiShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($junshiShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[6]["id"]); ?>"=""><?php echo ($junshiShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($junshiShow[7]['title']); ?>" src="<?php echo ($junshiShow[7]['pic']); ?>" _src="<?php echo ($junshiShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($junshiShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[7]["id"]); ?>"=""><?php echo ($junshiShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($junshiShow[8]['title']); ?>" src="<?php echo ($junshiShow[8]['pic']); ?>" _src="<?php echo ($junshiShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($junshiShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[8]["id"]); ?>"=""><?php echo ($junshiShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Junshi/index');?>" class="yk-drawer-title">军事榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($junshiShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($junshiShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Guanli/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/guanlixue.png" /><font style="font-family:'隶书'; font-size: 35px;">管理学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($guanliShow[0]['title']); ?>" src="<?php echo ($guanliShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($guanliShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[0]["id"]); ?>"=""><?php echo ($guanliShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($guanliShow[1]['title']); ?>" src="<?php echo ($guanliShow[1]['pic']); ?>" _src="<?php echo ($guanliShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($guanliShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[1]["id"]); ?>"=""><?php echo ($guanliShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($guanliShow[2]['title']); ?>" src="<?php echo ($guanliShow[2]['pic']); ?>" _src="<?php echo ($guanliShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($guanliShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[2]["id"]); ?>"=""><?php echo ($guanliShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($guanliShow[3]['title']); ?>" src="<?php echo ($guanliShow[3]['pic']); ?>" _src="<?php echo ($guanliShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($guanliShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[3]["id"]); ?>"=""><?php echo ($guanliShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($guanliShow[4]['title']); ?>" src="<?php echo ($guanliShow[4]['pic']); ?>" _src="<?php echo ($guanliShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($guanliShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[4]["id"]); ?>"=""><?php echo ($guanliShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($guanliShow[5]['title']); ?>" src="<?php echo ($guanliShow[5]['pic']); ?>" _src="<?php echo ($guanliShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($guanliShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[5]["id"]); ?>"=""><?php echo ($guanliShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($guanliShow[6]['title']); ?>" src="<?php echo ($guanliShow[6]['pic']); ?>" _src="<?php echo ($guanliShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($guanliShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[6]["id"]); ?>"=""><?php echo ($guanliShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($guanliShow[7]['title']); ?>" src="<?php echo ($guanliShow[7]['pic']); ?>" _src="<?php echo ($guanliShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($guanliShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[7]["id"]); ?>"=""><?php echo ($guanliShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($guanliShow[8]['title']); ?>" src="<?php echo ($guanliShow[8]['pic']); ?>" _src="<?php echo ($guanliShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($guanliShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[8]["id"]); ?>"=""><?php echo ($guanliShow[8]['title']); ?></a>
               </div>
               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Guanli/index');?>" class="yk-drawer-title">管理学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($guanliShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($guanliShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- +++++++++++++++++++++++++++++++++++++++广告位+++++++++++++++++++++++++++++++++++ -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Jiaoyu/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/jiaoyuxue.png" /><font style="font-family:'隶书'; font-size: 35px;">教育学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jiaoyuShow[0]['title']); ?>" src="<?php echo ($jiaoyuShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jiaoyuShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[0]["id"]); ?>"=""><?php echo ($jiaoyuShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jiaoyuShow[1]['title']); ?>" src="<?php echo ($jiaoyuShow[1]['pic']); ?>" _src="<?php echo ($jiaoyuShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($jiaoyuShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[1]["id"]); ?>"=""><?php echo ($jiaoyuShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jiaoyuShow[2]['title']); ?>" src="<?php echo ($jiaoyuShow[2]['pic']); ?>" _src="<?php echo ($jiaoyuShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jiaoyuShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[2]["id"]); ?>"=""><?php echo ($jiaoyuShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jiaoyuShow[3]['title']); ?>" src="<?php echo ($jiaoyuShow[3]['pic']); ?>" _src="<?php echo ($jiaoyuShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jiaoyuShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[3]["id"]); ?>"=""><?php echo ($jiaoyuShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jiaoyuShow[4]['title']); ?>" src="<?php echo ($jiaoyuShow[4]['pic']); ?>" _src="<?php echo ($jiaoyuShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($jiaoyuShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[4]["id"]); ?>"=""><?php echo ($jiaoyuShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($jiaoyuShow[5]['title']); ?>" src="<?php echo ($jiaoyuShow[5]['pic']); ?>" _src="<?php echo ($jiaoyuShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($jiaoyuShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[5]["id"]); ?>"=""><?php echo ($jiaoyuShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jiaoyuShow[6]['title']); ?>" src="<?php echo ($jiaoyuShow[6]['pic']); ?>" _src="<?php echo ($jiaoyuShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($jiaoyuShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[6]["id"]); ?>"=""><?php echo ($jiaoyuShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jiaoyuShow[7]['title']); ?>" src="<?php echo ($jiaoyuShow[7]['pic']); ?>" _src="<?php echo ($jiaoyuShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($jiaoyuShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[7]["id"]); ?>"=""><?php echo ($jiaoyuShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($jiaoyuShow[8]['title']); ?>" src="<?php echo ($jiaoyuShow[8]['pic']); ?>" _src="<?php echo ($jiaoyuShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($jiaoyuShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[8]["id"]); ?>"=""><?php echo ($jiaoyuShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Jiaoyu/index');?>" class="yk-drawer-title">教育学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($jiaoyuShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($jiaoyuShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ===========================广告位============================= -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Zongjiao/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/zongjiao.png" /><font style="font-family:'隶书'; font-size: 35px;">宗教学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zongjiaoShow[0]['title']); ?>" src="<?php echo ($zongjiaoShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zongjiaoShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[0]["id"]); ?>"=""><?php echo ($zongjiaoShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zongjiaoShow[1]['title']); ?>" src="<?php echo ($zongjiaoShow[1]['pic']); ?>" _src="<?php echo ($zongjiaoShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($zongjiaoShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[1]["id"]); ?>"=""><?php echo ($zongjiaoShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zongjiaoShow[2]['title']); ?>" src="<?php echo ($zongjiaoShow[2]['pic']); ?>" _src="<?php echo ($zongjiaoShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zongjiaoShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[2]["id"]); ?>"=""><?php echo ($zongjiaoShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zongjiaoShow[3]['title']); ?>" src="<?php echo ($zongjiaoShow[3]['pic']); ?>" _src="<?php echo ($zongjiaoShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zongjiaoShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[3]["id"]); ?>"=""><?php echo ($zongjiaoShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zongjiaoShow[4]['title']); ?>" src="<?php echo ($zongjiaoShow[4]['pic']); ?>" _src="<?php echo ($zongjiaoShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($zongjiaoShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[4]["id"]); ?>"=""><?php echo ($zongjiaoShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($zongjiaoShow[5]['title']); ?>" src="<?php echo ($zongjiaoShow[5]['pic']); ?>" _src="<?php echo ($zongjiaoShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($zongjiaoShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[5]["id"]); ?>"=""><?php echo ($zongjiaoShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zongjiaoShow[6]['title']); ?>" src="<?php echo ($zongjiaoShow[6]['pic']); ?>" _src="<?php echo ($zongjiaoShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($zongjiaoShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[6]["id"]); ?>"=""><?php echo ($zongjiaoShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zongjiaoShow[7]['title']); ?>" src="<?php echo ($zongjiaoShow[7]['pic']); ?>" _src="<?php echo ($zongjiaoShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($zongjiaoShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[7]["id"]); ?>"=""><?php echo ($zongjiaoShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($zongjiaoShow[8]['title']); ?>" src="<?php echo ($zongjiaoShow[8]['pic']); ?>" _src="<?php echo ($zongjiaoShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($zongjiaoShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[8]["id"]); ?>"=""><?php echo ($zongjiaoShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Zongjiao/index');?>" class="yk-drawer-title">和为贵</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($zongjiaoShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($zongjiaoShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- ==========================广告位========================== -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
						<html>
 <head></head>
 <body>
  <div data-cname="电视剧" class="yk-row-index yk-drawer dragmodule">
   <div class="yk-row">
    <div class="yk-w970-col12 yk-w1190-col16 yk-drawer-box">
     <div id="m_205922" name="m_pos">
      <div class="yk-box">
       <div class="yk-head">
        <div class="yk-title">
         <span><a href="<?php echo U('Home/Xinlixue/index');?>" data-from="0-10" target="_blank" class="yk-drawer-title"><img src="/Public/Home/Img/index/xinlixue.png" /><font style="font-family:'隶书'; font-size: 35px;">心理学</font></a></span>
        </div>
        <div class="yk-append">
        </div>
        <div class="yk-extend"></div>
       </div>
       <div class="yk-body">
        <div contab="contab" id="tab_205922_1" style="">
         <div id="m_205810" name="m_pos">
          <div class="yk-body-hair">
           <div class="yk-AD yk-AD-145x30">
            <div id="m_205841" name="m_pos">
             <div id="ab_827" style="display: block;">
              <div class="AD_tipRT">
               <div style="top:0px; right:0px; width:150px;" class="tip_cont">
                <!-- 注意此处三个链接地址没填 -->
                <span target="_blank" href="" style="width:100px; height:25px; float:left; margin-left: 20px; margin-top: 4px;display:block; background:url() no-repeat; _background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='', sizingMethod='crop');"></span>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div id="m_205923" name="m_pos">
           <div class="yk-row">
            <div class="yk-col12">
             <div class="yk-row">
              <div class="yk-col8">
               <div _showid="299170" class="v v-large ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($xinlixueShow[0]['title']); ?>" src="<?php echo ($xinlixueShow[0]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($xinlixueShow[0]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[0]["id"]); ?>"=""></a>
                </div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[0]["id"]); ?>"=""><?php echo ($xinlixueShow[0]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="274371" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($xinlixueShow[1]['title']); ?>" src="<?php echo ($xinlixueShow[1]['pic']); ?>" _src="<?php echo ($xinlixueShow[1]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($xinlixueShow[1]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[1]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[1]["id"]); ?>"=""><?php echo ($xinlixueShow[1]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
               <div _showid="289419" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($xinlixueShow[2]['title']); ?>" src="<?php echo ($xinlixueShow[2]['pic']); ?>" _src="<?php echo ($xinlixueShow[2]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($xinlixueShow[2]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[2]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[2]["id"]); ?>"=""><?php echo ($xinlixueShow[2]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
             <div class="yk-row">
              <div class="yk-col4">
               <div _showid="278029" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($xinlixueShow[3]['title']); ?>" src="<?php echo ($xinlixueShow[3]['pic']); ?>" _src="<?php echo ($xinlixueShow[3]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($xinlixueShow[3]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[3]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[3]["id"]); ?>"=""><?php echo ($xinlixueShow[3]['title']); ?></a>
                 </div>


                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="297260" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($xinlixueShow[4]['title']); ?>" src="<?php echo ($xinlixueShow[4]['pic']); ?>" _src="<?php echo ($xinlixueShow[4]['pic']); ?>" />

                </div>
                <div class="v-link">
                 <a title="<?php echo ($xinlixueShow[4]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[4]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[4]["id"]); ?>"=""><?php echo ($xinlixueShow[4]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
              <div class="yk-col4">
               <div _showid="299822" class="v ishover" id="">
                <div class="v-thumb">
                 <img alt="<?php echo ($xinlixueShow[5]['title']); ?>" src="<?php echo ($xinlixueShow[5]['pic']); ?>" _src="<?php echo ($xinlixueShow[5]['pic']); ?>" />
                </div>
                <div class="v-link">
                 <a title="<?php echo ($xinlixueShow[5]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[5]["id"]); ?>"=""></a>
                </div>
                <div class="v-isdrama"></div>
                <div class="v-meta vb vb-oneline">
                 <div class="v-meta-title">
                  <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[5]["id"]); ?>"=""><?php echo ($xinlixueShow[5]['title']); ?></a>
                 </div>



                 <div class="v-meta-overlay"></div>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="yk-col4 yk-w970-hide">
             <div _showid="294754" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($xinlixueShow[6]['title']); ?>" src="<?php echo ($xinlixueShow[6]['pic']); ?>" _src="<?php echo ($xinlixueShow[6]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($xinlixueShow[6]['title']); ?>" target="video" data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[6]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="1-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[6]["id"]); ?>"=""><?php echo ($xinlixueShow[6]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="296138" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($xinlixueShow[7]['title']); ?>" src="<?php echo ($xinlixueShow[7]['pic']); ?>" _src="<?php echo ($xinlixueShow[7]['pic']); ?>" />

              </div>
              <div class="v-link">
               <a title="<?php echo ($xinlixueShow[7]['title']); ?>" target="video" data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[7]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="2-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[7]["id"]); ?>"=""><?php echo ($xinlixueShow[7]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
             <div _showid="299243" class="v ishover" id="">
              <div class="v-thumb">
               <img alt="<?php echo ($xinlixueShow[8]['title']); ?>" src="<?php echo ($xinlixueShow[8]['pic']); ?>" _src="<?php echo ($xinlixueShow[8]['pic']); ?>" />
              </div>
              <div class="v-link">
               <a title="<?php echo ($xinlixueShow[8]['title']); ?>" target="video" data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[8]["id"]); ?>"=""></a>
              </div>
              <div class="v-isdrama"></div>
              <div class="v-meta vb vb-oneline">
               <div class="v-meta-title">
                <a target="video" data-from="3-2" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[8]["id"]); ?>"=""><?php echo ($xinlixueShow[8]['title']); ?></a>
               </div>



               <div class="v-meta-overlay"></div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="yk-col6">
     <div class="yk-side-range">
      <div id="m_205929" name="m_pos">
       <div class="yk-box">
        <div class="yk-head">
         <div class="yk-append">
          <ul switchtype="hover" focus="tabControl" class="yk-tab   yk-drawer-tab" id="">
           <li class="" tabidx="tab_205929_1" id="thtab_205929_1"> <a target="_blank" data-from="101-100" href="<?php echo U('Home/Xinlixue/index');?>" class="yk-drawer-title">心理学榜</a> </li>

          </ul>
         </div>
        </div>
        <div class="yk-body">
         <div style="" contab="contab" id="tab_205929_4">
          <div style="" id="tab_205929_4tabarea" notloadimg="true">
           <div id="m_205932" name="m_pos">
            <div class="yk-rank">
             <div class="line">
              <div class="item">
               <label class="hot">1</label>
               <a data-from="1-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[0]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[0]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">2</label>
               <a data-from="2-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[1]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[1]['title']); ?></a>
              </div>
              <div class="item">
               <label class="hot">3</label>
               <a data-from="3-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[2]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[2]['title']); ?></a>
              </div>
              <div class="item">
               <label>4</label>
               <a data-from="4-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[3]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[3]['title']); ?></a>
              </div>
              <div class="item">
               <label>5</label>
               <a data-from="5-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[4]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[4]['title']); ?></a>
              </div>
             </div>
             <div class="line">
              <div class="item">
               <label>6</label>
               <a data-from="6-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[5]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[5]['title']); ?></a>
              </div>
              <div class="item">
               <label>7</label>
               <a data-from="7-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[6]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[6]['title']); ?></a>
              </div>
              <div class="item">
               <label>8</label>
               <a data-from="8-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[7]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[7]['title']); ?></a>
              </div>
              <div class="item">
               <label>9</label>
               <a data-from="9-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[8]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[8]['title']); ?></a>
              </div>
              <div class="item">
               <label>10</label>
               <a data-from="10-1" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($xinlixueShow[9]["id"]); ?>" target="_blank" class="name"><?php echo ($xinlixueShow[9]['title']); ?></a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- =============================广告位======================== -->
     <!-- <div style="margin-bottom:20px;">
      <div id="m_205936" name="m_pos">
       <div class="yk-AD-310x60 b20">
        <div class="ad-wrap">
         <div class="ad-con">
          <div id="ab_101543" class="ad-inner" style="display: block;">
           <div align="center" id="s_h_554649" class="mod">
            <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-50-logo.jpg" /></a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="m_205807" name="m_pos">
      <div class="yk-AD-310x110">
       <div class="ad-wrap">
        <div class="ad-con">
         <div id="ab_25" class="ad-inner" style="display: block;">
          <div align="center" id="s_h_598566" class="mod">
           <a target="_blank" href=""><img border="0" src="/Public/Home/Img/310-110.jpg" /></a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div> -->
    </div>
   </div>
  </div>
 </body>
</html>
					</div>
				</div>
			</div>
			<!-- 主体结束 -->
			<!-- 底部 -->
			<!-- <div id="qfooter" class="yk-footer">
    <div class="yk-footer-con">

        <div class="cert">
            <div class="cert-list">
                <p><span class="icon-footer-submit"></span> <a target="_blank" href="http://www.12377.cn/">违法和不良信息举报中心</a></p>
                <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=nP7w-f-37_nm-ffp3O3tsv-z8Q" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_11.png"/></a></p>
            </div>
           
        </div>
        <div class="copyright">
            北京伽马星球科技教育有限公司出品
        </div>
    </div>
</div> -->
			<!-- 底部结束 -->
		</div>
	</div>

</body>
</html>