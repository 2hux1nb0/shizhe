<?php
namespace Home\Controller;
use Think\Controller;
class CollectController extends FootersController {
	public function index(){
		$value = session('ykuid');
		$where['collection.uid'] = $value;

		 $cle = M('resources')-> join(" collection  On collection.rid = resources.id") ->where($where)->  select();
		// dump($cle).die();
	$this->assign('data',$cle);
	$this->display();
    }
    public function delete(){
        $id= I('post.id');
        $where['rid'] = $id;
        $collection = M('collection');
        $data = $collection->where($where)->delete();
        // echo $collection->getLastSql();
        echo json_encode($data);
    }
}