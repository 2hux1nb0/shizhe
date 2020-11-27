<?php
namespace Home\Controller;
use Think\Controller;
class SpacevideoController extends FootersController {
    //按时间排序
	public function index(){
		$id = I('get.id');
        // 实例化User对象
        $user = M('user');
        // 查询满足要求的总记录数
        $count      = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id )->count();
        // var_dump($count);die;
        // 实例化分页类 传入总记录数和每页显示的记录数(8)
        $Page       = new \Think\Page($count,8);
        //设置分布按钮样式
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('them','<div class="sk_pager"><ul><li class="prev"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1" title="上一页" charset="801-2-1">%UP_PAGE%</a></li><li class="current"><span>%LINK_PAGE%</span></li><li class="next"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1_page_3" title="下一页" charset="801-2-3">%DOWN_PAGE%</a></li>
        </ul></div>');
        // 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $show = $Page->show();
        $list = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id )->order('resources.time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $fans = M('user');
        $cou = $fans->join('subscribe ON subscribe.uid = user.id')->where('pid = '.$id)->count();
        $ur = M('user');
        $urs = $ur->where('id = '.$id)->select();
        $model5=M('website');
        $website=$model5->find(1);//网站配置
         // var_dump($urs);die;
        $this->assign('website',$website);
        $this->assign('cou',$cou);
        $this->assign('urs',$urs);
        $this->assign('count',$count);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('show',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //按播放量排序
    public function video_play(){
    	$id = I('get.id');
        // 实例化user对象
    	$user = M('user');
        // 查询满足要求的总记录数
    	$count      = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id )->count();
        // var_dump($count);die;
        // 实例化分页类 传入总记录数和每页显示的记录数(8)
    	$Page       = new \Think\Page($count,8);
        //设置分布按钮样式
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('them','<div class="sk_pager"><ul><li class="prev"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1" title="上一页" charset="801-2-1">%UP_PAGE%</a></li><li class="current"><span>%LINK_PAGE%</span></li><li class="next"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1_page_3" title="下一页" charset="801-2-3">%DOWN_PAGE%</a></li></ul></div>');
        // 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    	$show = $Page->show();
    	$play = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id )->order('resources.count desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $ur = M('user');
        $urs = $ur->where('id = '.$id)->select();
    	// var_dump($play);die;
        $model5=M('website');
        $website=$model5->find(1);//网站配置
        $this->assign('website',$website);
        $this->assign('urs',$urs);
    	$this->assign('count',$count);
        $this->assign('plays',$play);
    	$this->assign('play',$play);// 赋值数据集
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display(); // 输出模板
    }

        //按评论排序
        public function video_com(){
        $id = I('get.id');
        // 实例化User对象
        $user = M('user');
        // 查询满足要求的总记录数
        $count = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id)->count();
        // var_dump($count);die;
        // 实例化分页类 传入总记录数和每页显示的记录数(8)
        $Page = new \Think\Page($count,8);
        //设置分布按钮样式
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('them','<div class="sk_pager"><ul><li class="prev"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1" title="上一页" charset="801-2-1">%UP_PAGE%</a></li><li class="current"><span>%LINK_PAGE%</span></li><li class="next"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1_page_3" title="下一页" charset="801-2-3">%DOWN_PAGE%</a></li></ul></div>');
        // 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $pages = $Page->show();
        $com = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id)->order('resources.rnum desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $ur = M('user');
        $urs = $ur->where('id = '.$id)->select();
        // var_dump($com);die;
        $model5=M('website');
        $website=$model5->find(1);//网站配置
        $this->assign('website',$website);
        $this->assign('urs',$urs);
        $this->assign('count',$count);
        $this->assign('com',$com);// 赋值数据集
        $this->assign('pages',$pages);// 赋值分页输出
        $this->display(); // 输出模板
    }
    public function  video_collect(){
        $id = I('get.id');
        // 实例化User对象
        $user = M('user');
        // 查询满足要求的总记录数
        $count = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id)->count();
        // var_dump($count);die;
        // 实例化分页类 传入总记录数和每页显示的记录数(8)
        $Page = new \Think\Page($count,8);
        //设置分布按钮样式
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('them','<div class="sk_pager"><ul><li class="prev"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1" title="上一页" charset="801-2-1">%UP_PAGE%</a></li><li class="current"><span>%LINK_PAGE%</span></li><li class="next"><a href="/search_video/q_%E8%A7%86%E9%A2%91_orderby_1_page_3" title="下一页" charset="801-2-3">%DOWN_PAGE%</a></li></ul></div>');
        // 分页显示输出
        $pages = $Page->show();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $coll = $user->join('resources ON resources.uid = user.id ')->where( "uid = %d and state = 1",$id)->order('resources.time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        // var_dump($coll);die;
        $ur = M('user');
        $urs = $ur->where('id = '.$id)->select();
        $model5=M('website');
        $website=$model5->find(1);//网站配置
        $this->assign('website',$website);
        $this->assign('urs',$urs);
        $this->assign('count',$count);
        $this->assign('coll',$coll);// 赋值数据集
        $this->assign('pages',$pages);// 赋值分页输出
        $this->display(); // 输出模板
    }

}