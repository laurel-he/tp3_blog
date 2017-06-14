<?php
namespace Home\Model;
use Think\Model;
class CommentsModel extends Model{
    //定义自动验证
    protected $_validate = array(
        array('message','require','内容不能为空！'),
    
    );
    //定义自动完成
    protected $_auto = array(
        array('write_time','time',2,'function'),
    );
}