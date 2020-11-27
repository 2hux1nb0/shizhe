<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class SearchController extends FootersController {
	public function index(){
		//搜索
	$resources=I('get.resources');
          //获取每一页的条数 默认10
        $num = I('get.num');
        $num = !empty($num) ? $num : 15;
        //声明一个条件字符串
        //判断
        if($resources){
            $where['title']=['like','%'.$resources.'%'];
        }
        $search=I('get.search');
        $play=I('get.play');

        if($search=="id"){
        	$order = 'id desc';
        }else  if($play=="count"){
        	$order='count desc';
        }

	//3.组合sql语句
// var_dump($search);

	$model=M("resources");
            //查询数据总条数
        $conunt = $model->where($where)->count();
        //实例化分页
        //实例换分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt, $num);
        $pages = $Page->show(); //分页显示输出
        //获取limit参数
        $limit = $Page->firstRow . ',' . $Page->listRows;

	$data=$model->where($where)->order($order)->limit($limit)->select();
         //分配变量
            $this->assign('conunt',$conunt);
              $this->assign('pages', $pages);//页码
            $this->assign('num', $num);//每一页显示的条数
	$this->assign('model',$data);
	$this->display();

	}
}




