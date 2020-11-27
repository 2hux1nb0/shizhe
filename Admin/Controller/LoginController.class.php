<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {

        $this->display('login');
    }

    public function gologin()
    {
        $username = I('post.username');
        $password = I('post.password');
        $post = [
            'username' => $username,
            'password' => $password
        ];
        $model = D("user");
        $data = $model->where($post)->find();

        if ($data == null || $data['status'] == 0) {
            $this->error("登录失败", U("login/index"));
        } else {
            // $_SESSION= [
            // 	'id' => $data['id'],
            // 	'username'=> $data['username']
            //  ];

            cookie('ykusername', $data['username']);
            cookie('ykuid', $data['id']);
            session('[start]');
            session('ykusername', $data['username']);
            session('ykuid', $data['id']);

            //$_SESSION['权限'] = ...
            //$_SESSION['用户名'] = ...
            $this->success("登录成功", U("index/index"));
        }
    }

    public function loginuot()
    {
        // $value = session('username');

        //dump(session);


        session(null);
        $this->success("注销成功", U("login/index"));
    }
}