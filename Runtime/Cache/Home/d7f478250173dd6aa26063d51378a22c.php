<?php if (!defined('THINK_PATH')) exit();?><!-- 勿删 该页为首页iframe所调用 -->
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="content-language" content="zh-cn">
        <title>
            用户登录
        </title>
        <link rel="shortcut icon" href="#">
        <link rel="stylesheet" href="/Public/Home/css/youku.434e3a487e.css">
        <link rel="stylesheet" href="/Public/Home/css/login.2eb95251d6.css">
        <script type="text/javascript" src='/Public/Home/js/jquery-1.8.3.min.js'></script>

    </head>

    <body>
        <center>
            <img src="/Public/Home/pic/shizhe.png" alt="ShiZhe 师者" style="margin-top: 8px;" />
        </center>
        <!-- 背景div -->
    <div id="mydiv" style="height:500px;">
        <div class="passport-win clearfix">
            <div class="passport-win-main" id="J_WinMain">
                <div class="passport-bannertop">
                    <div class="banner-winpassport02">
                    </div>
                </div>
                <div class="passport-tab" id="J_PassportTab">
                    <ul>
                        <li>
                            <a class="active" href="#">
                                登录
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo U('Home/Login/signup');?>">
                                注册
                            </a>
                        </li> -->
                    </ul>
                    <!-- <div class="extand">
                        <a href="javascript:;" class="btn-mqlogin" id="J_BtnLogin">
                            <i class="ico-phone">
                            </i>
                            免注册登录
                        </a>
                    </div> -->
                </div>
                <div class="passport-body">
                    <div class="passport-main" id="J_LoginSignup">
                        <div class="formbox passport-inner" id="commonLoginArea" data-page="login">
                            <form action="" id="loginform" name="loginform" method="post" target="loginsubmit">
                                <fieldset>
                                    <div id='portholder' class="entry">
                                        <label  class="form_input_placeholder">
                                            <span style="margin-left: 136px;">
                                                邮箱 / 手机号
                                            </span>
                                        </label>
                                        <input placeholder="" widget="input" id="passport" name="passport" class="form_input form_input_l"
                                        tabindex="1" type="text">
                                    </div>
                                    <div id='wordholder' class="entry">
                                        <label class="form_input_placeholder">
                                            <span style="margin-left: 190px;">
                                                密码
                                            </span>
                                        </label>
                                        <input placeholder="" widget="input" id="password" name="password" class="form_input form_input_l"
                                        tabindex="2" type="password">
                                        <p id = 'pport' class="form-msg form-error" style="opacity: 1;display:none"><span class="ico__error" ></span><em>账号或密码错误</em></p>
                                    </div>
                                    <div id='verifycodeholder' class="entry captcha-area" id="J_CaptchaArea" style="display:block;">
                                        <label class="form_input_placeholder">
                                            <span>
                                                验证码
                                            </span>
                                        </label>
                                        <input placeholder="" widget="input" id="captcha" name="captcha" class="form_input form_input_l"
                                        tabindex="3" style="width:82px;" type="text">
                                        <p id = 'pverity' class="form-msg form-error" style="opacity: 1;display:none"><span class="ico__error"></span><em>验证码错误</em></p>
                                        <img id="J_CaptchaImg" onclick='' alt="验证码" src="<?php echo U('Home/Login/verifycode');?>">
                                        <button widget="button" type="button" id="J_CaptchaChange" class="btn btn-large btn-minor">
                                            <span class="btn-text">
                                                <i class="ico-repeat">
                                                </i>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="entry terms">
                                        <input widget="input" id="remember" name="remember" checked="checked"
                                        tabindex="4" type="checkbox">
                                        <label for="remember">
                                            记住我
                                        </label>
                                        <div class="getpwd">
                                            <a href="#" charset="hz-4003753-1000494" target="_blank">
                                                忘记密码
                                            </a>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <button widget="button" type="submit" id="J_SubmitLogin" class="btn btn-large btn-major"
                                        style="width:100%">
                                            <span class="btn-text">
                                                登 录
                                            </span>
                                        </button>
                                    </div>
                                </fieldset>
                                <input widget="input" id="callback" name="callback" type="hidden">
                                <input value=""
                                widget="input" id="loginOperateSt" name="from" from="header" type="hidden">
                                <input widget="input" id="J_WinType" name="wintype" value="pop" type="hidden">
                            </form>
                            <iframe style="display:none" name="loginsubmit">
                            </iframe>
                        </div>
                        <!-- <div class="form-other passport-inner">
                            <span>
                                没有账号？
                                <a class="link-minor" href="<?php echo U('Home/Registered/Index');?>">
                                    免费注册
                                </a>
                            </span>
                        </div> -->
                        <!-- <div class="splitline-or passport-inner">
                            <span>
                                或
                            </span>
                        </div>
                        <div class="thirdparties passport-inner" id="connectLoginArea">
                            <div class="main-links">
                                <ul class="clearfix">
                                    <li>
                                        <a connect="qzone" config=" 'cp': 1000208, 'cpp': 4001521, 'width': 710, 'height': 400, 'title': '腾讯QQ' "
                                        title="用QQ账号登录" charset="hz-4003757-1000494">
                                            <i class="ico-QQ">
                                            </i>
                                            <em>
                                                QQ账号登录
                                            </em>
                                        </a>
                                    </li>
                                    <li>
                                        <a connect="taobao" config=" 'cp': 0, 'cpp': 0, 'width': 670, 'height': 620, 'title': '淘宝' "
                                        title="用淘宝账号登录" charset="hz-4003759-1000494">
                                            <i class="ico-taobao">
                                            </i>
                                            <em>
                                                淘宝账号登录
                                            </em>
                                        </a>
                                    </li> 
                                    <li>
                                        <a connect="wechat" config=" 'cp': 0, 'cpp': 0, 'width': 400, 'height': 570, 'title': '微信' "
                                        title="用微信扫码登录" charset="hz-4009928-1000494">
                                            <i class="ico-wechat">
                                            </i>
                                            <em>
                                                微信扫码登录
                                            </em>
                                        </a> 
                                    </li>
                                    <li>
                                        <a connect="alipay" config=" 'cp': 1000208, 'cpp': 4002404, 'width': 950, 'height': 700, 'title': '支付宝' "
                                        title="用支付宝账号登录" charset="hz-4003759-1000494">
                                            <i class="ico-zfb">
                                            </i>
                                            <em>
                                                支付宝账号登录
                                            </em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sub-links">
                                <span class="handle">
                                    其他方式
                                </span>
                                <div class="panel">
                                    <a connect="sina" config=" 'cp': 1000208, 'cpp': 4000632, 'width': 750, 'height': 580, 'title': '微博' "
                                    title="用新浪微博账号登录" charset="hz-4003755-1000494">
                                        <i class="ico-weibo">
                                        </i>
                                    </a>
                                    <a connect="tencent" config=" 'cp': 1000208, 'cpp': 4001348, 'width': 630, 'height': 440, 'title': '腾讯微博' "
                                    title="用腾讯微博账号登录">
                                        <i class="ico-txweibo">
                                        </i>
                                    </a>
                                    <a connect="renren" config=" 'cp': 1000208, 'cpp': 4000632, 'width': 600, 'height': 390, 'title': '人人网' "
                                    title="用人人网账号登录">
                                        <i class="ico-renren">
                                        </i>
                                    </a>
                                    <a connect="kaixin" config=" 'cp': 1000208, 'cpp': 4003120, 'width': 570, 'height': 370, 'title': '开心网' "
                                    title="用开心账号登录">
                                        <i class="ico-kaixin">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- 二维码模块 ↓ -->
                        <div class="ykcode" id="qrcodeLoginArea">
                            <div class="ykcode-container continue" data-bclass="ykcode-container qrcodeContainer"
                            data-dfname="qrcodeContainer">
                                <div class="ykcode-detail ykcode-status">
                                    <div class="ykcode-detail-img" style="overflow:hidden;">
                                        <span class="ico__loading_32" data-dfname="qrcodeLoading" style="position: absolute; top: 50%; left: 50%; margin-top: -16px; margin-left: -16px; opacity: 0; display: none;">
                                        </span>
                                        <img style="opacity: 1;" alt="二维码" data-dfname="qrcodeImgurl" src="/Public/Home/pic/qian.jpg">
                                        <div class="ykcode-detail-mask ykcode-timeout-show">
                                        </div>
                                        <div class="ykcode-detail-action ykcode-timeout-show">
                                            <a title="刷新二维码" class="btn-fresh" data-dfname="qrcodeRefresh">
                                                <i>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ykcode-detail-tips ykcode-timeout-hide">
                                        <span style="color: #ff748c;">以<span style="color: green;">微信方式</span>捐助我们</span>
                                    </div>
                                    <div class="ykcode-detail-tips ykcode-timeout-show">
                                        二维码已失效，
                                        <a href="javascript:;" data-dfname="qrcodeRefresh">
                                            点击刷新
                                        </a>
                                    </div>
                                    <!-- <div class="ykcode-detail-help">
                                        请使用师者客户端
                                    </div> -->
                                </div>
                                <div class="ykcode-detail ykcode-status-scan">
                                    <div class="ykcode-status-info">
                                        <i class="ico-success">
                                        </i>
                                        扫描成功
                                    </div>
                                </div>
                                <div class="ykcode-detail ykcode-status-succ">
                                    <div class="ykcode-status-info">
                                        <i class="ico-success">
                                        </i>
                                        捐助成功
                                    </div>
                                    <div class="ykcode-status-help">
                                        <span data-dfname="countDown">
                                            3
                                        </span>
                                        秒后&nbsp;返回
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {
            //配置
            var config = {
                vx: 4,  //小球x轴速度,正为右，负为左
                vy: 4,  //小球y轴速度
                height: 2,  //小球高宽，其实为正方形，所以不宜太大
                width: 2,
                count: 200,     //点个数
                color: "121, 162, 185",     //点颜色
                stroke: "130,255,255",      //线条颜色
                dist: 6000,     //点吸附距离
                e_dist: 20000,  //鼠标吸附加速距离
                max_conn: 10    //点到点最大连接数
            }

            //调用
            CanvasParticle(config);
        }
    </script>
    <script type="text/javascript" src="/Public/Home/js/canvas-particle.js"></script>
        
    </body>
<script>

//提交表单
$('#J_SubmitLogin').click(function(){
    var passport = $('#passport').val();
    var password = $('#password').val();
    var verifycode = $('#captcha').val();
    //判断账号密码是否为空
    console.log(passport);
    if(passport =='' || password == ''){
        $('#passport').addClass('form_input_error');
        $('#password').addClass('form_input_error');
        $('#pport').show();
        return;
    }
    //判断验证码是否为空
    if(verifycode == ''){
        $('#pverity').show();
        $('#pverity').addClass('form_input_error');
        return;
    }

    $.post("<?php echo U('Home/Login/deallog');?>",{passport:passport,password:password,verifycode:verifycode},function(data){
        if(data.verifycodeok != 1)
        {
            $('#pverity').addClass('form_input_error');
            $('#pverity').show();
            return;
        }

        if(data.logok != 1)
        {
            $('#passport').addClass('form_input_error');
            $('#password').addClass('form_input_error');
            $('#pport').show();
            return;
        }
        parent.location.reload();
    },"json");
    return false;
});


    //刷新验证码
    $('#J_CaptchaChange').click(function(){
        $('#J_CaptchaImg').attr('src','<?php echo U("Home/Login/verifycode");?>?t='+Math.random());
        return false;
    });
    //点击隐藏提示信息
    $('#portholder').click(function(){
        $('#portholder label').hide();
        $('#portholder input').focus();
        $('#pport').hide();
        $('#passport').removeClass('form_input_error');
        $('#password').removeClass('form_input_error');
    });
    $('#wordholder').click(function(){
        $('#wordholder label').hide();
        $('#wordholder input').focus();
        $('#pport').hide();
        $('#passport').removeClass('form_input_error');
        $('#password').removeClass('form_input_error');
    });
    $('#verifycodeholder').click(function(){
        $('#verifycodeholder label').hide();
        $('#verifycodeholder input').focus();
        $('#pverity').hide();
        $('#captcha').removeClass('form_input_error');
    });


</script>
</html>