<?php
namespace Home\Controller;
use Think\Controller;
class  ShangyeController extends FootersController{
    /**
     *电影首页
     */
    public function index(){
        $model = M("resources");
        $where['class'] = '14';
        //查询数据总条数
        $conunt = $model->where($where)->count();
        //实例化分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt,24);
        //分页显示输出
        $pages = $Page->show();
        //获取limit参数
        $limit = $Page->firstRow . ',' . $Page->listRows;
        $data=$model->where($where)->order('cupport desc')->limit($limit)->select();
        //分配变量
        $this->assign('conunt',$conunt);
        //页码
        $this->assign('pages', $pages);
        $this->assign('sztj',$data);
        
        $this->display();
        $cObj = new FootersController();
        $cObj->index();
    }
}