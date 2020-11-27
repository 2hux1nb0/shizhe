<?php
namespace Home\Controller;
use Think\Controller;
class RegisteredController extends FootersController {
    /**
     *用户注册
     */
    public function index(){

        $this -> display();
    }
    public function add(){

        $code = I('post.captcha');
        $verify = new \Think\Verify();
        if(!$verify->check($code)){
            $this->error('验证码错误!');
        }
        $data['username'] = I('post.passport');

        $model = M('user');
        $user = $model->where($data)->select();
        if($user){
            $this->error('用户名已存在!');

        }else{
            $data['password'] = I('post.password');
            $data['ctime'] = time();
            $data['photo'] = '/Public/Admin/UserPhoto/photo.jpg';
            if($result = $model->add($data)){
                cookie('ykusername',$data['username']);
                cookie('ykuid',$result);
                session('[start]');
                session('ykusername',$data['username']);
                session('ykuid',$result);

                $this->success("注册成功", U("index/index"));
            }else{
                $this->error('注册失败');
            }
        }
    }
    public function verify_c(){
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->useCurve = false;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789';
        $Verify->entry();
    }
    public function yyy($code){
        $verify = new \Think\Verify();
        return $verify->check($code);
    }
   public function check_verify(){

    }
}