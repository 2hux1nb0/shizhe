<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<HTML>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>文学</title>
    <script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>
    <link rel="icon" href="/Public/Home/pic/favicon.png" type="image/png" >
    <link href="/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src='/Public/Home/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='/Public/Home/js/jquery-1.11.1.min.js'></script>

    <style type="text/css">
    #bodys{
              width: 1300px;
              margin: auto;
          }
        body {
            box-sizing: 0px;
            overflow-x: hidden;
        }
        #wap{
            max-width:1300px;
            min-width:480px;
            margin:0 auto;
        }

        a{
            text-decoration: none
        }

        .carousel {

            padding-right: 10px;
            padding-left: 10px;

        }

        .carousel .item {
            background-color: #ffffff;
        }

        .carousel img {
            width: 100%;
            height: 100%;

        }

        .carousel-control.left {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .0001) 100%);
        }

        .carousel-control.right {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%);
        }

        /*  选项卡开始*/
        .tab {
            padding-top: 20px;
            padding-left: 10px;
        }

        .xxk {

            width: 190px;
            padding-right: 8px;
            overflow: hidden;

        }

        .xxk img {
            width: 100%;
            height: 110px;
            margin-top: 15px;

        }

        /*上行 选项卡样式*/
        .tableft {
            width: 190px;
            height: 57px;

            position: absolute;
            top: 70px;
            background: rgba(0, 0, 0, 0.4);
        }

        /*下行 选项卡样式*/
        .tableftt {
            width: 190px;
            height: 100px;
            position: absolute;
            top: 200px;
            background: rgba(0, 0, 0, 0.4);
        }

        /* 选择卡字体*/
        .btn-info {
            position: absolute;
            left: 140px;
            top: 25px;
        }

        .tatles {
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
        }

        .stars {
            color: #E0E0E0;
        }


        /*右侧三图*/
        .yk-tatle .wzzk {
            color: #909090;
            line-height: 30px;
            font-size: 26px;
            font-family: 'Microsoft YaHei', 微软雅黑, SimHei, helvetica, arial, verdana, tahoma, sans-serif;
        }

        .xiaotu {
            margin-top: 20px;
        }

        .zzzz {
            margin: 10px;
            width: 380px;
            height: 65px;
            overflow: hidden
        }

        .imgd {
            width: 150px;

        }

        .imgd img {
            width: 100%;
            height: 100px;

        }

        .jianjie {
            position: absolute;
            left: 180px;
            top: 60px;
        }

        .jianjiet {
            position: absolute;
            left: 168px;
            top: 5px;
        }

        /*--第二个轮播----*/
        .lubotatle {
            margin-top: 30px;
            margin-left: 40px;
            color: #909090;
            line-height: 30px;
            font-size: 26px;
            font-family: 'Microsoft YaHei', 微软雅黑, SimHei, helvetica, arial, verdana, tahoma, sans-serif;
        }

        .lunbotwo {
            float: left;
            margin-left: 10px;
            width: 200px;
            height: 300px;
        }

        .lunbotwo img {
            width: 100%;
        }

        #ximg {
            width: 2000px;
        }
    </style>
    <link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/search/s_comm.css" />
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/search/s_video.css" />
    <script type="text/javascript" src="/Public/Home/js/search/jquery.js"></script>
    <script type="text/javascript" src="/Public/Home/js/search/iku.js"></script>
    <script type="text/javascript" src='/Public/Home/js/qwindow.js'></script>
    <script type="text/javascript" src='/Public/Home/js/common.js'></script>
</head>
<body id="bodys">
<div id="wap">
<!-- 头部 -->
<div style="overflow-x: inherit">
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
</div>

<!--选项卡+ 推荐内容   开始-->
<div class="row tab">
    <div class="col-md-8">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">文学</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <!-- <br>
        <div id="showboard" style="border-style: solid;width: 900px; height: 1200px;"></div> -->
        <div class="tab-content">
            <!--第一个屏-->
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row">

<div class="sk_result">
        <div class="sk-box" style="margin-left: -23px;">
            <div class="bd" >
                <div class="sk-vlist" >
                
                    <?php if(is_array($sztj)): foreach($sztj as $key=>$v): ?><div class="v">    
                        <div class="v-thumb">
                            <a href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($v["id"]); ?>"><img alt="<?php echo ($v["title"]); ?>" src="<?php echo ($v['pic']); ?>" onerror=""></a>
                                              <div class="v-thumb-tagrt">
                                <div class="definition">
                                    <span class="ico__SD"></span>
                                </div>
                            </div>

                            <!-- <div class="v-thumb-tagrb">                    
                                <span class="v-time">23:40</span>                              
                            </div> -->

                        </div>
                   
                        <div class="v-meta va">
                            <div class="v-meta-title" >
                                <a title="<?php echo ($v["title"]); ?>" style="display:none;" showall="true" target="_blank" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($v["id"]); ?>" ><span class="highlight"><?php echo ($v["title"]); ?></span> </a>
                                <a title="<?php echo ($v["title"]); ?>" style="" showall="false" target="_blank" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($v["id"]); ?>" ><span class="highlight"><?php echo ($v["title"]); ?></span></a>
                            </div>
                            <div class="v-meta-entry">
                                  <div class="v-meta-data"><label>作者:</label> 
                                        <span class="username">
                                                <a target="_blank" charset="811-1-1-1" href="#"><?php echo ($v["uid"]); ?></a>  
                                        </span>
                                    </div>
                                    <div class="v-meta-data"><label>播放: </label> <span><?php echo ($v["count"]); ?></span></div>
                                <div class="v-meta-data"><label>来源: </label> <span class="siteurl">师者</span></div>
                                <div class="v-meta-data"><label>发布时间: </label> <span class="pub"><?php echo ($v["time"]); ?></span></div>
                            </div>
                        </div>
                    </div><?php endforeach; endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    
                    
             
        </div>
        
    </div>


    <!--第一个屏-->

</div>
<div class="sk_container">
                <div class="sk_pager">
                            <ul>

                                     <li class=""><span><?php echo ($pages); ?></span></li>
                            </ul>
                    </div>
                    </div>

</div>

</div>
</div>

</div>
</body>
</HTML>