<?php
namespace Home\Controller;
use Think\Controller;
class PlayController extends FootersController {
	public function index(){
		$videoId = I('get.videoId');
        if(empty($videoId))
        {
            $this->error('未指定视频ID',U("Home/Index/index"));
        }
		$this->assign('videoId',$videoId);
        //播放数+1
        $statistic = M("resources");
        $statistic->where('id='.$videoId)->setInc('count',1);
        //增加播放记录
        if(session('ykuid')){
            $uid = session('ykuid');
            // $sTime = I('post.sTime');
            $record = M('record');
            $count = $record->where('uid='.$uid.' and rid='.$videoId)->count();
            //如果有数据不添加
            if($count==0)
            {
                $time = date("Y-m-d H:i:s");
                
                $arr = array(
                    'uid'=>$uid,
                    'rid'=>$videoId,
                    'time'=>$time,
                    // 'credit'=>$sTime,
                );
                $record->add($arr);
            }
            // $record->where('uid='.$uid.' and rid='.$videoId)->setField('credit',$sTime);
        }


		//查询资源信息和资源所属人信息
		$resources = M();
        // $records = M('record');
		$data = $resources->table('resources a,user b')->where('a.id='.$videoId.' and a.uid=b.id')->find();
        // $data1 = $records->table('record a,user b')->where('a.id='.$videoId.' and a.uid=b.id')->find();
		$this->assign('resources',$data);
        // $this->assign('record',$data1);

		//登录用户信息
		// $user = M('user');
		// $data = $user->where('id='.session('ykuid'))->find();
		// // echo '<pre>';
		// // var_dump($data);
		// // echo '<pre>';
		// // exit();
		// $this->assign('userinfo',$data);

        //评论
        $reply = M('reply');
        $count = $reply->join('user on uid=user.id')->where('rid='.$videoId)->count();
        // echo $count;die;
        //判断是否有评论
        if($count<1)
        {
            $this->assign('nocount',1);
            $this->display();
            return;
        }
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,5);
        //设置分布按钮样式
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','<div  class="qPager"><div class="stat">共 %TOTAL_ROW% 条记录</div><ul class="turn"><li class="pre" title="上一页">%UP_PAGE%</li><li class="next" title="下一页">%DOWN_PAGE%</li></ul><ul class="pages"><li class="current">%LINK_PAGE%</li></ul></div>');
        $show = $Page->show();
        //查评论
        $data = $reply->join('user on uid=user.id')->order('date desc')->where('rid='.$videoId)->limit($Page->firstRow.','.$Page->listRows)->select();

        // 分页显示输出
        $this->assign('page',$show);
        $this->assign('reply',$data);

		//显示页面
		$this->display();




    }

    //评论增加
    public function comment(){
        $videoId = I('get.videoId');
        $content = I('get.content');
        $uid = session('ykuid');

        $comment = M('reply');
        $arr = array(
            'rid'=>$videoId,
            'con'=>$content,
            'uid'=>$uid,
            'stu'=>1,
            'date'=>time()
        );
        $comment->add($arr);
    }

    //增加学分数据 
    public function upCredit(){
        $videoId = I('post.videoId');
        if(empty($videoId))
        {
            $this->error('未指定视频ID',U("Home/Index/index"));
        }
        $this->assign('videoId',$videoId);

        if(session('ykuid')){
            $uid = session('ykuid');
            $sTime = I('post.sTime');
            $time = date("Y-m-d H:i:s");
            $record = M('record');
            $count = $record->where('uid='.$uid.' and rid='.$videoId)->count();
            //如果有数据不添加
            if($count==0)
            {
                $arr = array(
                    'uid'=>$uid,
                    'rid'=>$videoId,
                    'time'=>$time,
                    'credit'=>$sTime,
                );
                $record->add($arr);
            }
            if($count!==0)
            {
                $arr = array(
                    'time'=>$time,
                    'credit'=>$sTime,
                );
                $record->where('uid='.$uid.' and rid='.$videoId)->setField($arr);
            }
        }
    }

    //查询订阅,收藏,支持表,
    public function updateVideoInfo(){
        $videoId = I('get.videoId');
        $pid = I('get.pid');
        $uid = session('ykuid');

        $collection = M('collection');
        $subscribe = M('subscribe');
        $support = M('support');
        $against = M('against');

        $collection = $collection->where('uid='.$uid.' and rid='.$videoId)->count();
        // echo $collection->getLastSql();
        $subscribe = $subscribe->where('uid='.$uid.' and pid='.$pid)->count();
        $support = $support->where('uid='.$uid.' and rid='.$videoId)->count();
        $against = $against->where('uid='.$uid.' and rid='.$videoId)->count();

        $arr = array(
            'collection'=>$collection,
            'subscribe'=>$subscribe,
            'support'=>$support,
            'against'=>$against,
        );
        echo json_encode($arr);
    }

    //增加订阅
    public function addSubscribe(){
        $pid = I('get.pid');
        $uid = session('ykuid');
        $subscribe = M('subscribe');
        $arr = array(
            'uid'=>$uid,
            'pid'=>$pid,
        );
        $subscribe->add($arr);
    }

    //删除订阅
    public function deleteSubscribe(){
        $pid = I('get.pid');
        $uid = session('ykuid');

        $subscribe = M('subscribe');
        $subscribe->where('uid='.$uid.' and pid='.$pid)->delete();
        // echo $subscribe->getLastSql();
    }

    //增加收藏
    public function addCollection(){
        $rid = I('get.videoId');
        $uid = session('ykuid');

        $collection = M('collection');
        $arr = array(
            'uid'=>$uid,
            'rid'=>$rid,
        );
        $collection->add($arr);
    }

    //删除收藏
    public function deleteCollection(){
        $rid = I('get.videoId');
        $uid = session('ykuid');

        $collection = M('collection');
        $collection->where('uid='.$uid.' and rid='.$rid)->delete();
    }

    //增加支持
    public function addSupport(){
        $rid = I('get.videoId');
        $uid = session('ykuid');
        $support = M('support');
        $count = $support->where('uid='.$uid.' and rid='.$rid)->count();
        //如果有数据不添加
        if($count>0)
        {
            $re = array(
                'ok'=>-1,
                'count'=>$count
            );
            echo json_encode($re);
            return;
        }
        $arr = array(
            'uid'=>$uid,
            'rid'=>$rid,
        );
        $support->add($arr);
        $re = array(
            'ok'=>1,
            'count'=>$count+1
        );
        echo json_encode($re);
    }

    //删除支持
    public function deleteSupport(){
        $rid = I('get.videoId');
        $uid = session('ykuid');
        $support = M('support');
        $count = $support->where('uid='.$uid.' and rid='.$rid)->count();
        //如果没有数据不删除
        if($count==0)
        {
            $re = array(
                'ok'=>-1,
                'count'=>$count
            );
            echo json_encode($re);
            return;
        }
        $support->where('uid='.$uid.' and rid='.$rid)->delete();
        $re = array(
            'ok'=>1,
            'count'=>$count-1
        );
        echo json_encode($re);
    }

    //增加反对
    public function addAgainst(){
        $rid = I('get.videoId');
        $uid = session('ykuid');
        $against = M('against');
        $count = $against->where('uid='.$uid.' and rid='.$rid)->count();
        //如果有数据不添加
        if($count>0)
        {
            $re = array(
                'ok'=>-1,
                'count'=>$count
            );
            echo json_encode($re);
            return;
        }
        $arr = array(
            'uid'=>$uid,
            'rid'=>$rid,
        );
        $against->add($arr);
        $re = array(
            'ok'=>1,
            'count'=>$count+1
        );
        echo json_encode($re);
    }

    //删除反对
    public function deleteAgainst(){
        $rid = I('get.videoId');
        $uid = session('ykuid');
        $against = M('against');
        $count = $against->where('uid='.$uid.' and rid='.$rid)->count();
        //如果没有数据不删除
        if($count==0)
        {
            $re = array(
                'ok'=>-1,
                'count'=>$count
            );
            echo json_encode($re);
            return;
        }
        $against->where('uid='.$uid.' and rid='.$rid)->delete();
        $re = array(
            'ok'=>1,
            'count'=>$count-1
        );
        echo json_encode($re);
    }

    //更新支持和反对数
    public function statisticSupport(){
        $rid = I('get.videoId');
        $against = M('against');
        $support = M('support');

        $support = $support->where('rid='.$rid)->count();
        $against = $against->where('rid='.$rid)->count();
        $arr = array(
            'support'=>$support,
            'against'=>$against,
        );
        echo json_encode($arr);
    }

}