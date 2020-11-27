<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=980" />
        <title>
            我收藏的视频
            师者视频空间-聊聊学术，聊聊知识！
        </title>
        <link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet">
        <link href="/Public/Home/css/chuda_qheader.css" type="text/css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="/Public/Home/css/youku.css"/>
        <link type="text/css" rel="stylesheet" href="/Public/Home/css/i.css"/>
        <link type="text/css" rel="stylesheet" href="/Public/Home/css/default.css"/>
        <link type="text/css" rel="stylesheet" href="/Public/Home/css/home.css"/>
        <link type="text/css" rel="stylesheet" href="/Public/Home/css/grid.css"/>
        <link type="text/css" rel="stylesheet" href="/Public/Home/css/home.new.css"/>
        <style type="text/css" media="screen">
            .XXXX{
                width: 60px;
                height: 60px;
                background:#ddd;
                -moz-border-radius: 1em;
                -webkit-border-radius: 1em;
                border-radius: 1em;
                 opacity:0.6;


            }
            .XXXX{
                font-size: 50px;
                color:#f00;
                line-height:60px;
                text-align:center;
                z-index:100;
                position: absolute;
                left:160px;
                bottom: 155px;

}
            }
        </style>
        <script src="/Public/Home/js/jquery.js"></script>
        <script src="/Public/Home/js/prototype.js"></script>
    </head>
    <body class="yk-w1190 body-offset-w1190">
        <script type="text/javascript" src="/Public/Home/js/resize.js"></script>
        <span style="display:none;" id='is_self_exist' data="%22uid%22%3A451596623"></span>
        <div class="window">
            <div class="screen">
                <link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet" />
                <link href="/Public/Home/css/user-grade-icon.css" type="text/css" rel="stylesheet" />
                <div class="yk-header yk-header-fixed" id="qheader">
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
                    <iframe class="mask" frameborder="0" scrolling="no" style="width:100%;height:61px;"></iframe>
                </div><!-- yk-header end -->
            </div>

            <script src="/Public/Home/js/chuda.js"></script>
            <script src="/Public/Home/js/qheader.js"></script>
            <script src="/Public/Home/js/qwindow.js"></script>
            <script src="/Public/Home/js/popup.js"></script>
            <div class="yk-con">
                <div class="YK_miniheader" id="home_miniheader_ck">
                    <div class="YK_masthead">
                        <div class="YK_mainnav">
                            <div class="title"><a href="" onclick="hz.postHz(4007455, 1000502);"  id="u_index_ck">个人中心</a></div>
                            <ul>
                                <li><a onclick="hz.postHz(4007460, 1000502);" href="<?php echo U('Home/Record/index');?>">观看记录</a></li>
                                <li class="current"><a onclick="hz.postHz(4007462, 1000502);" href="/u/home?type=favorite" id="u_favorite_ck">我的收藏</a></li>
                                <li><a onclick="hz.postHz(4007463, 1000502);" href="<?php echo U('Home/Subscribe/index');?>" id="u_subscribe_ck">我的订阅</a></li>
                        </div>
                        <!-- <div class="YK_operate"><a onclick="hz.postHz(4007456, 1000502);" href="/u/UMTgwNjM4NjQ5Mg=="  target="_blank" id="u_space_ck">我的频道</a><span>|</span><a onclick="hz.postHz(4007457, 1000502);" href="/u/videos"  target="_blank" id="u_videos_ck">视频管理</a></div> -->
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="s_body">
                <div class="YK" >
                    <div class="yk-con" _uc="homeFavFriends" pagename="favorite">
                        <div id="fav_video_wrap"><div id="fav_video" params="newFavorite"><div class="yk-collect">
                                    <div class="YK_subtab">
                                        <ul>
                                            <!-- <li  ><a href="/u/home?type=favorite&sub=show">节目</a></li> -->
                                            <li class="current"><a href="">视频</a></li>
                                        </ul>
                                    </div>
                                    <div class="yk-collect-control">
                                        <!-- <a class="yk-collect-make" href="/u/playlists">
                                        <i class="ico-playlist"></i>制作专辑</a> -->
                                        <div class="form_btn form_btn_m form_btnsub_m btn-edit" _click="manage" data-stat-role="ck"><span class="form_btn_text" id='guanli'><span class="form_btn_icon form_btn_icon_left form_btn_icon_settings" ></span><span  class='guanlis'>管理收藏</span></span></div>

                                    </div>		<div class="yk-row">
                                        <div class="yk-offset2 yk-w970-col16 yk-w1190-col20">
                                            <div class="yk-row yk-v-190">
                                            <?php if(is_array($data)): foreach($data as $k=>$vo): ?><div class="v yk-col4"  value ='<?php echo ($vo["id"]); ?>'data="">
                                                    <div class="v-thumb">
                                                        <img replace="false"src="<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["data"]); ?>">
                                                        <div class="v-thumb-tagrb"><!-- <span class="v-time">108:07</span> --></div>
                                                    </div>
                                                    <div class="v-link">
                                                        <a href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($vo["rid"]); ?>" target="video" title="<?php echo ($vo["title"]); ?>"></a>
                                                    </div>
                                                    <div class="v-recover">
                                                        <div class="bg"></div>

                                                    </div>
                                                    <div class="v-meta va">

                                                        <div class="v-meta-title">
                                                            <a target="video" title="<?php echo ($vo["title"]); ?>" charset="109909-92779-1-4" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($vo["rid"]); ?>"><?php echo ($vo["title"]); ?></a></div>
                                                        <div class="v-meta-entry"><?php echo ($vo["times"]); ?> <!-- <a cardplace="tb" encode_uid="UMzg5ODE2MTgw" title="师者会员" target="_blank" href="" class="YK_id v-username"><i class="ico-user"></i>师者会员</a> -->
                                                        </div>
                                                        <div class="v-meta-overlay"></div>
                                                    </div>
                                                   <a class="XXXX"   style='display:none'>X</a>

                                                </div><?php endforeach; endif; ?>








                                  <!--               <div class="v yk-col4" data="%22id%22%3A%22322301811%22%2C%22type%22%3A%22video%22">
                                                    <div class="v-thumb">
                                                        <img replace="false"src="/Public/home/picture/d51b9fcfb3a04fe8a7f5cd590b7c6b1e.gif" alt="摇滚英雄">
                                                        <div class="v-thumb-tagrb"><span class="v-time">87:55</span></div>
                                                    </div>
                                                    <div class="v-link">
                                                        <a href="" target="video" title="摇滚英雄"></a>
                                                    </div>
                                                    <div class="v-recover">
                                                        <div class="bg"></div>
                                                        <div class="form_btn form_btn_m form_btnmaj_m" data-stat-role="ck"><span class="form_btn_text" _click="refav">重新收藏</span></div>
                                                    </div>
                                                    <div class="v-meta va">
                                                        <div class="v-meta-title">
                                                            <a target="video" title="摇滚英雄" charset="109909-92779-1-4" href="">摇滚英雄</a></div>
                                                        <div class="v-meta-entry">2015-08-04 <a cardplace="tb" encode_uid="UMzg5ODE2MTgw" title="师者会员" target="_blank" href="" class="YK_id v-username"><i class="ico-user"></i>师者会员</a>
                                                        </div>
                                                        <div class="v-meta-overlay"></div>
                                                    </div>
                                                    <a class="v-record-delete" href="javascript:;" _click="cancelfav"></a>
                                                </div>
 -->


                                            </div>

                                        </div><!-- end yk-offset2 -->
                                    </div><!-- yk-row -->

                                </div><!-- end yk-collect -->




                                <div class="qPager">
                                    <div class="stat">
                                        第1-20/31条
                                    </div>
                                    <ul class="turn">
                                        <li class="pre" title="上一页"><span><em class="ico_pre"></em>上一页</span></li>

                                        <li class="next" title="下一页"><a href="/u/home?page=2&type=favorite&sub=video" ><em class="ico_next"></em>下一页</a></li>
                                    </ul><!-- .turn -->

                                    <ul class="pages">
                                        <li class="current"><span>1</span></li>
                                        <li><a href="/u/home?page=2&type=favorite&sub=video">2</a></li>
                                    </ul><!-- .pages -->
                                </div><!-- .qPager --></div></div>
                        <div class="clear"></div>
                    </div><!--yk-con end-->
                </div><!--YK end-->
            </div><!--s_body-->
            <!--小页尾-->

            <div class="s_miniFooter">
                <div class="footerBox">
                    <div class="copyright">
                        Copyright©2020 师者 shizhe.com 版权所有
                        <a href="<?php echo U('Home/Upload/upload-provision');?>" target="_blank">反盗版盗链声明</a>
                        <a href="" target="_blank">京ICP证060288号</a>
                        <a href="" target="_blank">
                            <span class="icp" title="经营性网站备案"></span>
                        </a>
                    </div>
                </div>
            </div>
            <script src="/Public/Home/js/iresearch.js"></script>
            <script src="/Public/Home/js/cps.js"></script>
            <noscript>
            <imgsrc="/Public/home/picture/add08bda9bcb4336810b5ac9a5f112d5.gif" />
            </noscript>
            <!-- End comScore Tag -->
        </div><!--screen end-->
    </div><!--window end-->
</div>
<script>var need_guide = false;</script>
<script src="/Public/Home/js/qcard.js"></script>
<script src="/Public/Home/js/qwindow.js"></script>
<script src="/Public/Home/js/hash.js"></script>
<script src="/Public/Home/js/commonv2.js"></script>
<script src="/Public/Home/js/guide.js"></script>
<script src="/Public/Home/js/city.js"></script>
<script src="/Public/Home/js/share.js"></script>
<script src="/Public/Home/js/hzclick.js"></script>
<script src="/Public/Home/js/manager.js"></script>
<div style="display: none; opacity: 1;" id="sideBar" class="sidebar">
    <a id="btn-gotop" href="#Top" style="display: none;"><i class="ico-gotop"></i><span class="sidebar-overlay"></span></a>
    <a target="_blank" href="" class="feedBack"><i class="ico-feedback"></i><br><span id="test">反馈</span><span class="sidebar-overlay"></span></a>
</div>
<script src="/Public/Home/js/sidebar_pc.js"type="text/javascript"></script>

<iframe name="hideSubFrame" id="hideSubFrame" style="width:0;height:0;display:none;"></iframe>
<script src="/Public/Home/js/playlist.js"></script>
        <script type="text/javascript" src="/Public/Home/js/tdstat.js"></script>
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/sidetool.css"/>
        <script src="/Public/Home/js/sidetool.js"></script>
        <script src="/Public/Home/js/jquery.js"></script>

        <script type="text/javascript">
        $(function(){
            $('#guanli').toggle(function(){
                $('.XXXX').show();
                $('.guanlis').html('完成');
                $('.XXXX').click(function (){
                    var dangqian = $(this);
                    var fff =$(this).parent().attr('value')
                    console.log(fff);
                      $.ajax({
                        url:"/index.php/Home/Collect/delete",
                        type: 'POST',
                        dataType: 'json',
                        data:{"id":fff},
                        success:function(data){
                          //  console.log(dangqian.parent());
                            dangqian.parent().remove();
                        }
                    })
                    //alert($(this).parent().attr('value'));
                });
            },function(){
                $('.XXXX').hide();
                 $('.guanlis').html('管理收藏');

            })
        })
        </script>
        </body>
        </html>