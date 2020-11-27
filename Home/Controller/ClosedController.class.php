<?php
namespace Home\Controller;
use Think\Controller;
//网站关闭控制器
class ClosedController extends Controller {
	//网站关闭方法
	public function index(){
		//解析模版
		    $website = M('website');
        //查询当前网站的状态
        $status = $website->find(1)['status'];
        //如果状态为1就跳转
        if($status ==1){
            header('location:'.U('index/index'));
        }
		$this->display();
	}
}

?>