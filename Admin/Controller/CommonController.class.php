<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller
{
    public function _initialize()
    {
        if (empty($_SESSION['ykuid'])) {
            $this->error('请登录', U("login/index"));
        }
            $AUTH = new \Think\Auth();
            //类库位置应该位于ThinkPHP\Library\Think\
        if (!$AUTH->check(MODULE_NAME . '/' . CONTROLLER_NAME, session('ykuid'))) {
            $this->error('没有权限',U('login/index'));
//            if (!$AUTH->check(MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME, session('ykuid'))) {
//                $this->error('没有权限',U('login/index'));
            }
        }

}