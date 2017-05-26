<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
/**
* 
*/
class Youhao extends Controller
{
	public function index($name = 'thinkphp')
	{
		$this->assign('name', $name);
		//application/view/youhao/index.html
        return $this->fetch();
	}

	public function hello($name = 'thinkphp')
    {
        $this->assign('name', $name);
        //application/view/youhao/hello.html
        //'data'表名称
        $data = Db::name('menu')->find();
        $this->assign('result', $data);
        return $this->fetch();
    }
}