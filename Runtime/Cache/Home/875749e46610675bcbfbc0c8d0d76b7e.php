<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <title>个人设置</title>


    <style>
/**/
  </style>



<link href="/Public/Home/css/setting/cityLayout-2.css" type="text/css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/setting/youku.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/setting/i.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/setting/grid.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/setting/default.css"/>
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/setting/home.css"/>
<link href="/Public/Home/css/setting/city.css" rel="stylesheet" type="text/css" />
 <link href="/Public/Home/css/setting/style.css" rel="stylesheet" type="text/css" />

 <script src="/Public/Home/js/setting/jquery-1.8.3.min.js"></script>
</head>

<body class="yk-w970">



<div class="s_body">

    <div class="YK yk-con">
        <div class="YK_miniheader yk-row">
            <div class="YK_masthead yk-w970-col18 yk-w1190-col22">
                <div class="YK_mainnav">
                    <div class="title"><a href="javascript:void(0)">设置</a></div>
                    <ul >
                        <li class="current"><a  href="/index.php/Home/Setting/index" >基本设置</a></li>
                        <li  class="" ><a href="/index.php/Home/Setting/setting" >安全设置</a></li>
                    </ul>
                </div>
                <div class="YK_operate"><a href="<?php echo U('Home/Index/index');?>">返回首页</a></div>
                  <div class="clear"></div>
            </div>
        </div>

        <div class="yk-row">
            <div class="YK_dashboard yk-col3">
                <!--视频管理-->
                <div class="YK_dashboard_inner">
                    <ul class="YK_menu" >
                        <li class="current"><a href="#" >基本资料</a></li>
                        <li><a href="/index.php/Home/Setting/protrait">修改头像</a></li>

                    </ul>
                    <ul class="YK_submenu">
                        <li><a href="/index.php/Home/Space/index/id/<?php echo ($model["uid"]); ?>" target="_blank">装扮空间</a></li>
                    </ul>
                </div>
            </div>

            <div class="YK_main yk-w970-col15 yk-w1190-col19">
                <div class="YK_setting">
                    <div class="content">
                        <div id="set_profile_wrap">
                            <div id="set_profile"><!-- content begin -->
                                <div class="content" _uc="setting" id="profile">


                                    <div class="formbox">
                                        <fieldset>
                                            <!--没有绑定邮箱 END-->

                       <form name="form1" action="/index.php/Home/Setting/update" method="post" id="sv_profile" class="userexinfo-form">
                                 <input type="hidden" name="id" value="<?php echo ($model["id"]); ?>">

                                    <script type="text/javascript">
                                    //<![CDATA[
                                    $(function(){
                                            //如果是必填的，则加红星标识.
                                            $("form :input.required").each(function(){
                                                var $required = $("<strong class='high'> *</strong>"); //创建元素
                                                $(this).parent().append($required); //然后将它追加到文档中
                                            });
                                             //文本框失去焦点后
                                            $('form :input').blur(function(){
                                                 var $parent = $(this).parent();
                                                 $parent.find(".formtips").remove();
                                                 //验证用户名
                                                 if( $(this).is('#username') ){
                                                        if( this.value=="" || this.value.length < 6 ){
                                                            var errorMsg = '请输入至少6位的用户名.';
                                                            $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
                                                        }else{
                                                            var okMsg = '输入正确.';
                                                            $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
                                                        }
                                                 }


                                            }).keyup(function(){
                                               $(this).triggerHandler("blur");
                                            }).focus(function(){
                                               $(this).triggerHandler("blur");
                                            });//end blur

                                    })

                                    </script>

                                            <div class="entry">

                                                  <label for="username">昵称:</label>
                                              <input type="text" id="username" name='username' class="form_select" value="<?php echo ($model["username"]); ?>" />
                                            </div>
                                            <!--修改昵称 START-->


                                            <!--修改昵称 END-->

                                                <div class="entry">
                                                                    <label>性别：</label>
                                					<span class="gender">
                                						<input type="radio" name="sex" value="1" <?php echo ($model['sex']=='1'? "checked" : ""); ?> >男
                                                                                                                    &nbsp    &nbsp    &nbsp    &nbsp
                                                    <input type="radio" name="sex" value="0" <?php echo ($model['sex']=='0'? "checked" : ""); ?> >女
                                					</span>
                                        </div>





<script  type="text/javascript">
        $(function(){




            $("#province").live("change", function (){

                $.get( "<?php echo U('Home/Setting/getNextCates');?>", {parent_id:$(this).find("option:selected").attr("area_id")}, function(data){
              $("#city").html('');
                  $.each(data,function(i,n){
                     $("#city").append('<option maskid="" area_id="'+n.area_id+'" value="'+n.area_name+'">'+n.area_name+'</option>');
                  });
                },'json')
            });


            $("#city").live("change", function (){

                $.get( "<?php echo U('Home/Setting/getNextCates');?>", {parent_id:$(this).find("option:selected").attr("area_id")}, function(data){
              $("#area").html('');
                  $.each(data,function(i,n){
                     $("#area").append('<option maskid="" area_id="'+n.area_id+'" value="'+n.area_name+'">'+n.area_name+'</option>');
                  });
                },'json')
            });

        })
    </script>

		     <div class="entry">

                                                    <label>所在地：</label>
		<span class="title" style="">
                                      <select name='province' id="province" >
                                                 <option value="<?php echo ($model["province"]); ?>" selected><?php echo ($model["province"]); ?></option>
                                              <?php if(is_array($cates)): foreach($cates as $key=>$v): ?><option name="province" area_id="<?php echo ($v["area_id"]); ?>" value="<?php echo ($v["area_name"]); ?>"><?php echo ($v["area_name"]); ?></option><?php endforeach; endif; ?>
                                          </select>

                                                 <select name='city' id="city">
                                                      <option value="<?php echo ($model["city"]); ?>" selected><?php echo ($model["city"]); ?></option>
                                                   <?php if(is_array($v['submenu'])): foreach($v['submenu'] as $key=>$vo): ?><option name="city" value="<?php echo ($vo["area_name"]); ?>"><?php echo ($vo["area_name"]); ?></option><?php endforeach; endif; ?>
                                                  </select>

                                               <select name='area' id="area">
                                                    <option value="<?php echo ($model["area"]); ?>" selected><?php echo ($model["area"]); ?></option>
                                                 <?php if(is_array($vo['submenu'])): foreach($vo['submenu'] as $key=>$vol): ?><option name="area" value="<?php echo ($vol["area_name"]); ?>"><?php echo ($vol["area_name"]); ?></option><?php endforeach; endif; ?>
                                             </select>
                                       </span>

<!--start-->




																								</div>


                                                <div class="entry">
                                                    <label>生日：</label>

        <select  id="YYYY" name="years" onchange="YYYYDD(this.value)">
                <option value="" selected>请选择 年</option>
            </select>
            <select  id="MM" name="month" onchange="MMDD(this.value)">
                <option value="" selected>选择 月</option>
            </select>
            <select id="DD" name="day" >
                <option value="" selected>选择 日</option>
            </select>

        <script language="JavaScript">
            function YYYYMMDDstart()
            {
                MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                //先给年下拉框赋内容
                var y   = new Date().getFullYear();
                for (var i = (y-50); i < (y+1); i++) //以今年为准，前30年，后30年
                    document.form1.YYYY.options.add(new Option(" "+ i +" 年", i));

                //赋月份的下拉框
                for (var i = 1; i < 13; i++)
                    document.form1.MM.options.add(new Option(" " + i + " 月", i));

                document.form1.YYYY.value = <?php echo ($model["years"]); ?>;
                document.form1.MM.value = <?php echo ($model["month"]); ?>;

                // document.form1.MM.value = new Date().getMonth() + 1;
                var n = MonHead[new Date().getMonth()];
                // if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;
                    writeDay(n); //赋日期下拉框
                // document.form1.DD.value = new Date().getDate();
                 document.form1.DD.value = <?php echo ($model["day"]); ?>;

            }
            if(document.attachEvent)
                window.attachEvent("onload", YYYYMMDDstart);
            else
                window.addEventListener('load', YYYYMMDDstart, false);
            function YYYYDD(str) //年发生变化时日期发生变化(主要是判断闰平年)
            {
                var MMvalue = document.form1.MM.options[document.form1.MM.selectedIndex].value;
                if (MMvalue == ""){ var e = document.form1.DD; optionsClear(e); return;}
                var n = MonHead[MMvalue - 1];
                if (MMvalue ==2 && IsPinYear(str)) n++;
                    writeDay(n)
            }
            function MMDD(str)  //月发生变化时日期联动
            {
                var YYYYvalue = document.form1.YYYY.options[document.form1.YYYY.selectedIndex].value;
                if (YYYYvalue == ""){ var e = document.form1.DD; optionsClear(e); return;}
                var n = MonHead[str - 1];
                if (str ==2 && IsPinYear(YYYYvalue)) n++;
                    writeDay(n)
            }
            function writeDay(n)  //据条件写日期的下拉框
            {
                var e = document.form1.DD; optionsClear(e);
                for (var i=1; i<(n+1); i++)
                    e.options.add(new Option(" "+ i + " 日", i));
            }
            function IsPinYear(year)//判断是否闰平年
            {
                return(0 == year%4 && (year%100 !=0 || year%400 == 0));
            }
            function optionsClear(e)
            {
                e.options.length = 1;
            }
    //-->
    </script>


                                              </div>
                                            <div class="entry txt">
                                                    <label>个人简介：</label>
                                                    <textarea class="form_input" style="width:325px;height:100px;"  name="introduction"  value="" /><?php echo ($model["introduction"]); ?>  </textarea>

                                                    <div class="counter">0/400</div>

                                          </div>
                                                <div class="entry savebtn">
                                                    <div >
                                                          <button id="send" class="btn btn-info btn-large"   onclick='validate()' type="submit">保存</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </fieldset>
                                    </div>
                                    <div class="aside">
                                        <h3>完善个人资料</h3>

                                        <p>资料更完整，帐号更安全。完善个人资料将帮助我们改善服务。</p>
                                    </div>
                                </div>

                                <!-- content end -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main end-->
            <div class="clear"></div>
        </div>
        <!--layout end-->
    </div>
    <!--YKU end-->

</div>
<!--s_body-->
<!--小页尾-->

<div class="s_miniFooter">
    <div class="footerBox">
        <div class="copyright">
            Copyright©2020 师者 shizhe.com 版权所有
            <a href="/index.php/Home/Setting/upload-provision.html" target="_blank">反盗版盗链声明</a>
            <a href="#" target="_blank">京ICP证060288号</a>
            <a href="#" target="_blank">
                <span class="icp" title="经营性网站备案"></span>
            </a>
        </div>
    </div>
</div>

</body>
</html>