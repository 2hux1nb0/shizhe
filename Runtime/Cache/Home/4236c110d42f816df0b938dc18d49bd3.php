<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

    <head>
        
            <title>
                <?php echo ($datas['title']); ?>
            </title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
            <meta name="keywords" content="<?php echo ($website['keywords']); ?>" />
            <meta name="description" content="<?php echo ($website['description']); ?>" />
        
        
            <link href="/Public/Home/css/youku.css" rel="stylesheet" type="text/css">
            <link href="/Public/Home/css/qheader.css" type="text/css" rel="stylesheet">
            <link href="/Public/Home/css/chuda_qheader.css" type="text/css" rel="stylesheet">
            <link href="/Public/Home/css/lsidetool.css" type="text/css" rel="stylesheet">
            <link href="/Public/Home/css/yk.css" type="text/css" rel="stylesheet">
            <link href="/Public/Home/css/space.css" type="text/css" rel="stylesheet">
            <link href="/Public/Home/css/playV5.css" type="text/css" rel="stylesheet">
            <script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'>
            </script>
            <script type="text/javascript" src='/Public/Home/js/common.js'>
            </script>
            <script type="text/javascript" src='/Public/Home/js/qwindow.js'>
            </script>
            <style type="text/css">
                .YK-nav li.current a{border-bottom:3px solid #3399e0;_padding-top:22px;_position:relative;_top:3px;
                } .commentArea .loginBefore textarea { width: 625px; }
            </style>
        
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
                                <div class="yk-so">
                                    <div class="yk-so-box">
                                        <form id="qheader_search" action="#" method="get" target="_blank" onsubmit="">
                                            <input name="q" id="headq" autocomplete="off" type="text">
                                            <a href="#" target="_blank" class="rankq">
                                                <i>
                                                </i>
                                            </a>
                                            <button type="submit">
                                                <em>
                                                    搜索
                                                </em>
                                            </button>
                                            <div id="qheader_keywords" style="display:none;">
                                                <a target="_blank" href="#" class="">
                                                </a>
                                            </div>
                                            <input style="display:none;" type="text">
                                            <div style="display: none;">
                                                <div class="">
                                                    <div class="sk_box sk_youku" style="display:block;">
                                                        <iframe id="sk_holder_iframe" scrolling="no" style="position: absolute; z-index: 0; top: -2px; left: -2px;"
                                                        frameborder="0">
                                                        </iframe>
                                                        <div class="main" id="_xbox_refresh">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                            </div>
                                            <link href="/Public/Home/css/s_kubox.css" type="text/css" rel="stylesheet">
                                        </form>
                                    </div>
                                </div>
                                <div class="yk-ucenter">
                                    <div class="yk-userlog" id="qheader_userlog">
                                        <div class="yk-userlog-before" id="qheader_logbefore" style="">
                                            <div class="entry">
                                                <a id="qheader_login" onclick="javascript:showLoginbox();return false;"
                                                href="#">
                                                    <i class="ico-user-l2">
                                                    </i>
                                                    登录
                                                </a>
                                                <span class="splite">
                                                    |
                                                </span>
                                                <a href="#" target="_blank">
                                                    注册
                                                </a>
                                            </div>
                                        </div>
                                        <div id="qheader_logafter" style="" class="yk-userlog-after">
                                            <div id="qheader_username" fire="hover" class="dropdown ">
                                                <div id="qheader_username_show" class="handle">
                                                    <div class="yk-userlog-after-meta">
                                                        <img src="/Youku/Public/Admin/UserPhoto/photo.jpg" class="yk-userlog-after-avatar">
                                                        <span id="qheaer_user_name" title="admin" class="yk-userlog-after-name">
                                                            admin
                                                        </span>
                                                        <b class="caret yk-userlog-after-caret">
                                                        </b>
                                                    </div>
                                                </div>
                                                <div id="qheader_username_panel" class="panel">
                                                    <div class="cd-hpanel-ico ico-arrow-top-grey">
                                                    </div>
                                                    <div class="cd-hpanel-user-info">
                                                        <div class="cd-hpanel-user-avatar">
                                                            <a target="_blank" href="#">
                                                                <img src="/Youku/Public/Admin/UserPhoto/photo.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="cd-hpanel-user-profile">
                                                            <div class="cd-hpanel-user-name">
                                                                <a title="admin" target="_blank" href="#">
                                                                    admin
                                                                </a>
                                                            </div>
                                                            <div class="cd-hpanel-user-credit">
                                                            </div>
                                                            <div class="cd-hpanel-user-vip">
                                                            </div>
                                                            <div class="cd-hpanel-user-extend">
                                                                <a target="_self" href="<?php echo ($servername); echo U('Home/setting/index');?>" onclick="javascript:linkto();">
                                                                    设置
                                                                </a>
                                                                <span class="cd-hpanel-split">
                                                                    |
                                                                </span>
                                                                <a href="#" onclick="javascript:logout();">
                                                                    登出
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cd-hpanel-code">
                                                            <div class="ykcode-cover">
                                                                <img src="#" class="ykcode-cover-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-user-grade">
                                                        <div class="panel-user-grade-title">
                                                            <span>
                                                                我的等级
                                                            </span>
                                                        </div>
                                                        <div class="panel-user-grade-info">
                                                            <span title="累计活跃时长：0小时">
                                                                <i class="panel-user-grade-icon panel-grade-icon-clock">
                                                                </i>
                                                                <span>
                                                                    0
                                                                </span>
                                                                <em>
                                                                    小时
                                                                </em>
                                                            </span>
                                                            <span>
                                                                （未开启加速）
                                                            </span>
                                                        </div>
                                                        <div class="panel-user-grade-left">
                                                        </div>
                                                        <div class="panel-user-grade-center">
                                                        </div>
                                                        <div class="panel-user-grade-right">
                                                        </div>
                                                        <div class="panel-user-grade-time">
                                                            <div class="panel-user-grade-left">
                                                            </div>
                                                            <div id="rank_todayDuraLine" class="panel-user-grade-center" style="width: 22px;">
                                                            </div>
                                                            <div class="panel-user-grade-right">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cd-hpanel-u-task">
                                                        <div class="u-task-title">
                                                            <span>
                                                                我获得的证书
                                                            </span>
                                                        </div>
                                                        <div class="u-task-list" id="tasklistsidetool">
                                                            <div class="u-task-meta u-task-meta-null">
                                                                <p class="u-task-e-null-status">
                                                                    更多精彩 敬请期待...
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cd-hpanel-userservices">
                                                        <ul class="cd-userservices-list cd-userservices-list-topborder">
                                                            <li class="u-service-chanel">
                                                                <a target="_blank" href="#">
                                                                    <i class="cd-hpanel-ico ico-myspace">
                                                                    </i>
                                                                    我的频道
                                                                </a>
                                                            </li>
                                                            <li class="u-service-subscribe">
                                                                <a target="_blank" href="#">
                                                                    <i class="cd-hpanel-ico ico-subscribe">
                                                                    </i>
                                                                    我的收藏
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <iframe width="110px" height="60px" frameborder="0" class="mask" scrolling="0">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="yk-upload">
                                        <div class="dropdown" id="qheader_upload">
                                            <div class="handle">
                                                <a href="<?php echo U('Home/Upload/index');?>" target="_blank">
                                                    <i class="ico-upload-l2">
                                                    </i>
                                                    <span>
                                                        上传
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="yk-menus-wrap">
                                    <ul class="yk-menus">
                                        <li class="yk-menus-item yk-menus-item-home">
                                            <a href="<?php echo U('Home/Index/index');?>" title="返回首页">
                                                首页
                                            </a>
                                        </li>
                                        <li class="yk-menus-item yk-menus-item-channe2" style="margin-left: 25px"><a href="<?php echo U('Home/Index/edu_bank');?>" title="教育银行">教育银行</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- yk-header end -->
                    </div>
                    <script>
                        $('#qheader_channel').toggle(function() {
                            $(this).addClass('dropdown-open');
                        },
                        function() {
                            $(this).removeClass('dropdown-open');
                        });
                        $('#qheader_username').toggle(function() {
                            $(this).addClass('dropdown-open');
                        },
                        function() {
                            $(this).removeClass('dropdown-open');
                        });
                        function showLoginbox() {
                            var loginbox = '<div id="qwindow_mask" class="qwindow_mask" style="background-color: rgb(84, 84, 84); opacity: 0.5; z-index: 30000; width: 1903px; height: 2335px; display: block;"></div><div id="qwindow" class="qwindow" style="top: 68px; left: 670px; z-index: 30000; opacity: 1; visibility: visible;"><div class="winbox"><div class="winhead" style="width: 540px;"><div class="wintitle"></div><div id="winclose" class="winclose" style="display: block;" onclick="javascript:winclose();"></div></div><div class="winbody" style="width: 540px; height: 473px; overflow: hidden;"><iframe frameborder="0" scrolling="no" src="<?php echo ($servername); ?>/Youku/index.php/Home/Login/login.html"></iframe></div></div><div class="winbg"></div></div>';
                            $('body').append(loginbox);
                            var sT = $(window).scrollTop();
                            sT = sT + 68 + 'px;';
                            winwidth = window.innerWidth;
                            sL = winwidth / 2 - 540 / 2 + 'px;';
                            $('#qwindow').attr('style', 'top:' + sT + 'left:' + sL + ' z-index: 30000; opacity: 1; visibility: visible;');
                            return false;
                        }

                        function winclose() {
                            $('#qwindow_mask').remove();
                            $('#qwindow').remove();
                        }

                        function islogin() {
                            console.log(document.cookie);
                            var username = '';
                            var ca = document.cookie.split(';');
                            for (var i = 0; i < ca.length; i++) {
                                var c = ca[i];
                                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                                if (c.indexOf('ykusername=') == 0) {
                                    username = c.split("=")[1];
                                    if (username != '') break;
                                }
                            }

                            return (username == '') ? false: true;
                        }

                        if (islogin()) {
                            $('#qheader_logbefore').attr('style', 'display:none');
                            $('#qheader_logafter').attr('style', 'display:block');
                            $.get('<?php echo U("Home/User/get_uinfo");?>', {},
                            function(data) {
                                $('#qheaer_user_name').html(data.username);
                                $('.yk-userlog-after-avatar').attr('src', data.photo);
                                $('.cd-hpanel-user-avatar').find('img').attr('src', data.photo);
                                $('.cd-hpanel-user-name').find('a').html(data.username);
                            },
                            'json');
                        } else {
                            $('#qheader_logbefore').attr('style', 'display:block');
                            $('#qheader_logafter').attr('style', 'display:none');
                        }
                        function linkto() {
                            window.location.href = "<?php echo ($servername); echo U('Home/setting/index');?>";
                        }
                        function logout() {
                            $.get('<?php echo U("Home/Login/logout");?>', {},
                            function() {
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
            <li><a onclidk="" target="_self" href="<?php echo U('Home/Subscribe/index');?>"><div class="icon-3"></div><span>我的订阅</span></a></li>
            <li><a target="_self" href="<?php echo U('Home/Record/index');?>"><div class="icon-4"></div><span>观看记录</span></a></li>
            <li><a target="_self" href="<?php echo U('Home/Index/edu_bank');?>"><div style="margin-left: -50px; margin-top: -10px;"><img src="/Public/Home/pic/icon-5.jpg"></div><span>教育银行</span></a></li>
        </ul>
    </div>
    <div class="split"></div>

</div>
                
                <!-- 工具条结束 -->
                <!-- 主体 -->
                <div class="YK yk-w970">
                    <div id="topzone_wrap">
                        
                            <div id="topzone">
                                <div class="YK-topzone">
                                    <div class="banner" id="banner">
                                        <!-- <img style="width:990px;" src="/Uploads/Img/banner2.jpg"> -->
                                    </div>
                                    <div class="userinfo">
                                        <?php if(is_array($urs)): foreach($urs as $key=>$vo): ?><div class="avatar">
                                                <a title="<?php echo ($vo["username"]); ?>" href="/index.php/Home/Space/index/id/<?php echo ($urs[0][id]); ?>">
                                                    <img style="width:145px;" src="<?php echo ($vo["photo"]); ?>" title="<?php echo ($vo["username"]); ?>">
                                                </a>
                                            </div>
                                            <div class="profile" style="padding:9px 0 0 195px ;">
                                                <div class="info">
                                                    <div class="username">
                                                        <a style="font-size:24px;" title="<?php echo ($urs[0]['username']); ?>" href="/index.php/Home/Space/index/id/<?php echo ($urs[0][id]); ?>">
                                                            <?php echo ($vo["username"]); ?>
                                                        </a>
                                                        <a href="#" target="_blank" title="道长等级：1">
                                                            <i class="lvl3">
                                                            </i>
                                                        </a>
                                                    </div>
                                                    <!--div class="bio" title=""></div -->
                                                </div>
                                                <div class="state">
                                                    <ul>
                                                        
                                                        <li class="splite">
                                                        </li>
                                                        <li class="snum">
                                                            <em sum_num="85">
                                                                <?php echo ($cou); ?>
                                                            </em>
                                                            <span style="font-family:Microsoft YaHei,微软雅黑,helvetica,arial,verdana,tahoma,sans-serif;">
                                                                学生数
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <div class="clear">
                                                    </div>
                                                </div>
                                                <div class="clear">
                                                </div>
                                            </div><?php endforeach; endif; ?>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class='YK-container'>
                        <div id='partnav_wrap'>
                            
                                <div id="partnav">
                                    <div class="YK-nav">
                                        <ul>
                                            <li class="current">
                                                <a href="/index.php/Home/Space/index/id/<?php echo ($urs[0]['id']); ?>">
                                                    主页
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/index.php/Home/Spacecomment/index/id/<?php echo ($urs[0]['id']); ?>" id="nav_guestbook">
                                                    讨论区
                                                </a>
                                            </li>
                                            <li id="video_order_fa">
                                                <a href="/index.php/Home/Collect/index">
                                                    我的收藏
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/index.php/Home/Spacevideo/index/id/<?php echo ($urs[0]['id']); ?>" id="nav_video">
                                                    视频
                                                </a>
                                            </li>
                                            <li>
                                                <div class="clear">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        
                            <div class='YK-content'>
                                <div class="YK-content">
                                    <div id="lpart15_wrap">
                                        <div id="lpart15">
                                        </div>
                                    </div>
                                    <div class="clear">
                                    </div>
                                    <!-- main beigin -->
                                    <div class="YK-main">
                                        <div class="YK-home" id="YK-home">
                                            <div id="lpart16_wrap">
                                                <div id="lpart16">
                                                    <div class="YK-box" tabview="true" id="">
                                                        <div class="hd">
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="bd">
                                                            <!-- playlist begin -->
                                                            <div tabview_panel="true" _isfill="1" class="YK-playlist">
                                                            </div>
                                                            <div class="YK-playlist" _isfill="0" tabview_panel="true" style="display:none;">
                                                            </div>
                                                            <!-- playlist end -->
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="lpart17_wrap">
                                                <div id="lpart17">
                                                </div>
                                            </div>
                                            <div id="lpart19_wrap">
                                                <div id="lpart19">
                                                    <div class="YK-box" tabview="true" id="">
                                                        <div class="hd">
                                                            <div class="title" title="讨论区">
                                                                讨论区
                                                                <a href="/u/UNDI0NjI3OTk2/guestbook">
                                                                    <span class="append">
                                                                        (4)
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="YK-main">
                                                            <div class="commentArea" id="commentArea">
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
                                                                            <a href="#" target="_blank">
                                                                                <img title="qwer" src="/Youku/Public/Admin/UserPhoto/photo.jpg">
                                                                            </a>
                                                                        </div>
                                                                        <div class="loginArea" id="loginArea" style="display: none;">
                                                                            <span>
                                                                                <a href="#">
                                                                                    qwer
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="commentTextArea">
                                                                            <textarea class="form_input form_input_defaultvalue" id="content" name="con"
                                                                            onkeydown="ctlentComments(event,'bt_comment');">有什么感想，您也来说说吧！
                                                                            </textarea>
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
                                                                                <input type="text" class="defaultext" onkeydown="ctlentComments(event,'bt_comment');"
                                                                                name="verify_code_value" id="verify_code_value" value="输入右图的字符">
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
                                                                    <div class="tab_inner" id="tab_inner">  </div>
                                                                    <div class="commentpop" id="comment_new" style="display:none">
                                                                        <a style="display:block;" charset="hz-4001208" href="javascript:location.reload();">
                                                                            有新评论，刷新看看
                                                                        </a>
                                                                        ss
                                                                    </div>
                                                                    <div class="commentpop" id="commentpop" style="display:none">
                                                                        <span onclick="this.parentNode.style.display='none';" class="close">
                                                                        </span>
                                                                        评论已提交，请等待审核通过。
                                                                    </div>
                                                                    <div id="videobodycommentlist">
                                                                        <?php if($nocount == 1): ?><div id="comment_none" class="null">
                                                                                <h3>
                                                                                    沙发空缺中，还不快抢～
                                                                                </h3>
                                                                            </div>
                                                                            <?php else: ?>
                                                                            <?php echo ($page); ?>
                                                                            <div id="Comments" class="box nBox">
                                                                                <div class="body">
                                                                                    <div class="comments">
                                                                                        <?php if(is_array($gues)): foreach($gues as $key=>$vo): ?><!--一条回复内容 begin-->
                                                                                            <div class="comment">
                                                                                                <div class="commentcon">
                                                                                                    <div class="userPhoto">
                                                                                                        <a href="<?php echo ($vo['uid']); ?>" target="_blank">
                                                                                                            <img src="<?php echo ($vo['photo']); ?>">
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="bar  ">
                                                                                                        <?php echo ($vo['username']); ?>
                                                                                                    </div>
                                                                                                    <div class="con">
                                                                                                        <div class="text">
                                                                                                            <p>
                                                                                                                <?php echo ($vo['con']); ?>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div class="panel">
                                                                                                            <div class="handle">
                                                                                                                <div class="com_reply" style="display:block">
                                                                                                                    <a id="replylink" username="<?php echo ($vo['username']); ?>" href="javascript:void(0)">
                                                                                                                        回复
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <span class="timestamp">
                                                                                                                <?php echo ($vo['date']); ?>
                                                                                                            </span>
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
                                                                            <div class='clear' style="padding-top:50px">
                                                                            </div>
                                                                            <?php echo ($page); endif; ?>
                                                                    </div>
                                                                    <script>
                                                                        $('#replylink').click(function() {
                                                                            if (!islogin()) {
                                                                                showLoginbox();
                                                                                return 0;
                                                                            }
                                                                            window.scroll(0, 760);
                                                                            var cc = $(this).attr('username');

                                                                            $('#content').val('@' + cc + ' : ');
                                                                            $('#content').focus();
                                                                        });

                                                                        function textareafocus() {
                                                                            if (!islogin()) {
                                                                                showLoginbox();
                                                                                return 0;
                                                                            }
                                                                            window.scroll(0, 760);
                                                                            $('#content').val('');
                                                                            $('#content').focus();
                                                                        }
                                                                    </script>
                                                                    <script>

    $('#content').click(function(){
        $(this).val('');
    });
    function sendcomment(){
        if(!islogin()){
            showLoginbox();
            return 0;
        }
        var mid = <?php echo ($mid); ?>;
        // alert(mid);return;
        var content = $('#content').val();
        if(content == '')
            {return;}
        $.get('/index.php/Home/Space/comment',{con:content,mid:mid},function(data){
            $('#comment_new').show();
        },'json');
        return false;
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
                                                            <div class="view-all">
                                                                <a href="/index.php/Home/Spacecomment/index/id/<?php echo ($urs[0]['id']); ?>" _target="blank">
                                                                    查看全部讨论
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear">
                                                </div>
                                                <div id="lpart23_wrap">
                                                    <div id="lpart23">
                                                        <div class="YK-box" tabview="true" id="">
                                                            <div class="hd">
                                                                <div class="title" title="视频">
                                                                    视频
                                                                    <span class="append">
                                                                        <a href="/u/UNDI0NjI3OTk2/videos">
                                                                            (<?php echo ($co); ?>)
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="clear">
                                                                </div>
                                                            </div>
                                                            <div class="bd">
                                                                <div class="YK-video">
                                                                    <!-- custom begin -->
                                                                    <div tabview_panel="true" class="video-list" _isfill="1">
                                                                        <div class="yk-row">
                                                                            <?php if(is_array($video)): foreach($video as $key=>$vo): ?><div class="yk-col4" c_time="<?php echo ($vo["time"]); ?>">
                                                                                    <div class="v">
                                                                                        <div class="v-thumb">
                                                                                            <img src="<?php echo ($vo["pic"]); ?>" replace="false" alt="<?php echo ($vo["title"]); ?>">
                                                                                        </div>
                                                                                        <div class="v-link">
                                                                                            <a title="<?php echo ($vo["title"]); ?>" target="video" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($vo["id"]); ?>">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="v-meta va">
                                                                                            <div class="v-meta-title">
                                                                                                <a _hz="l_v_title" title="<?php echo ($vo["title"]); ?>" target="video" href="<?php echo U('Home/Play/index');?>?videoId=<?php echo ($vo["id"]); ?>">
                                                                                                    <?php echo ($vo["title"]); ?>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div class="v-meta-entry">
                                                                                                <i title="播放" class="ico-statplay">
                                                                                                </i>
                                                                                                <span class="v-num">
                                                                                                    <?php echo ($vo["count"]); ?>
                                                                                                </span>
                                                                                                <span class="v-upload-date">
                                                                                                    <?php echo (getCtime($vo["time"])); ?>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="v-meta-overlay">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><?php endforeach; endif; ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="video-list" _isfill="0" tabview_panel="true" style="display:none;">
                                                                    </div>
                                                                    <!-- custom end -->
                                                                </div>
                                                                <div class="clear">
                                                                </div>
                                                                <div class="view-all">
                                                                    <a href="/index.php/Home/Spacevideo/index/id/<?php echo ($urs[0]['id']); ?>">
                                                                        查看全部视频
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="lpart24_wrap">
                                                    <div id="lpart24">
                                                    </div>
                                                </div>
                                                <div id="lpart26_wrap">
                                                    <div id="lpart26">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <!-- main end -->
                                        <!-- aside begin -->
                                        <div class="YK-aside">
                                            <div id="rpart18_wrap">
                                                <div id="rpart18">
                                                    <div class="YK-box">
                                                        <div class="YK-profile">
                                                            <div class="userinfo">
                                                                <?php if(is_array($urs)): foreach($urs as $key=>$vo): ?><div class="avatar">
                                                                        <a title="<?php echo ($vo["username"]); ?>" href="/index.php/Home/Space/index/id/<?php echo ($urs[0][id]); ?>">
                                                                            <img src="<?php echo ($vo["photo"]); ?>" title="<?php echo ($vo["username"]); ?>">
                                                                        </a>
                                                                    </div>
                                                                    <div class="cert-list">
                                                                        <div class="username">
                                                                            <a title="<?php echo ($vo["username"]); ?>" href="/index.php/Home/Space/index/id/<?php echo ($urs[0][id]); ?>">
                                                                                <?php echo ($vo["username"]); ?>
                                                                            </a>
                                                                            <a href="/index.php/Home/Space/index/id/<?php echo ($urs[0][id]); ?>" target="_blank" title="道长等级：1">
                                                                                <i class="lvl3">
                                                                                </i>
                                                                            </a>
                                                                        </div>
                                                                        <!-- crm begin-->
                                                                        <ul id="YK_badges">
                                                                        </ul>
                                                                        <!-- crm end-->
                                                                        <div class="clear">
                                                                        </div>
                                                                    </div><?php endforeach; endif; ?>
                                                            </div>
                                                            <div class="userintro">
                                                                <div class="userdata">
                                                                    <ul>
                                                                        <li>
                                                                            <label>
                                                                                总播放:
                                                                            </label>
                                                                            <?php echo ($video[0]['count']); ?>
                                                                        </li>
                                                                        <!-- <li><label>总访问:</label>765</li>
                                                                        -->
                                                                        <li>
                                                                            <label>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="clear">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="virtualmedalWin" style="display:none;">
                                                        <div class="medalWin">
                                                            <div class="medalBox">
                                                                <div class="head">
                                                                    <span class="title">
                                                                        荣誉勋章
                                                                    </span>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="medalList curMedal">
                                                                        <div class="items">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="medalBox">
                                                            <div class="head"><span class="title">历史勋章</span></div>
                                                            <div class="body">
                                                            <div class="medalList hostMedal">
                                                            <div class="items">
                                                            </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="rpart28_wrap">
                                                <div id="rpart28">
                                                    <div class="YK-box">
                                                        <div class="hd">
                                                            <div class="title">
                                                                学生(<?php echo ($cou); ?>)
                                                            </div>
                                                        </div>
                                                        <div class="bd">
                                                            <div class="YK-userlist">
                                                                <ul class="userlist">
                                                                    <?php if(is_array($fans)): foreach($fans as $key=>$vo): ?><li style="float:left;">
                                                                            <div class="item" _value="item">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo ($vo["photo"]); ?>" title="<?php echo ($vo["username]"]); ?>">
                                                                                </div>
                                                                                <div class="link">
                                                                                    <a class="YK_id" cardplace="lr" encode_uid="UMjYxNzMzMjQ0" href="/index.php/Home/Space/index/id/<?php echo ($vo["id"]); ?>"
                                                                                    target="_blank">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="username">
                                                                                    <span class="name">
                                                                                        <a href="/index.php/Home/Space/index/id/<?php echo ($vo["uid"]); ?>" target="_blank" title="<?php echo ($vo["title"]); ?>">
                                                                                            <?php echo ($vo["username"]); ?>
                                                                                        </a>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="overlay">
                                                                                </div>
                                                                            </div>
                                                                        </li><?php endforeach; endif; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- aside end -->
                                        <div class="clear">
                                        </div>
                                        <script>
                                            var s_uid = 106156999;
                                            var s_ueid = 'UNDI0NjI3OTk2';
                                        </script>
                                        <div style="display:none;" id="YKeditorParent">
                                            <div class="YK-editor" style="display:none;position: relative; padding-bottom:10px;"
                                            id="YKeditor">
                                                <div class="editor-area">
                                                    <div class="board" id="board">
                                                        <div class="editortoolbar">
                                                            <table cellspacing="0" cellpadding="0" style="width:100%;table-layout: fixed;"
                                                            summary="Message Textarea" class="editor_text">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <textarea style="height:200px;resize:none;" rows="10" id="boardcontent"
                                                                            name="board_content" class="autosave">
                                                                            </textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <input type="hidden" id="boarduid" name="board_uid" value="5590364">
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <span class="save">
                                                            <a class="btn" href="javascript:;" _click="boadSubmit">
                                                                保&nbsp;&nbsp;&nbsp;&nbsp;存
                                                            </a>
                                                        </span>
                                                        <span class="cancel">
                                                            <a class="btn btn-minor" href="javascript:;" _click="boadCancel">
                                                                取&nbsp;&nbsp;&nbsp;&nbsp;消
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                        </div>
                        </div>
                        <!-- 主体结束 -->
                        <!-- 底部 -->
                        <div class="YK-footer">
                            <div class="footer-box">
                                <?php echo ($website['copyright']); ?>
                            </div>
                        </div>
                        <!-- 底部结束 -->
                    </div>
                </div>
    </body>

</html>