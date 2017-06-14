<?php
namespace Home\Model;
use Think\Model;
class UserModel extends \Think\Model
{
    //定义自动验证
    protected $_validate = array(
        array('userName','require','请输入用户名'),
    );
    protected $_auto = array(
      array('craete_time','time',1,'function')  
    );
}

