<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends FootersController {
	public function index(){
		//website
		$website = M('website');
		$res = $website->select();
        	$this ->assign('datas',$res);

        	    //获取所有分类
    		   $cates=$this->getAllCates(0);
        //分配变量
            $this->assign('cates', $cates);
            

		$resources = M('resources');
		//初始化主展示区
		$mainShow = $resources->limit(9)->order('time desc')->select();
		$this->assign('mainShow',$mainShow);
		//文学
		$wenxueShow = $resources->limit(9)->order('count desc')->where('class=1')->select();
		$this->assign('wenxueShow',$wenxueShow);
		//数学
		$shuxueShow = $resources->limit(9)->order('count desc')->where('class=2')->select();
		$this->assign('shuxueShow',$shuxueShow);
        //语言
        $yuyanShow = $resources->limit(9)->order('count desc')->where('class=3')->select();
        $this->assign('yuyanShow',$yuyanShow);
        //物理
        $wuliShow = $resources->limit(9)->order('count desc')->where('class=4')->select();
        $this->assign('wuliShow',$wuliShow);
        //化学
        $huaxueShow = $resources->limit(9)->order('count desc')->where('class=5')->select();
        $this->assign('huaxueShow',$huaxueShow);
        //生物
        $shengwuShow = $resources->limit(9)->order('count desc')->where('class=6')->select();
        $this->assign('shengwuShow',$shengwuShow);
        //历史
        $lishiShow = $resources->limit(9)->order('count desc')->where('class=7')->select();
        $this->assign('lishiShow',$lishiShow);
        //地理
        $diliShow = $resources->limit(9)->order('count desc')->where('class=8')->select();
        $this->assign('diliShow',$diliShow);
        //政治
        $zhengzhiShow = $resources->limit(9)->order('count desc')->where('class=9')->select();
        $this->assign('zhengzhiShow',$zhengzhiShow);
        //计算机科学
        $jisuanjiShow = $resources->limit(9)->order('count desc')->where('class=10')->select();
        $this->assign('jisuanjiShow',$jisuanjiShow);
		//哲学
		$zhexueShow = $resources->limit(9)->order('count desc')->where('class=11')->select();
		$this->assign('zhexueShow',$zhexueShow);
        //法律
        $falvShow = $resources->limit(9)->order('count desc')->where('class=12')->select();
        $this->assign('falvShow',$falvShow);
        //社会
        $shehuiShow = $resources->limit(9)->order('count desc')->where('class=13')->select();
        $this->assign('shehuiShow',$shehuiShow);
        //商业
        $shangyeShow = $resources->limit(9)->order('count desc')->where('class=14')->select();
        $this->assign('shangyeShow',$shangyeShow);
        //传媒
        $chuanmeiShow = $resources->limit(9)->order('count desc')->where('class=15')->select();
        $this->assign('chuanmeiShow',$chuanmeiShow);
        //经济学
        $jingjiShow = $resources->limit(9)->order('count desc')->where('class=16')->select();
        $this->assign('jingjiShow',$jingjiShow);
        //医学健康
        $yixueShow = $resources->limit(9)->order('count desc')->where('class=17')->select();
        $this->assign('yixueShow',$yixueShow);
        //艺术学
        $yishuShow = $resources->limit(9)->order('count desc')->where('class=18')->select();
        $this->assign('yishuShow',$yishuShow);
        //工学类
        $gongxueShow = $resources->limit(9)->order('count desc')->where('class=19')->select();
        $this->assign('gongxueShow',$gongxueShow);
        //理学类
        $lixueShow = $resources->limit(9)->order('count desc')->where('class=20')->select();
        $this->assign('lixueShow',$lixueShow);
        //农学
        $nongxueShow = $resources->limit(9)->order('count desc')->where('class=21')->select();
        $this->assign('nongxueShow',$nongxueShow);
        //军事学
        $junshiShow = $resources->limit(9)->order('count desc')->where('class=22')->select();
        $this->assign('junshiShow',$junshiShow);
        //管理学
        $guanliShow = $resources->limit(9)->order('count desc')->where('class=23')->select();
        $this->assign('guanliShow',$guanliShow);
        //教育学
        $jiaoyuShow = $resources->limit(9)->order('count desc')->where('class=24')->select();
        $this->assign('jiaoyuShow',$jiaoyuShow);
        //宗教学
        $zongjiaoShow = $resources->limit(9)->order('count desc')->where('class=25')->select();
        $this->assign('zongjiaoShow',$zongjiaoShow);
        //心理学
        $xinlixueShow = $resources->limit(9)->order('count desc')->where('class=26')->select();
        $this->assign('xinlixueShow',$xinlixueShow);
        //学校机构
        // $xuexiaoShow = $resources->limit(9)->where('class=21')->select();
        // $this->assign('xuexiaoShow',$xuexiaoShow);
		//显示
		$this->display();
		$cObj = new FootersController();
		$cObj->index();
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

    //搜索跳转
    public function search_link(){
    	$resources= I('get.q');
    	$this->redirect('Search/index', array('resources' => $resources));
    }
    public function add(){

        $model = M('realname');
        // $user = $model->where($data)->select();
        // if($user){
        //     $this->error('用户名已存在!');

        // }
            $data['realname'] = I('post.realname');
            $data['sex'] = I('post.sex');
            $data['cardtype'] = I('post.cardtype');
            $data['number'] = I('post.number');
            $data['phone'] = I('post.phone');
            $data['remark'] = I('post.remark');
            if($model->add($data)){
                // $result = 
                // cookie('ykusername',$data['username']);
                // cookie('ykuid',$result);
                // session('[start]');
                // session('ykusername',$data['username']);
                // session('ykuid',$result);

                $this->success("实名认证成功", U("index/edu_bank"));
            }else{
                $this->error('认证失败');
            }
    }
    public function cctAdd(){
        $model = M('cct');
            $data['stutype'] = I('post.stutype');
            $data['cardtype'] = I('post.cardtype');
            $data['number'] = I('post.number');
            $data['images'] = I('post.images');
            $data['phone'] = I('post.phone');
            $data['remark'] = I('post.remark');
            if($model->add($data)){
                $this->success("认证转换成功", U("index/edu_bank"));
            }else{
                $this->error('认证转换失败');
            }
    }
    public function edu_bank(){
        if(empty(session('ykuid')))
        {
            $this->error('未登录',U('Home/Index/index'));
        }
        $id = session('ykuid');
        $model = D("user");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display();
    }
    public function detail(){
        if(empty(session('ykuid')))
        {
            $this->error('未登录',U('Home/Index/index'));
        }
        $id = session('ykuid');
        $cl = I('get.cl');
        $model = M();
        // echo '<pre>';
        // print_r($data1);
        $data = $model->query("SELECT SUM(credit) as s from record as a left join resources as b on b.id = a.rid where a.uid = '$id' and b.class = '$cl';");
        $data = empty($data[0]['s'])?'0':$data[0]['s'];
            $this->assign('model',$data);
            $this->display();

        }
    public function cct(){
        if(empty(session('ykuid')))
        {
            $this->error('未登录',U('Home/Index/index'));
        }
        $id = session('ykuid');
        $model = D("user");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display();
    }
    public function resume(){
        if(empty(session('ykuid')))
        {
            $this->error('未登录',U('Home/Index/index'));
        }
        $id = session('ykuid');
        $model = D("user");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display();


     //    if(empty(session('ykuid')))
     //    {
     //        $this->error('未登录',U('Home/Index/index'));
     //    }
     //    $id = session('ykuid');
     //    // $model = D("user");
     // $data = M()->table(array('record'=>'rc','resources'=>'re'))->where('rc.rid=re.id and rc.uid='.$id)->limit(15)->select();

     //        $this->assign('model',$data);
     //        $this->display();
    }
    public function real_name_cert(){
        if(empty(session('ykuid')))
        {
            $this->error('未登录',U('Home/Index/index'));
        }
        $id = session('ykuid');
        $model = D("user");
        $data = $model->find($id);
        $this->assign('model', $data);
        $this->display();
    }
    
    }



