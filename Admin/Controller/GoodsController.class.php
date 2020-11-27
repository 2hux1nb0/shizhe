<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class GoodsController extends CommonController {
          public function index(){
    //获取所有分类
        $cates=$this->getAllCate(0);
        //分配变量
            $this->assign('cates', $cates);
            $this->display('goods');
    }

//无限级分类显示(递归获取分类)
    public function getAllCate($pid){
        //获取pid为$pid的分类
        $cate=D('type');
        $cates=$cate->where("pid=$pid")->select();
        $arr=array();
        //遍历分类
        foreach ($cates as $k => $v) {
            $v['submenu']=$this->getAllCate($v['id']);
            $arr[]=$v;
        }
        return $arr;
    }
}