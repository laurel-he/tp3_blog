<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
/**
 * Class SignController
 * @package Home\Controller
 */
header('content-type:text/html;charset=utf-8');
class SignController extends Controller {

      
      /**
     * 用户注册
     */
    public function register()
    {

    	/*
    	 * 检测验证码是否正确
    	 * */
    	$verify= new \Think\Verify();
    	$verify_answer= $verify->check($_POST['verify']);
    	 
        // 判断提交方式 做不同处理
        if (IS_POST) {
            // 实例化User对象
            $user = D('users');
            // 自动验证 创建数据集
            if (!$data = $user->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($user->getError());
            }
            
            //用户注册上传头像处理
            $upload = new \Think\Upload(); 
            $upload->maxSize = 102400;
            $upload->exts = array('jpg','jpeg','gif','png');
            $upload->rootPath = './Public/images';
            $upload->savePath = '/avatar/';
            $upload->saveName='time';
            $upload->thumb = $thumb;
            $upload->thumbMaxWidth = '200';
            $upload->thumbMaxHeight = '200';
            $upload->thumbRemoveOrigin = true;
            //上传文件
            $info = $upload->upload();
            if(!$info){
            	$this->error($upload->getError());
            }
            else {
            	$time = date("Y-m-d",time());
            	$saveName = "/Public/images".$upload->savePath.$time."/".$info['user_image']['savename'];
            	$data['avatar']=$saveName;
            }
            
            //插入数据库
            if($verify_answer)
            {
            if ($id = $user->add($data)) {
                $user->where("user_id = $id")->setField('companyid', $id);             
                $this->success('注册成功', U('Sign/signIn'), 2);
            } else {
                $this->error('注册失败');
            }
            }
            else {
            	$data=null;
            	$this->error("验证码错误");
            }
        } else {
            $this->display();
        }
    }
    /**
     * 用户登录
     */
    public function signIn()
    {
        // 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $signIn = D('Users');
            $name = I('post.user_name',null);
            // 组合查询条件
            $where = array();
            $where['user_name'] = $data['user_name'];
            $result = $signIn->where("user_name='$name'")->field('user_id,user_name,user_pwd,lastdate')->find();
            // 验证用户名 对比 密码
            if ($result && $result['user_pwd'] == $result['user_pwd']) {
                // 存储session
//                 S('uid', $result['user_id']);          // 当前用户id
//                 S('user_name', $result['user_name']);   // 当前用户名
//                 S('lastdate', $result['lastdate']);   // 上一次登录时间
//使用cookie
				   cookie('uid',$result['user_id']);
				   cookie('user_name', $result['user_name']);
				   cookie('lastdate', $result['lastdate']);

// 更新用户登录信息
                $where['user_id'] = cookie('uid');
                M('users')->where($where)->setInc('loginnum');   // 登录次数加 1
                M('users')->where($where)->save($data);   // 更新登录时间和登录ip
                $this->success('登录成功,正跳转至系统首页...', U('Index/index'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
            $this->display();
        }
    }
  
    /**
     * 用户注销
     */
    public function logout()
    {
        // 清空所有session
        S('name',null);
        S('uid', null); 
        S('user_name', null);
        S('lastdate',null); 
        cookie('name',null);
        cookie('uid',null);
        cookie('user_name',null);
        cookie('lastdate',null);
        redirect(U('Sign/signIn'), 2, '正在退出请稍后……');
    }
    /**
     * 验证码
     */
    public function verify()
    {
        // 实例化Verify对象
        $verify = new \Think\Verify();
        // 配置验证码参数
        $verify->fontSize = 20;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH =40;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
    }
    
    /**

     * 微信授权     */
    function getUserInfo()
{
    //获取code
    //获取网页授权的access_token'
    $appid = "wxb00a8604f49a4ca6";
    $redirect_uri = urlencode("http://www.hexiaojiao.top/index.php/Home/Sign-getUserOpenId.tpl");
    $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_userinfo&state=123STATE#wechat_redirect";
    header("location:".$url);
    
}
function getUserOpenId()
{
    $code = $_GET['code'];
    $appid = "wxb00a8604f49a4ca6";
    $appsecret = "cecf1cb743ad49a1baac5d6fb5681377";
    $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appsecret."&code=".$code."&grant_type=authorization_code";
    //获取网页授权额access_token
    //通过curl获取数据包
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_HEADER, false);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $res = curl_exec($ch);
        $out_put = json_decode($res,true);

    curl_close($ch);


    $access_token = $out_put['access_token'];
    $openid = $res['openid'];
    $info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
    $new_ch = curl_init();
    curl_setopt($new_ch, CURLOPT_URL, $info_url);
    curl_setopt($new_ch, CURLOPT_HEADER, 0);
    $new_res = curl_exec($new_ch);
    curl_close($new_ch);

//    var_dump($new_res);
}
public function forget()
{
    $this->display();
}
    
}
