<?php
namespace Home\controller;
use Think\controller;
header('content-type:text/html;charset=utf-8');
class SettingController extends Controller{
	public function index(){
		// var_dump($_SESSION);die;
		$id = session('ykuid');
		$model=M('details');
		$data = $model->where('uid='.$id)->find();
		 //获取所有分类
                        $cates=$this->getAllCates(1);
        //分配变量
                   $this->assign('cates', $cates);
		$this->assign('model',$data);
		$this->display();

    }
	//无限级分类显示(递归获取分类)
    public function getNextCates($parent_id){
        //获取pid为$pid的分类
        $cate=D('areas');
        $cates=$cate->where("parent_id=$parent_id")->select();
        $this->ajaxReturn($cates);
    }



//无限级分类显示(递归获取分类)
    public function getAllCates($parent_id){
        //获取pid为$pid的分类
        $cate=D('areas');
        $cates=$cate->where("parent_id=$parent_id")->select();
        $arr=array();
        //遍历分类
        foreach ($cates as $k => $v) {
            $v['submenu']=$this->getAllCates($v['area_id']);
            $arr[]=$v;
        }
        return $arr;
    }

        public function edit($id){
        $model = D("details");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display('index');
    }

    //update更新数据
    public function update(){
        $model = D("details");
        if($model->create()){
            $model->save();
            $this->success("修改成功",U("Home/Setting/index"));
        }else{
            $this->error($model->getError());
        }
    }

//修改密码
    public function password(){
		$id = session('ykuid');
        $model = D("user");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display();
	}

	public function editPassword(){
	$id = session('ykuid');
        $model = D("user");
        $data = $model->find($id);
		 // var_dump($_POST);die();
		$pw=$_POST['pw'];
		// var_dump($pw);die;
		if($pw==$data[password]){
		}else{

       		return    $this->success("修改失败,密码错误",U("Home/Setting/password"));
		}

		$pass=$_POST['pass'];
		$password=$_POST['password'];
		if($pass==$password){

		}else{
       		return    $this->success("修改失败,俩次密码不一致",U("Home/Setting/password"));

		}

        if($model->create()){

            $model->save();
            $this->success("修改成功",U("Home/Setting/password"));
        }else{
            $this->error($model->getError());
        }
      }

      //修改头像
    public function protrait(){
        $id = session('ykuid');
        $model = D("user");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display();
    }



    public function insert() {
        $model = D("user");

            $upload = new \Think\Upload(); // 实例化上传类
            $upload->maxSize = 31455557; // 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
            $upload->rootPath = './Public';
            $upload->savePath = '/Admin/UserPhoto/'; // 设置附件上传目录
            $upload->saveName = ['uniqid', 'pic']; //设置保存前缀
            $upload->subName = ['date', 'Y/m/d'];
            $info = $upload->upload();
            //遍历信息 取得路径和文件名
            foreach ($info as $file) {
                $img = '/Public' . $file['savepath'] . $file['savename'];
            }
            $_POST['photo'] = $img;

        $model->create();
        $res = $model->save(); // 根据条件保存修改的数据
        if ($res !== false) {
            $this->success("修改成功",U("Home/Setting/protrait"));

        } else {
            $this->success("修改失败",U("Home/Setting/protrait"));

        }

    }
}
