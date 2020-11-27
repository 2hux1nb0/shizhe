<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {

    public function add(){

    	if(I('post.password') != I('post.repassword'))
    	{
    		$this->error('两次密码不一致');
    	}

    	$user = M('user');

    	$time = time();

    	$arr = array(
    		'username' => I('post.username'),
    		'password' => I('post.password'),
    		'auth' => I('post.auth'),
    		'status' => '0',
    		'email' => '未设置',
    		'nickname' => I('post.username'),
    		'photo' => '/Youku/Public/Admin/UserPhoto/photo.jpg',
    		'ctime' => $time
    	);

    	$res = $user->add($arr);

    	if($res)
    	{
    		$this->success('添加成功');
    	}

    }

    public function listPage(){

        $user = M('user');

        $users = $user->field('id,username,auth,status,ctime')->select();

        $this->assign('user',$users);

        $this->display();
    }

    public function editPage(){
        $id = I('get.id');
        $user = M('user');
        $res = $user->field('username')->where('id='.$id)->find();

        $this->assign('username',$res['username']);

        $this->display();

    }

    public function changeAuth(){
        $user = M('user');
        //构造数据
        $arr = array('auth'=>I('get.set'));
        $res = $user->where('id='.I('get.id'))->save($arr);
        echo $res ?  0 : -1;
    }

    public function changeStatus(){
        $user = M('user');
        //构造数据
        $arr = array('status'=>I('get.set'));
        $res = $user->where('id='.I('get.id'))->save($arr);
        echo $res ?  0 : -1;
    }

    public function delete(){
        $user = M('user');
        $res = $user->where('id='.I('get.id'))->delete();
        echo $res ?  0 : -1;
    }

}