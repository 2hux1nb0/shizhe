<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends FootersController {
	public function index(){
		if(empty(session('ykuid')))
		{
			$this->error('未登录',U('Home/Index/index'));
		}
		$this->assign('title','上传视频');
		$this->display();
    }

    public function uploadVideo(){

	    $config = array(
	        'maxSize'    =>    31457280000000,		// 设置附件上传大小
	        'rootPath'   =>    './Uploads/Video/', // 设置附件上传根目录
	        'savePath'   =>    '',
	        'saveName'   =>    array('uniqid',''),
	        'exts'       =>    array('flv','mp4'),// 设置附件上传类型
	        'autoSub'    =>    true,
	        'subName'    =>    array('date','Ymd'),
	    );
	    $upload = new \Think\Upload($config);// 实例化上传类
	    // 上传文件
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	    	$this->error($upload->getError(),U('Home/Upload/index'),5);
	    }else{// 上传成功


	    	//文件路径
	    	$path = '/Uploads/Video/'.$info['vf']['savepath'].$info['vf']['savename'];
	    	$arr = array(
	    		'uid' =>session('ykuid'),
		    	'content' => $path,
		    	'time' =>time()
	    	);

	    	$resources = M('resources');

	    	$upload_id = $resources->add($arr);
	    	// echo $upload_id;

	    	session('upload_id',$upload_id);
	    	// $this->success('上传成功！',U('Home/Upload/uploadInfo'),-1);
	    	redirect(U('Home/Upload/uploadInfo'));
	    }
    }
	public function uploadInfo(){
		$this->assign('title','上传视频');
		$this->display('uploadProgress');
    }
    public function insertInfo(){
    	// var_dump($_POST);die();
	    $config = array(
	        'maxSize'    =>    3145728,		// 设置附件上传大小
	        'rootPath'   =>    './Uploads/Img/', // 设置附件上传根目录
	        'savePath'   =>    '',
	        'saveName'   =>    array('uniqid',''),
	        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),// 设置附件上传类型
	        'autoSub'    =>    true,
	        'subName'    =>    array('date','Ymd'),
	    );
	    $upload = new \Think\Upload($config);// 实例化上传类
	    // 上传文件
	    $info   =   $upload->upload();

	    if(!$info) {// 上传错误提示错误信息
	    	$this->error($upload->getError(),U('Home/Upload/uploadInfo'),5);
	    }else{// 上传成功
	    	$path = '/Uploads/Img/'.$info['pic']['savepath'].$info['pic']['savename'];
	    	$arr = array(
	    		'id'	=> session('upload_id'),
		    	'title' => I('post.title'),
		    	'details' => I('post.description'),
		    	'class' => I('post.class'),
		    	'pic'  => $path
	    	);

	    	$resources = M('resources');
	    	$res = $resources->save($arr);

	    	redirect(U('Home/Upload/uploadSuccess'));
	    	// $this->success('上传成功！',U('Home/Upload/index'),5);
	    }
    }

	public function uploadSuccess(){
		$this->assign('title','上传视频');
		$this->display('uploadSuccess');
    }
}