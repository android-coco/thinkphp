<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
	public function index($value='jjj')
	{
		return 'jjj'.$value;
	}

    public function hello($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
}
