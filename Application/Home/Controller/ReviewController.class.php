<?php
namespace Home\Controller;
use Think\Controller;
class ReviewController extends Controller
{
    public function review()
    {
    	$Blog = M('Blog');
    	$content = $Blog->order('praise desc')->limit(8)->select();
    	$this->assign('content',$content);
        $this->display();
    }
}