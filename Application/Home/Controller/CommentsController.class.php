<?php
namespace Home\Controller;
use Think\Controller;
class CommentsController extends Controller{
    //定义方法插入用户评论数据
    public function add(){
        $Comments   =   D('Comments');
        if($Comments->create()) {

            $result =   $Comments->add();
            if($result) {
                $this->success('评论成功！');
            }else{
                $this->error('错误！！评论失败，已发送错误报告');
            }
        }else{
            $this->error($Comments->getError());
        }
    }
    
    //定义读取操作读取评论信息
    public function read($id=1)
    {
        $Comments = M('Comments');
        $id=I('get.id',1);
        
        //数据分页代码
        $count = $Comments->join('RIGHT JOIN think_users ON think_comments.name=think_users.user_name')->where('blog_id='.$id)->count();
        $Page = new \Think\Page($count,4);
        $Page->setConfig('header', '条数据');
        $Page->setConfig('first', '<<');
        $Page->setConfig('last', '>>');
        $show = $Page->show();
        //读取数据
        $list = $Comments->join('RIGHT JOIN think_users ON think_comments.name=think_users.user_name')->where('blog_id='.$id)->order('praise desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        if($list){
            $this->assign('data_list',$show);
            $this->assign('select',$list);
                   }
        else
        {
            $this->error("数据错误");
        }
        $this->display();
    }
    
    //编辑模版
    public function edit($id=0){
        $Comments   =   M('Comments');
        $this->assign('vo',$Comments->find($id));
        $this->display();
    }
    public function update(){
        $Comments   =   D('Comments');
        if($Comments->create()) {
            $result =   $Comments->save();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Comments->getError());
        }
    }
}