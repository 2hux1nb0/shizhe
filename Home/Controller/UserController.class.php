<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends FootersController {

	//获取用户信息
	public function get_uinfo(){
		$id=session('ykuid');

		$user = M('user');
		$data = $user->where('id='.$id)->find();

		echo json_encode($data);
	}
}