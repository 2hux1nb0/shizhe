<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="zh-cn"/>
    <title>用户注册</title>
    <meta name="keywords" content="视频,视频分享,视频搜索,视频播放,教学视频,师者"/>
    <meta name="description" content="师者-中国第一教学视频网站,提供视频播放,视频发布,视频搜索 - 视频服务平台,提供视频播放,视频发布,视频搜索,视频分享 - 师者视频"/>
    <link rel="icon" href="/Public/Home/pic/favicon.png" type="image/png" >
    <link rel="stylesheet" href="/Public/Home/css/youku.434.css"/>
    <link rel="stylesheet" href="/Public/Home/css/signup_page.fd87b9408a.css"/>
    <script src="/Public/Home/js/jquery-1.8.3.min.js "></script>
    <script data-main="main.signup" src="/Public/Home/js/base.c2602a4635.js"></script>
    <script>if (window.requirejs) {
        requirejs.config({"paths": {"main.signup": "/Public/Home/js/main.signup"}});
    }</script>
    <script>if (window.requirejs) {
        requirejs.config({"baseUrl": "//"});
    }
    ;</script>
    <script>
        $(function(){
       $('#captcha').blur( function () {
           var  code = $(this).val();
           $.ajax({
               url:"/index.php/Home/check_verify",          //跳转地址
               type: 'POST',
               dataType: 'json',                    //类型
               data:{"code":code},           //传的值
               success:function(data){              //成功回调函数
                 alert('123');
               }
        } );
        })
    </script>

</head>
<body class="yk-w970">
<div class="window">
    <div class="screen">
        <div class="passport-page signup-skin1">
            <div class="yk-header">
                <div class="yk-box"><a href="<?php echo U('Home/Index/index');?>"><img src="/Public/Home/pic/shizhe.png" alt="ShiZhe 师者" style="margin-top: 8px;margin-left: 516px;" /></a></div>
            </div>
            <div class="yk-container">
                <div class="right">
                    <div class="loginbox">
                        <div class="loginhead">
                            <div class="title" style="font-family: cursive;"><b>师者,所以传道受业解惑也</b></div>
                            <div class="extand"><a class="link-minor" href="javascript:;" id="J_BtnLogin"></a></div>
                        </div>
                        <div id="J_PageLogin">
                            <div class="formbox" id="signupArea" data-page="signup">
                                <form action="/index.php/Home/Registered/add"
                                    method="post">
                                    <fieldset>
                                        <div class="entry"><label for="passport" class="form_input_placeholder"><span style="margin-left: 35px;">请输入手机号</span></label><input
                                                widget="input" id="passport" name="passport"
                                                class="form_input form_input_l" type="text" tabindex="1"/></div>
                                        <div class="entry"><label for="password" class="form_input_placeholder"><span>请输入6~16位密码</span></label><input
                                                widget="input" id="password" name="password"
                                                class="form_input form_input_l" type="password" tabindex="2"/></div>
                                        <div class="entry captcha-area" id="J_CaptchaArea">
                                            <img id = 'yzmq' class="left15" alt="验证码" src="<?php echo U('Registered/verify_c');?>" onclick="this.src='<?php echo U('Registered/verify_c');?>?'+Math.random() ">
                                            <label for="captcha"  class="form_input_placeholder">
                                            <span>验证码</span></label><input
                                                widget="input" id="captcha" name="captcha"
                                                class="form_input form_input_l" type="text" tabindex="3"
                                                style="width:82px;"/>
                                          <!--  <button widget="button" type="button" id="J_CaptchaChange"
                                                    class="btn btn-large btn-minor"  onclick="$('#yzmq').src='<?php echo U('Registered/verify_c');?>?'+Math.random() "><span class="btn-text"><i
                                                    class="ico-repeat"></i></span></button>-->
                                        </div>
                                     <!--   <div class="entry smscode-signup smscode-area" id="J_SmscodeArea"><label
                                                for="J_SmscodeSignup"
                                                class="form_input_placeholder"><span>验证码</span></label><input
                                                widget="input" id="J_SmscodeSignup" name="smscode"
                                                class="form_input form_input_l" type="text" tabindex="3"
                                                style="width:97px;"/>
                                            <button widget="button" type="button" id="J_SmsSignup"
                                                    class="btn btn-large btn-minor" style="width:50%"
                                                    data-tcode="ykreg"><span class="btn-text">获取验证码</span></button>
                                        </div>-->
                                        <div class="entry save"><input widget="input" id="remember" name="remember"
                                                                       type="checkbox" checked="checked" disabled="true"
                                                                       tabindex="4"/><label for="remember">同意 </label><a
                                                href="/index.php/Home/Registered/RA.html"
                                                target="_blank">师者注册协议</a> 及 <a
                                                href="/index.php/Home/Registered/Copyright.html"
                                                target="_blank">版权声明</a></div>
                                        <div class="action">
                                            <button widget="button" type="submit" id="J_SubmitSignup"
                                                    class="btn btn-large btn-major" style="width:100%"><span
                                                    class="btn-text">注 册</span></button>
                                        </div>
                                    </fieldset>
                                    <input widget="input" id="callback" name="callback" type="hidden"/><input
                                        widget="input" id="loginOperateSt" name="from" type="hidden"
                                        from="header"/><input widget="input" id="J_WinType" name="wintype" type="hidden"
                                                              value="page"/>
                                    </form>
                                <iframe style="display:none" name="signupSubmit"></iframe>
                            </div>
                            <!-- <div class="form-other"><span>已有账号  <a class="link-minor"
                                                                   href="<?php echo U('Home/Login/login');?>">直接登录</a></span>
                            </div> -->
                            <!-- <div class="splitline-or"><span>或</span></div>
                            <div class="thirdparties passport-inner" id="connectLoginArea">
                                <div class="main-links">
                                    <ul class="clearfix">
                                        <li><a connect="qzone"
                                               config=" 'cp': 1000208, 'cpp': 4001521, 'width': 710, 'height': 400, 'title': '腾讯QQ' "
                                               title="用QQ账号登录" charset="hz-4003757-1000494"><i class="ico-QQ"></i><em>QQ账号登录</em></a>
                                        </li>
                                        <li><a connect="taobao"
                                               config=" 'cp': 0, 'cpp': 0, 'width': 670, 'height': 620, 'title': '淘宝' "
                                               title="用淘宝账号登录" charset="hz-4003759-1000494"><i
                                                class="ico-taobao"></i><em>淘宝账号登录</em></a></li>
                                        <li><a connect="wechat"
                                               config=" 'cp': 0, 'cpp': 0, 'width': 400, 'height': 570, 'title': '微信' "
                                               title="用微信扫码登录" charset="hz-4009931-1000494"><i
                                                class="ico-wechat"></i><em>微信扫码登录</em></a></li>
                                        <li><a connect="alipay"
                                               config=" 'cp': 1000208, 'cpp': 4002404, 'width': 950, 'height': 700, 'title': '支付宝' "
                                               title="用支付宝账号登录" charset="hz-4003759-1000494"><i class="ico-zfb"></i><em>支付宝账号登录</em></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub-links"><span class="handle">其他方式</span>

                                    <div class="panel"><a connect="sina"
                                                          config=" 'cp': 1000208, 'cpp': 4000632, 'width': 750, 'height': 580, 'title': '微博' "
                                                          title="用新浪微博账号登录" charset="hz-4003755-1000494"><i
                                            class="ico-weibo"></i></a><a connect="tencent"
                                                                         config=" 'cp': 1000208, 'cpp': 4001348, 'width': 630, 'height': 440, 'title': '腾讯微博' "
                                                                         title="用腾讯微博账号登录"><i
                                            class="ico-txweibo"></i></a><a connect="renren"
                                                                           config=" 'cp': 1000208, 'cpp': 4000632, 'width': 600, 'height': 390, 'title': '人人网' "
                                                                           title="用人人网账号登录"><i
                                            class="ico-renren"></i></a><a connect="kaixin"
                                                                          config=" 'cp': 1000208, 'cpp': 4003120, 'width': 570, 'height': 370, 'title': '开心网' "
                                                                          title="用开心账号登录"><i class="ico-kaixin"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="formbox mqform" id="J_MQMain">
                            <form method="post" action=""
                                  name="formMQLogin" target="formMQLogin">
                                <fieldset>
                                    <div class="entry phone"><label for="mobile" class="form_input_placeholder"><span>请输入手机号</span></label><input
                                            widget="input" id="mobile" name="mobile" class="form_input form_input_l"
                                            type="text" tabindex="1"/></div>
                                    <div class="entry phone" style="display:none"><span class="phonenum"
                                                                                        id="MQmobilenum"></span><span
                                            class="action" id="MQchangenum"><a href="javascript:;">更改</a></span></div>
                                    <div id="J_Captcha_Placeholder"></div>
                                    <div class="entry smscode-area"><label for="J_SmscodeMQLogin"
                                                                           class="form_input_placeholder"><span>验证码</span></label><input
                                            widget="input" id="J_SmscodeMQLogin" name="code"
                                            class="form_input form_input_l" type="text" tabindex="4"
                                            style="width:97px;"/>
                                        <button widget="button" type="button" id="J_SmsMQLogin"
                                                class="btn btn-large btn-minor"
                                                style="width:120px;position:absolute;right:0;top:0;"
                                                data-tcode="mqlogin"><span class="btn-text">获取验证码</span></button>
                                    </div>
                                    <div class="entry save"><input widget="input" id="J_MQCheck" type="checkbox"
                                                                   checked="checked" disabled="true"
                                                                   data-dfname="mqcheck"/><label
                                            for="J_MQCheck">同意 </label><a
                                            href="/index.php/Home/Registered/RA.html"
                                            target="_blank">师者注册协议</a> 及 <a
                                            href="/index.php/Home/Registered/Copyright.html"
                                            target="_blank">版权申明</a></div>
                                    <div class="action">
                                        <button widget="button" type="submit" id="J_SubmitMQLogin"
                                                class="btn btn-large btn-major" style="width:100%"><span
                                                class="btn-text">快速登录</span></button>
                                    </div>
                                </fieldset>
                                <input widget="input" id="J_MQCallback" name="callback" type="hidden"/><input
                                    widget="input" id="loginOperateSt2" name="from" type="hidden" from="header"/><input
                                    widget="input" id="J_MQWinType" name="wintype" type="hidden"/></form>
                            <iframe style="display:none" name="formMQLogin"></iframe>
                            <div class="form-other"><span class="register">已有账号  <a class="link-minor"
                                                                                    href="/user/login"
                                                                                    class="gotoCommonLogin">直接登录</a></span>
                            </div>
                        </div>
                        <div id="J_WinNickname" style="display:none">
                            <div class="win-stbox st-wrap">
                                <div class="result"><i class="ico-success"></i>注册成功！</div>
                                <div class="formbox">
                                    <form target="formNickname">
                                        <fieldset>
                                            <div class="entry">
                                                <div class="tips">请设置昵称</div>
                                                <label for="J_InputNickname" class="form_input_placeholder"><span>2-15个汉字或4-30个字符</span></label><input
                                                    widget="input" id="J_InputNickname" name="nickname"
                                                    class="form_input form_input_l" type="text" tabindex="1"/></div>
                                            <div class="action">
                                                <button widget="button" type="submit" id="J_BtnNickname"
                                                        class="btn btn-large btn-major" style="width:100%"><span
                                                        class="btn-text">保 存</span></button>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <iframe style="display:none" name="formNickname"></iframe>
                                </div>
                                <div class="form-other">如跳过，系统将生成随机昵称。
                                    <div class="linkskip"><a class="link-minor" id="J_BtnSkipNickname"
                                                             href="javascript:;">跳过</a></div>
                                </div>
                            </div>
                            <div class="win-stbox st-success" style="display:none;">
                                <div class="result"><i class="ico-success"></i>保存成功！
                                    <div class="info">3秒后自动关闭</div>
                                </div>
                            </div>
                        </div>
                        <div id="J_WinStatus" style="display:none">
                            <div class="win-stbox st-wrap">
                                <div class="result"><i class="ico-success"></i>登录成功！</div>
                                <div class="formbox">
                                    <form target="formSetpwd">
                                        <fieldset>
                                            <div class="entry">
                                                <div class="tips">请设置密码，方便以后登录。</div>
                                                <label for="J_InputMQPassword" class="form_input_placeholder"><span>请输入6~16位密码</span></label><input
                                                    widget="input" id="J_InputMQPassword" name="password"
                                                    class="form_input form_input_l" type="password" tabindex="1"/></div>
                                            <div class="action">
                                                <button widget="button" type="submit" id="J_BtnMQPassword"
                                                        class="btn btn-large btn-major" style="width:100%"><span
                                                        class="btn-text">保 存</span></button>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <iframe style="display:none" name="formSetpwd"></iframe>
                                </div>
                                <div class="form-other">如跳过，系统将生成随机密码发送到您手机，可以在个人设置中修改。
                                    <div class="linkskip"><a class="link-minor" id="J_BtnSkip"
                                                             href="javascript:;">跳过</a></div>
                                </div>
                            </div>
                            <div class="win-stbox st-success" style="display:none;">
                                <div class="result"><i class="ico-success"></i>保存成功！
                                    <div class="info">3秒后自动关闭</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loginbg"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>