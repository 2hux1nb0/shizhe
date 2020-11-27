<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {

    public function index(){
    	$this->display();
    }

    public function welcome(){
    	$this->show('welcome to ShiZhe!!!!!!!!!!!!!!!');
    }
}