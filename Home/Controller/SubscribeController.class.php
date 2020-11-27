<?php
namespace Home\Controller;
use Think\Controller;
class SubscribeController extends FootersController {
	public function index(){
        if(empty(session('ykuid')))
        {
            $this->error('未登录',U('Home/Index/index'));
        }
		//查询订阅的人的信息
        $uid = session('ykuid');
		$user = M();
		$data = $user->table('user a,subscribe b')->where('b.pid=a.id and b.uid='.$uid)->select();
		// echo '<pre>';
		// var_dump($data);
		// echo '<pre>';
		// exit();
		$this->assign('suser',$data);
		$this->display();
    }

    //ajax传送订阅数据
    public function sendSubscribe(){
    	//获取需要传递数据的用户ID
    	$uid =  I('get.uid');
    	$resources = M('resources');
    	$data = $resources->order('time desc')->limit(4,0)->where('uid='.$uid)->select();
        //查用户信息
        $user = M('user');
        $user = $user->where('id='.$uid)->find();
        $arr = array($data,'user'=>$user);

        //数据连在一起返回

    	// echo '<pre>';
    	// var_dump($arr);
    	// echo '<pre>';
    	// exit();
    	echo json_encode($arr);
    }

    // public function sendUsermessage(){
    // 	//获取需要传递数据的用户ID
    // 	$uid =  I('get.uid');
    // 	$user = M('user');
    // 	$data = $user->where('id='.$uid)->find();
    // 	// echo '<pre>';
    // 	// var_dump($data);
    // 	// echo '<pre>';
    // 	// exit();
    // 	echo json_encode($data);
    // }
}