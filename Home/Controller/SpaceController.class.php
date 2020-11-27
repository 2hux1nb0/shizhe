<?php
namespace Home\Controller;

class SpaceController extends FootersController {
	public function index(){
		$id = I('get.id');
         $this->assign('mid',$id);
    	$user = M('user'); // 实例化User对象
    	// 查询满足要求的总记录数
    	$countss = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id )->count();
    	// var_dump($count);die;
    	$video = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id )->order('resources.count desc')->limit(6)->select();
        $users = $user->where($id)->select(); 
    	// var_dump($video);die;
        $com = M('user');
        // 查询满足要求的总记录数
        $counts = $com->join('guestbook ON guestbook.uid = user.id ')->where('mid =%d',$id)->count();
        // var_dump($counts);die;
        // $Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        // $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $com->join('guestbook ON guestbook.uid = user.id ')->where('mid =%d',$id)->limit(3)->order('guestbook.date desc')->select();
        // var_dump($list);die;
        $ur = M('user');
        $urs = $ur->where('id = '.$id)->select();
        $fans = M('user');
        $cou = $fans->join('subscribe ON subscribe.uid = user.id')->where('pid = '.$id)->count();
        // var_dump($count);die;
        $model = $fans->join('subscribe ON subscribe.uid = user.id')->where('pid = '.$id)->select();
        
        // var_dump($list);die;
        $this->assign('cou',$cou);
        
        $this->assign('fans',$model);
        $this->assign('urs',$urs);
        $this->assign('users',$users);
        $this->assign('co',$countss);
        $this->assign('video',$video);
        $this->assign('page',$show);
        $this->assign('counts',$counts);
        $this->assign('reply',$list);
        $this->assign('page',$show);
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
        
        //查评论
        $data = $gues->join('user on uid=user.id')->order('date desc')->where('mid='.$id)->limit(5)->select();

        // 分页显示输出
        $this->assign('gues',$data);

        //显示页面
        $this->display();






    }
 
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
