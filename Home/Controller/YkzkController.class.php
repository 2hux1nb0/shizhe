<?php
namespace Home\Controller;
use Think\Controller;
class YkzkController extends FootersController {
	public function index(){



		$this->display();
	}

    /**
     *
     */
    public function indexq(){



        $this->display();
    }
    public function testMail(){
        sendMail('1321376990@qq.com','Hi PJ?','嘎哈呢?');
    }


}
























