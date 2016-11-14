<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
	public function index()
	{
		$this->display();
	}
	public function ablum()
	{
		$this->display('User/ablum');
	}
	public function upload()
	{
		$this->display('User/upload');
	}
}