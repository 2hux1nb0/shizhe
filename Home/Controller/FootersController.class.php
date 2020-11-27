<?php
namespace Home\Controller;
use Think\Controller;
class FootersController extends Controller {
    //网站关闭方法
    public function index(){
        $servername = $_SERVER['SERVER_NAME'];
        $this ->assign('servername',$data);

        $model = M('url');
        $data = $model ->limit(12)->select();
        $website = M('website');
        $status = $website->find();
        //如果状态为0就跳转
        if($status['status'] == 0){
            header('location:'.U('Closed/index'));
        }
        $this ->assign('data',$data);
        $this ->display('footers:index');

        //获取域名


    }
}

?>