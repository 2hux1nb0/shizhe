<?php
namespace Admin\Controller;
class LbsmdController extends CommonController
{
    public function index()
    {
        //获取显示类别
        $type = I('get.type');
        $type = !empty($type) ? $type : '';
        //判断
        $where = '';
        if ($type) {
            $where['type'] = $type;
        }
        //获取每一页的条数 默认10
        $num = I('get.num');
        $num = !empty($num) ? $num : 10;
        //声明一个条件字符串
        //实例化查询模型
        $model = M("billboard");
        //查询数据总条数
        $conunt = $model->join('type On type.id =billboard.type ')->where($where)->count();
        //实例化分页
        dump($conunt);
        //实例换分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt, $num);
        $pages = $Page->show(); //分页显示输出
        //获取limit参数
        $limit = $Page->firstRow . ',' . $Page->listRows;
        //查询满足调整见的所有资源
        $sources = $model->field(['billboard.id as id', 'type.name as name', 'resources.title title', 'billboard.state'])->join('type  On type.id =billboard.type ')->join('resources On resources.id = billboard.rid')->where($where)->select();
//     dump($sources);
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
        dump(I('id'));
        $this->type();
        $this->display();
    }

    public function insert()
    {
        $model = D("billboard");
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
        $_POST['addres'] = $img;
        //把POST来的数据保存到对象中
        $model->create();
        $res = $model->add();
        if ($res) {
            $this->success("添加成功", U("Lbsmd/index"));
        } else {
            $this->error($model->getError()); //失败跳转页面(返回上一个页面)
        }
    }

    public function edits()
    {
        dump(I('post.idds'));
        $model = D("billboard");
        $model->create();
        $row = $model->save();
        if ($row) {
            $this->success("修改成功", U("Lbsmd/index"));
        } else {
            $this->error($model->getError()); //失败跳转页面(返回上一个页面)
        }
    }

    public function edit()
    {
        $model = D("billboard");
        //获取ID
        $id = I('get.id');

        $where['id'] = $id;
        $data = $model->where($where)->select();
        echo json_encode($data);
    }

    public function delete()
    {
        $id = I('get.id');
        $where['id'] = $id;
        $model = D("billboard");
        $res = $model->where($where)->delete();
        if ($res) {
            $this->success("删除成功", U("Lbsmd/index"));
        } else {
            $this->error($model->getError()); //失败跳转页面(返回上一个页面)
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