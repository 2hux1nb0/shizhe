<?php
namespace Admin\Controller;
class CommentController extends CommonController {

	public function index(){
	$num = I('get.num');
	$num = !empty($num)?$num :10;
	//条件
 	$where = '';
	//获取搜索的关键字
	$keyword = I('get.keyword');
	
 	//判断
	if($keyword){
		$where['username'] = array('like','%'.$keyword.'%');
		$where['title'] = array('like','%'.$keyword.'%');
		$where['con'] = array('like','%'.$keyword.'%');
		$where['_logic'] = 'or';
	}
	
	//实例化查询模型
 	$model = M('reply');
 	//var_dump($model);die;	
 	//获取总数
 	// var_dump($model);die;
 	$count =$model->join('user ON user.id = reply.uid')->where($where)->join('resources ON resources.id = reply.rid')->count();
 	// var_dump($count);die;
 	//实例化分页
 	//实例化分页类  传入总条数和每页显示的条数
 	$Page = new \Think\Page($count,$num);


 	// $page->setConfig('header','<div class="col-sm-6"><div class="dataTables_info" id="editable_info" role="alert" aria-live="polite" aria-relevant="all">显示%FIRST%到 %END%项，共 %TOTAL_ROW% 项</div></div>');
 	// $page->setConfig('prev','<div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="editable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="editable" tabindex="0" id="editable_previous"><a href="#">%UP_PAGE%</a></li>');
 	// $page->setConfig('num','<li class="paginate_button active" aria-controls="editable" tabindex="0"><a href="#">%LINK_PAGE%</a></li>');
 	// $page->setConfig('next','<li class="paginate_button next" aria-controls="editable" tabindex="0" id="editable_next"><a href="#">下一页</a></li></ul></div></div></div>');
 	// $page->setConfig('theme','%FIRST% %END% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% ');
 	// var_dump($Page);die;
 	//分页显示输出
 	$pages = $Page->show();
 	//获取limit参数
 	$limit = $Page->firstRow.','.$Page->listRows;
 	//查询满足条件的所有资源
 	$replys = $model->join('user ON user.id = reply.uid')->where($where)->join('resources ON resources.id = reply.rid')->limit($limit)->select();
 	//分配变量
 	$this->assign('replys',$replys);
 	$this->assign('num',$num);
 	$this->assign('pages',$pages);
 	$this->assign('keyword',$keyword);
 	$this->display();
	}


	//用户的删除操作
	public function delete(){
		//实例化模型
		$reply = M('reply');
		//获得用户的id
		$id = I('get.id');
		// var_dump($id);die;	
		
		// $model = $reply->where($id)->select();
		
		// var_dump($model);die;
		//删除
		if($reply->delete($id)){
			//成功
			$this->success('删除成功' , U('Comment/index', 3));
		}else{
			//删除失败
			$this->error('删除失败', U('Comment/index', 3));
		}
	}
	// //用户查看操作
	// public function check(){
	// 	$model = M('reply');
	// 	$id = I('get.id');
	// 	var_dump($id);die;
	// 	$where['id'] = $id;
	// 	$reply = $model->join('user ON user.id = reply.uid')->join('resources ON resources.id = reply.rid')->where($where)->select();
	// 	var_dump($reply);die;
	// 	 echo json_encode($data);

	// }
	 public function edit($id){
        $model = D("reply");       
        $data = $model->join('user ON user.id = reply.uid')->join('resources ON resources.id = reply.rid')->find($id);
        // var_dump($data);die;
        $this->assign('model', $data);       
        $this->display();
    }
    //评论修改操作
	public function update(){
        $model = M("reply");
        $model->join('user ON user.id = reply.uid')->join('resources ON resources.id = reply.rid')->create();

        if($model->save()){
            $this->success("修改成功",U("Comment/index"));
        }else{
            $this->error("修改失败",U("Comment/index"));
        }
	}
  	
}