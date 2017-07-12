<?php
namespace Home\Model;
use Think\Model;
class BlogModel extends Model{
    //定义自动验证
    protected $_validate = array(
        array('blog_name','require','标题不能为空！'),
    	array('blog_content','require','内容不能为空！'),
    );
    //定义自动完成
    protected $_auto = array(
        array('write_time','time',2,'function'),
    );
}