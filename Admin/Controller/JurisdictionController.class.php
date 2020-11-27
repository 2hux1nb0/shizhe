<?php
namespace Admin\Controller;

use Common;

class JurisdictionController extends CommonController
{
    public function index()
    {
        //获取每一页的条数 默认10
        $num = I('get.num');
        $num = !empty($num) ? $num : 10;
        //实例化查询模型
        $model = M("auth_group");
        //查询数据总条数
        $conunt = $model->count();
        //实例化分页
        //实例换分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt, $num);
        $pages = $Page->show(); //分页显示输出
        //获取limit参数
        $limit = $Page->firstRow . ',' . $Page->listRows;
        //查询满足调整见的所有资源
        $sources = $model->limit($limit)->select();
        //分配变量
        $this->assign('source', $sources);//资源
        $this->assign('pages', $pages);//页码
        $this->assign('num', $num);//每一页显示的条数
        //解析模板
        $this->display();
    }

    public function delete()
    {
        if (I('get.id') == 1) {
            $this->error('禁止删除');
            die();
        }

        $model = M('auth_group');
        $id = I('get.id');

        $res = $model->delete($id);
        //dump($res);
        if ($res) {
            $this->success('删除成功', U('Jurisdiction/index'), 0);
        } else {
            $this->error('删除失败', U('Jurisdiction/index'), 0);
        }
    }

    public function edit()
    {
        $id = I('get.id');
        $model = M('auth_group');
        $where['id'] = $id;
        $data = $model->where($where)->select();
        echo json_encode($data);
    }

    public function edits()
    {
        $model = M("auth_group");
        $_POST['status'] = I('post.status') == '正常' ? '1' : '0';
        $model->create();
        $res = $model->save(); // 根据条件保存修改的数据
        if ($res !== false) {
            $this->success('数据更新成功', U('Jurisdiction/index'), 0);
        } else {
            $this->error('数据更新失败', U('Jurisdiction/index'), 0);
        }

    }

    public function group()
    {
        //获取每一页的条数 默认10
        $num = I('get.num');
        $num = !empty($num) ? $num : 10;
        //实例化查询模型
        $model = M("auth_group_access");
        //查询数据总条数
        $conunt = $model->count();
        //实例化分页
        //实例换分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt, $num);
        $pages = $Page->show(); //分页显示输出
        //获取limit参数
        $limit = $Page->firstRow . ',' . $Page->listRows;
        //查询满足调整见的所有资源
        $sources = $model->limit($limit)->select();
        //分配变量
        $this->assign('source', $sources);//资源
        $this->assign('pages', $pages);//页码
        $this->assign('num', $num);//每一页显示的条数
        //解析模板
        $this->display();
    }

    public function editd()
    {
        $id = I('get.uid');
        $model = M('auth_group_access');
        $where['uid'] = $id;
        $data = $model->where($where)->select();
        echo json_encode($data);
    }

    public function deletes()
    {
        $model = M('auth_group_access');
        $id = I('get.id');
        $where['uid'] = $id;
        $res = $model->where($where)->delete();
        //dump($res);
        if ($res) {
            $this->success('删除成功', U('Jurisdiction/group'), 0);
        } else {
            $this->error('删除失败', U('Jurisdiction/group'), 0);
        }
    }

    public function rule()
    {
        //获取每一页的条数 默认10
        $num = I('get.num');
        $num = !empty($num) ? $num : 10;
        //实例化查询模型
        $model = M("auth_rule");
        //查询数据总条数
        $conunt = $model->count();
        //实例化分页
        //实例换分页类 传入总条数和每页显示的条数
        $Page = new \Think\Page($conunt, $num);
        $pages = $Page->show(); //分页显示输出
        //获取limit参数
        $limit = $Page->firstRow . ',' . $Page->listRows;
        //查询满足调整见的所有资源
        $sources = $model->limit($limit)->select();
        //分配变量
        $this->assign('source', $sources);//资源
        $this->assign('pages', $pages);//页码
        $this->assign('num', $num);//每一页显示的条数
        //解析模板
        $this->display();
    }

    public function edit_rule()
    {
        $id = I('get.id');
        $model = M('auth_rule');
        $where['id'] = $id;
        $data = $model->where($where)->select();
        echo json_encode($data);
    }

    public function edits_rule()
    {
        $model = M("auth_rule");
        I('post.status') == '正常' ? '1' : '0';
        $model->create();
        $res = $model->save(); // 根据条件保存修改的数据
        if ($res !== false) {
            $this->success('数据更新成功', U('Jurisdiction/rule'), 0);
        } else {
            $this->error('数据更新失败', U('Jurisdiction/rule'), 0);
        }
    }

    public function deletes_rule()
    {
        $model = M('auth_rule');
        $id = I('get.id');

        $res = $model->delete($id);
        //dump($res);
        if ($res) {
            $this->success('删除成功', U('Jurisdiction/rule'), 0);
        } else {
            $this->error('删除失败', U('Jurisdiction/rule'), 0);
        }
    }

    public function group_add()
    {
        $this->display();
    }

    public function groups_add()
    {
        $_POST['status'] = I('post.status') == '正常' ? '1' : '0';
        $model = M('auth_group');
        $model->create();
        $res = $model->add();
        if ($res) {
            $this->success('添加成功', U('Jurisdiction/index'), 0);
        } else {
            $this->error('添加失败', U('Jurisdiction/index'), 0);
        }
    }

    public function groups_adds()
    {
        $model = M('auth_group_access');
        $model->create();
        $res = $model->add();
        if ($res) {
            $this->success('添加成功', U('Jurisdiction/group'), 0);
        } else {
            $this->error('添加失败', U('Jurisdiction/group'), 0);
        }
    }

    public function rule_add()
    {
        $this->display();
    }

    public function rules_add()
    {
        $_POST['status'] = I('post.status') == '正常' ? '1' : '0';
        $_POST['type'] = I('post.type') == '启用' ? '1' : '0';
        $model = M('auth_rule');
        $model->create();
        $res = $model->add();
        if ($res) {
            $this->success('添加成功', U('Jurisdiction/rule'), 0);
        } else {
            $this->error('添加失败', U('Jurisdiction/rule'), 0);
        }
    }
}