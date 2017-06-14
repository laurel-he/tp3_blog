<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //生成主页的URL
        $indexUrl = U('Index/index');
        $this->assign('indexUrl',$indexUrl);
        //生成相册页面的URL
        $galleryUrl = U('Gallery/gallery');
        $this->assign('galleryUrl',$galleryUrl);
        //生成登陆注册页面的URL
        $signUrl = U('Sign/signIn');
        $this->assign('signUrl',$signUrl);
        //生成阅读页面
        $singleUrl=U('Single/single');
        $this->assign('singleUrl',$singleUrl);
        //生成查看页面
        $reviewUrl=U('Review/review');
        $this->assign('reviewUrl',$reviewUrl);
        //读取博客内容
        $Blog = M('Blog');
        $content = $Blog->limit(4)->select();
        $this->assign('content',$content);
        
        $user_session = cookie('user_name');
        if($user_session)
        {
        	$login="欢迎您：".$user_session;
        }
        else {
        	$login="请先登录!";
        }
        $usr = M('Users');
        $rank = $usr->field('user_name,vip')->order('vip desc')->limit('5')->select();
        $this->assign('login',$login);
        $this->assign('rank',$rank);
        $this->display();
    }
 
 public function set_exit()
 {
     cookie('name',null);
 }
   
}