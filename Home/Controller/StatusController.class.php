<?php
namespace Home\Controller;
use Think\Controller;
class StatusController extends FootersController {

	//当前类自动执行的一个方法
	public function _initialize(){
		//实例化模型
		$website = M('website');
		//查询当前网站的状态
		$status = $website->find(1)['status'];
		//如果状态为0就跳转
		if(!$status){
			header('location:'.U('Closed/index'));
		}

	}

	public function _empty(){
	header("HTTP/1.0 404 Not Found");//使HTTP返回404状态码
	$this->display("Public:404");
	}

}

?>