<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function login(){
		$this->display();
	}

	public function verifycode(){
		$config = array(
		    'fontSize'    =>    40,    // 验证码字体大小
		    'length'      =>    3,     // 验证码位数
		    'useNoise'    =>    false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

	public function deallog(){
		$passport = I('post.passport');
		$password = I('post.password');
		$verifycode = I('post.verifycode');
		//判断验证码
		if(!$this->check_verify($verifycode)){
			$arr = array(
				'verifycodeok' => 0
			);
			echo json_encode($arr);
			return 0;
		}

		//判断账号密码
		$user = M('user');
		$data = $user->where("username= '$passport' and password = '$password'")->find();
		// echo '<pre>';
		// var_dump($data);
		// echo '<pre>';
		// exit();
		if($data)
		{
			//登录成功
			$arr = array(
				'verifycodeok' => 1,
				'logok' => 1
			);
			cookie('ykusername',$data['username']);
			cookie('ykuid',$data['id']);
			session('[start]');
			session('ykusername',$data['username']);
			session('ykuid',$data['id']);
			// $this->success('登录成功', U('Index/index'));
			echo json_encode($arr);
            //$this->success('登录成功', U('Home/Index/index'));
			// $this->success("6666","Index/index");
		}else{

			//登录失败
			$arr = array(
				'verifycodeok' => 1,
				'logok' => 0
			);

			echo json_encode($arr);
		}



	}

	public function logout(){
		session('ykusername',null);
		session('ykuid',null);
		cookie('ykusername',null);
		cookie('ykuid',null);
	}
	public function check_verify($code){
	    $verify = new \Think\Verify();
	    return $verify->check($code);
	}
}