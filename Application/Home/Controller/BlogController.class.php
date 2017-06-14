<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller
{
    public function read()
    {
        //读取博客内容
        $Blog = M('Blog');
        $data = $Blog->find();
        if($data)
        {
            $this->assign('data',$data);
        }
        else
        {
            $this->error("数据错误");
        }
        $this->display('/Index:index');
    }
}