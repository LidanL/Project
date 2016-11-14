<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller 
{
    public function index()
    {
    	$this->assign('title','微博-随时随地发现新鲜事');
    	$this->display('Index/index');
    }
}