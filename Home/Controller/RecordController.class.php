<?php
namespace Home\Controller;
use Think\Controller;
class RecordController extends FootersController {
	public function index(){
        if(empty(session('ykuid')))
        {
            $this->error('未登录',U('Home/Index/index'));
        }
		$id = session('ykuid');

	 $data = M()->table(array('record'=>'rc','resources'=>'re'))->where('rc.rid=re.id and rc.uid='.$id)->limit(15)->select();

			$this->assign('model',$data);
			$this->display();
    }

    public function delete(){
        $id= I('post.id');
        $where['id'] = $id;
        $data = M('record')->where($where)->delete();
        echo json_encode($data);
    }
}