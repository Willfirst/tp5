<?php 
namespace app\index\controller;

class Viewtest extends \think\Controller
{
	public function test(){
		return view();
	}
	public function assign_view(){
		$this->assign("name","ddd");
		return view();
	}
}