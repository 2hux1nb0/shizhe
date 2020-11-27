<?php
namespace Home\Controller;
use Think\Controller;
class SpacecommentController extends StatusController {
    public function index(){ 
        $id= I('get.id');
        // var_dump($id);die;
        $this->assign('mid',$id);
        $ur = M('user');
        $urs = $ur->where('id = '.$id)->select();
    	// var_dump($urs);die;
        //粉丝数
        //实例化
        $fans = M('user');
        $cou = $fans->join('subscribe ON subscribe.uid = user.id')->where('pid = '.$id)->count();
        $this->assign('cou',$cou);
        $model = $fans->join('subscribe ON subscribe.uid = user.id')->where('pid = '.$id)->select();
        $this->assign('fans',$model);
        // var_dump($model);die;
        $model5=M('website');
        $website=$model5->find(1);//网站配置
        //分配变量
        
        $this->assign('website',$website);
        $this->assign('urs',$urs);
    	
    
        $gues = M('guestbook');
        $count = $gues->join('user on uid=user.id')->where('mid='.$id)->count();
        $this->assign('count',$count);
        // var_dump($count);die;
        //判断是否有评论
        if($count<1)
        {
            $this->assign('nocount',1);
            $this->display();
            return;
        }
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,10);
        //设置分布按钮样式
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','<div  class="qPager"><div class="stat">共 %TOTAL_ROW% 条记录</div><ul class="turn"><li class="pre" title="上一页">%UP_PAGE%</li><li class="next" title="下一页">%DOWN_PAGE%</li></ul><ul class="pages"><li class="current">%LINK_PAGE%</li></ul></div>');
        $show = $Page->show();
        //查评论
        $data = $gues->join('user on uid=user.id')->order('date desc')->where('mid='.$id)->limit($Page->firstRow.','.$Page->listRows)->select();

        // 分页显示输出
        $this->assign('page',$show);
        $this->assign('gues',$data);

        //显示页面
        $this->display();





    }
       //评论增加
    public function comment(){
        $id = I('get.mid');
        // var_dump($id);die;
        $content = I('get.con');
        $uid = session('ykuid');

        $comment = M('guestbook');
        $arr = array(
            'mid'=>$id,
            'con'=>$content,
            'uid'=>$uid,
            'date'=>date('Y-m-d H:i:s')
        );
        $comment->add($arr);
    }
}