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
    public function index2()
    {
    	$data = M('blog')->order('id desc')->limit('2')->select();
    	// var_dump($arr);
    	// echo $data;
    	$this->assign('title','我的首页 微博-随时随地发现新鲜事');
    	$this->assign('data',$data);
    	$this->display('index2');
    	// var_dump($data);
    	// echo '<prev/>';
    	// exit;
    }
    public  function add()
    {
        $time = time();
        var_dump($time);
    	var_dump($_POST);
        $list = M('blog');
        if($list->create())
        {
            $list->
           // $result = $list->add();
           var_dump($result);
        }

    }
}