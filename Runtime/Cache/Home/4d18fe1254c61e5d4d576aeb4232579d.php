<?php if (!defined('THINK_PATH')) exit();?>
<link href="/Public/Home/css/footer.css" type="text/css" rel="stylesheet">
<div id="qfooter" class="yk-footer">
    <div class="yk-footer-con">
<div class="cert">
            <div class="cert-list">
                <p></p>
            </div>
            <div class="cert-list">
                <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=nP7w-f-37_nm-ffp3O3tsv-z8Q" style="text-decoration:none;"><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_11.png"/></a></p>
            </div>
            <div class="cert-list">
                <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=nP7w-f-37_nm-ffp3O3tsv-z8Q" style="text-decoration:none;">联系我们</a></p>
            </div>
            <div class="cert-list">
                <p><a target="_blank" href="<?php echo U('Home/Registered/RA');?>">网站条款</a></p>
            </div>
            <div class="cert-list">
                <p><!-- <span class="icon-footer-submit"></span>  --><a target="_blank" href="http://www.12377.cn/">违法和不良信息举报中心</a></p>
            </div>
            <!-- <div class="cert-list">
                <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=nP7w-f-37_nm-ffp3O3tsv-z8Q" style="text-decoration:none;">联系我们</a></p>
                <p><span class="icon-footer-union"></span> <a target="_blank" href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1786197705">合作伙伴</a></p>
                <p><span class="icon-footer-submit"></span> <a target="_blank" href="http://www.12377.cn/">意见反馈</a></p>
                 <p><span class="icon-footer-icbu"></span> <a target="_blank" href="http://182.131.21.137/ccnt-apply/admin/business/preview/business-preview!lookUrlRFID.action?main_id=0D76560AE65141FF9FEFE3481D205C50 ">网站条款</a></p>
            </div> -->
            <div class="cert-list">
            <!--开始-->
              <!-- <?php if(is_array($data)): foreach($data as $k=>$v): if($k < 4 ): ?><p><a target="_blank" href="<?php echo ($v["url"]); ?>"><?php echo ($v["name"]); ?></a></p>

               <?php else: ?>

               <?php if(($k) == "4"): ?></div>

            <div class="cert-list"><?php endif; ?>

            <?php if($k < 8 ): ?><p><a target="_blank" href="<?php echo ($v["url"]); ?>"><?php echo ($v["name"]); ?></a></p>

                  <?php else: ?>
                  <?php if(($k) == "8"): ?></div>

            <div class="cert-list"><?php endif; ?>

             <p><a target="_blank" href="<?php echo ($v["url"]); ?>"><?php echo ($v["name"]); ?></a></p><?php endif; endif; endforeach; endif; ?> -->
            <!--结束-->
            </div>
            
            </div>
        </div>
        <div class="copyright">
           <?php echo ($datas[0]['copyright']); ?>
        </div>
 </div>
</div>
</div>