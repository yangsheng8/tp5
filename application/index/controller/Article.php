<?php
namespace app\index\controller;
use think\Controller;
class Article extends  Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function index2(){
        return "123";
    }
}
