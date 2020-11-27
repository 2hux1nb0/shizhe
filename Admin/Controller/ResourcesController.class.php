<?php

namespace Admin\Controller;
use Common;

class ResourcesController extends CommonController
{

    Public function index()
    {
        //获取显示类别
        $type = I('get.type');
        $type = !empty($type) ? $type : '';
        //判断
        $where = '';
        if ($type) {
            $where['class'] = $type;
        }
        //获取每一页的条数 默认10
        $num = I('get.num');
        $num = !empty($num) ? $num : 10;
        //声明一个条件字符串

        //获取搜索的关键字
        $keyword = I('get.keyword');
        //判断
        if ($keyword) {
            $where['title'] = ['like', '%' . $keyword . '%'];
        }


        //实例化查询模型
        $model = M("resources");
        //查询数据总条数
        $conunt = $model->where($where)->count();
        //实例化分页
        //实例换分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt, $num);
        $pages = $Page->show(); //分页显示输出
        //获取limit参数
        $limit = $Page->firstRow . ',' . $Page->listRows;
        //查询满足调整见的所有资源
        $sources = $model->where($where)->limit($limit)->select();
        //分配变量
        $this->assign('source', $sources);//资源
        $this->assign('pages', $pages);//页码
        $this->assign('num', $num);//每一页显示的条数
        $this->assign('keyword', $keyword);//关键字
        //解析模板
        $this->type();
        $this->display();

    }


    public function add()
    {
        $this->type();
        $this->display();
    }

    public function insert()
    {
        $model = D("resources");
        $upload = new \Think\Upload(); // 实例化上传类
        $upload->maxSize = 31455557777; // 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
        $upload->rootPath = './Uploads';
        $upload->savePath = '/Img/'; // 设置附件上传目录
        $upload->saveName = ['uniqid', 'pic']; //设置保存前缀
        $upload->subName = ['date', 'Y/m/d'];
        //上传文件 并 返回信息
        $info = $upload->upload();
        //遍历信息 取得路径和文件名

        foreach ($info as $file) {
            $img = '/Youku/Uploads' . $file['savepath'] . $file['savename'];
        }

        //把文件名存到POST中 方便create使用
        $_POST['pic'] = $img;
        $_POST['time'] = time();
        //把POST来的数据保存到对象中
        $_POST['uid'] =  session('ykuid');
        if ($model->create()) {
            $reid = $model->add(); //执行数据库添加操作  会把对象中的变量添加到数据库
            //把添加的ID存入session
            session('reid', $reid);
            $this->display();
        } else {
            $this->error($model->getError()); //失败跳转页面(返回上一个页面)
        }
    }

    public function reinsert()
    {
        $model = D("resources");

        $upload = new \Think\Upload(); // 实例化上传类
        $upload->maxSize = 31455557287777; // 设置附件上传大小
        $upload->exts = array('mp4', 'flv'); // 设置附件上传类型
        $upload->rootPath = './Uploads';
        $upload->savePath = '/Video/'; // 设置附件上传目录
        $upload->saveName = ['uniqid', 'sp']; //设置保存前缀
        $upload->subName = ['date', 'Y/m/d'];
        //上传文件 并 返回信息
        $info = $upload->upload();
        //遍历信息 取得路径和文件名
        foreach ($info as $file) {
            $img = '/Youku/Uploads' . $file['savepath'] . $file['savename'];
        }
        $_POST['content'] = $img;
        //把POST来的数据保存到对象中
        if ($model->create()) {
            //取出session
            $id = session('reid');
            $data['id'] = $id;
            $where['id'] = $id;
            $data['content'] = $_POST['content'];
            $model->save($data); //执行数据库添加操作  会把对象中的变量添加到数据库
            //把添加的ID存入session
            $this->success("添加成功", U("Resources/add"));
        } else {
            $model->where($where)->delete();
            $this->error($model->getError()); //失败跳转页面(返回上一个页面)
        }
    }

    public function delete()
    {
        $model = M('resources');
        $id = I('get.id');

        $res = $model->delete($id);
        //dump($res);
        if ($res) {
            $this->success('删除成功', U('Resources/index'), 0);
        } else {
            $this->error('删除失败', U('Resources/index'), 0);

        }
    }

    public function edit()
    {
        $id = I('get.id');
        $model = M('resources');
        $where['id'] = $id;
        $data = $model->where($where)->select();
        echo json_encode($data);
    }

    public function edits()
    {
        $model = D("resources");
        if (!empty($_FILES['pic']['name'])) {

            $upload = new \Think\Upload(); // 实例化上传类
            $upload->maxSize = 31455557; // 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
            $upload->rootPath = './Uploads';
            $upload->savePath = '/Img/'; // 设置附件上传目录
            $upload->saveName = ['uniqid', 'pic']; //设置保存前缀
            $upload->subName = ['date', 'Y/m/d'];
            $info = $upload->upload();
            //遍历信息 取得路径和文件名
            foreach ($info as $file) {
                $img = '/Youku/Uploads' . $file['savepath'] . $file['savename'];
            }
            $_POST['pic'] = $img;
        }
        $model->create();
        $res = $model->save(); // 根据条件保存修改的数据
        if ($res !== false) {
            $this->success('数据更新成功', U('Resources/index'), 0);
        } else {
            $this->error('数据更新失败', U('Resources/index'), 0);
        }
    }

    public function type()
    {
        //获取所有分类
        $cates = $this->getAllCate(0);
        //分配变量
        $this->assign('cates', $cates);

    }

//无限级分类显示(递归获取分类)
    public function getAllCate($pid)
    {
        //获取pid为$pid的分类
        $cate = D('type');
        $cates = $cate->where("pid=$pid")->select();
        $arr = array();
        //遍历分类
        foreach ($cates as $k => $v) {
            $v['submenu'] = $this->getAllCate($v['id']);
            $arr[] = $v;
        }
        return $arr;
    }
}

?>  