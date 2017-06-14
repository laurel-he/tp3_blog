<?php
namespace Home\Controller;
use Think\Controller;
header('Content-Type:text/html;charset=utf-8');
class SingleController extends Controller
{
    public function single()
    {
//模式化
    	$id = I('get.id',0);
        $Blog = M('Blog');
        $Comments = M('comments');
//赋值
$build = $Blog->where("blog_id=".$id)->find();
$message = $Comments->where("blog_id=".$id)->join('RIGHT JOIN think_users ON think_comments.name=think_users.user_name')->order('praise desc')->select();
$number = $Comments->where('blog_id='.$id)->count();
	//缓存
// 	$user_name = S('user_name');
	$user_name = cookie('user_name');
	if ($user_name)
	{
	$this->assign('user_name',$user_name);
	$this->assign('number',$number);
	$this->assign('build',$build);
	$this->assign('message',$message);
	$this->assign('id',$id);
	$this->display();
}
else 
{

	$this->redirect('Sign/signUp',array('id'=>0),3,'请先登录！三秒后跳转到登录注册页面');
	
}
    }
}