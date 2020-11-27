<?php
namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class TypeController extends CommonController {
      public function index(){
    //获取所有分类
        $cates=$this->getAllCates(0);
        //分配变量
            $this->assign('cates', $cates);
            $this->display();
    }

//无限级分类显示(递归获取分类)
    public function getAllCates($pid){
        //获取pid为$pid的分类
        $cate=D('type');
        $cates=$cate->where("pid=$pid")->select();
        $arr=array();
        //遍历分类
        foreach ($cates as $k => $v) {
            $v['submenu']=$this->getAllCates($v['id']);
            $arr[]=$v;
        }
        return $arr;
    }


       /* 新增分类 */
  public function add(){
        $this->display();
        // var_dump($_GTE);
    }

    public function insert(){
        $model = D("type");
        if(isset($_POST['pid']) && isset($_POST['path'])){
                // $name = $_GET['name'];
                $pid = $_POST['pid'];
                $path = $_POST['path'].$_POST['pid'].',';
            }

         $data=array(
            'name'=>I('post.name'),
            'pid'=>$pid,
            'path'=>$path
            );

            // var_dump($data);die;
        if(!empty($data['name'])){
            $result = $model->add($data);
            $this->success("添加成功",U("Admin/Type/index"));
        }else{
            $this->success("添加失败!字段不能为空",U("Admin/Type/index"));
        }
    }

        public function edit($id){
        $model = D("type");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display();
    }

    //update更新数据
    public function update(){
        $model = D("type");
        if($model->create()){
            $model->save();
            $this->success("修改成功",U("Admin/Type/index"));
        }else{
            $this->error($model->getError());
        }
    }

     //删除数据
    public function delete($id){
        $model = D("type");
        $where = ['id'=>(int)$id];

        if($model->where($where)->delete()>0){
           $this->success("删除成功",U("Admin/Type/index"));
        }else{
            $this->error("删除失败",U("Admin/Type/index"));
        }
    }

}
