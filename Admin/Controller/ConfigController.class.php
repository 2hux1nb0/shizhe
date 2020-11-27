<?php 	
	namespace Admin\Controller;
class ConfigController extends CommonController {
		public function index(){
		//实例化模型
		$website = M('website');
		//查询当前的网站状态值
		$webInfo = $website->find();
		//分配变量
		$this->assign('webInfo', $webInfo);
		//解析模板
		$this->display();
	}

	//网站配置设置方法
	public function updateConfig(){
		//实例化模型
		$web = M('website');
		//接收创建参数
		 $web->create();
		// var_dump($a);die;
		//更新数据并判断返回

		if($web->save()){
			//执行成功
			$this->success('网站配置更新成功', U('Config/index'), 3);
		}else{
			//执行失败
			$this->error('网站配置更新失败', U('Config/index'), 3);
		}
	}
	public function url(){               
        //获取每一页的条数 默认10
        $num = I('get.num');
        $num = !empty($num) ?$num : 10;
        //实例化查询模型
        $model = M("url");
        //查询数据总条数
        $conunt =$model->count();
        //实例化分页
        //实例换分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt,$num);
        $pages = $Page->show(); //分页显示输出
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        //查询满足调整见的所有资源
        $sources = $model->limit($limit)->select();
        //分配变量
        $this->assign('source',$sources);//资源
        $this->assign('pages',$pages);//页码
        $this->assign('num',$num);//每一页显示的条数
        $this->assign('keyword',$keyword);//关键字
        //解析模板

		$this->display();

	}

    public function url_add()
    {
        $this->display();
    }
 public function urls_add()
    {
    	$_POST['create_time'] = date("Y-m-d H:i:s");
    	$_POST['status'] = I('post.status') == '正常' ? '1' : '0';
      $model = M('url');
        $model->create();
        $res = $model->add();
        if ($res) {
            $this->success('添加成功', U('Config/url'), 0);
        } else {
            $this->error('添加失败', U('Config/url'), 0);
        }

    }
    public function url_edit(){

   		$id = I('get.id');
        $model = M('url');
        $where['id'] = $id;
        $data = $model->where($where)->select();
        echo json_encode($data);

    }
    public function edits_rule()
    {
        $model = M("url");
        $_POST['status'] = I('post.status') == '正常' ? '1' : '0';
        $model->create();
        $res = $model->save(); // 根据条件保存修改的数据
        if ($res !== false) {
            $this->success('数据更新成功', U('Config/url'), 0);
        } else {
            $this->error('数据更新失败', U('Config/url'), 0);
        }
    }

    public function delete()
    {
        $model = M('url');
        $id = I('get.id');
        $where['id'] = $id;
        $res = $model->where($where)->delete();
        //dump($res);
        if ($res) {
            $this->success('删除成功', U('Config/url'), 0);
        } else {
            $this->error('删除失败', U('Config/url'), 0);
        }
    }
	}
 ?>