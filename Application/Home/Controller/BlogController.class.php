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
    public function add()
    {
        $Blog = D('Blog');
        if($Blog->create()){
            
            //博客图片验证
            $upload = new \Think\Upload(); 
            $upload->maxSize = 10240000;
            $upload->exts = array('jpg','jpeg','gif','png');
            $upload->rootPath = './Public/images';
            $upload->savePath = '/blog/';
            $upload->saveName='time';
            $upload->thumb = $thumb;
            $upload->thumbMaxWidth = '500';
            $upload->thumbMaxHeight = '500';
            $upload->thumbRemoveOrigin = true;
            //上传文件
            $info = $upload->upload();
            if(!$info){
                $this->error($upload->getError());
            }
            else {
                $time = date("Y-m-d",time());
                $saveName = "/Public/images".$upload->savePath.$time."/".$info['blog_images']['savename'];
                $data['blog_images']=$saveName;
            }
            $data['blog_name'] = I('post.blog_name');
            $data['blog_content'] = I('post.content');
            $data['blog_group'] = I('post.blog_group');
            $data['blog_author'] = cookie('user_name');
            if($result = $Blog->add($data))
            {
                $this->success('发表博客成功', U('Index/index'), 2);
            }
        }
        $this->display();
    }
}