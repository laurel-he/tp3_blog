<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="/www/Public/css/login_style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="shortcut icon"  href="/www/Public/images/favicon.ico" />
<link rel="Bookmark" href="/www/Public/images/fivicon.ico" />
<link href="/www/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/www/Public/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/www/Public/css/lightbox.css">
<script type='text/javascript' src="/www/Public/js/jquery-1.11.1.min.js"></script>
    <script>
$('#user_name').blur(
        function(){
            var user_name = $(this).val;
            $.post("<?php echo U();?>")
        }
            )        
</script>
<script>
function fleshVerify(){
//重载验证码
 $('#verify_image').attr('src',"/www/index.php/Home/Sign-signUp.tpl?flag"+Math.floor(Math.random()*100));

}
</script>
<!--插入验证用户信息ajax -->
<script type="text/javascript" href="/www/Public/js/ajax_login.js"></script>

<!-- header -->
<link rel="shortcut icon"  href="/www/Public/images/favicon.ico" />
<link rel="Bookmark" href="/www/Public/images/fivicon.ico" />
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a href="mailto:1570306409@qq.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>1570306409@qq.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+86)157 0847 3034</li>
					</ul>
			  </div>
		 </div>
		 <div class="banner_head_top">
			  <div class="logo">
					 <h1><a href="<?php echo U('Index/index');?>"><span><?php echo (L("name")); ?></span></a></h1>
			 </div>	
			 <div class="top-menu">	 
			     <div class="content white">
					 <nav class="navbar navbar-default">
						 <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						 </div>
						 <!--/navbar header-->		
						 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
								 <li><a href="<?php echo U('Index/index');?>"><?php echo (L("index")); ?></a></li>
								 <li class="dropdown active">
									<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown"><?php echo (L("reviews")); ?><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo U('Review/review');?>"><?php echo (L("review_1")); ?></a></li>
										<li><a href="<?php echo U('Gallery/gallery');?>"><?php echo (L("review_2")); ?></a></li>
									</ul>
								 </li>					
								 <li><a href="<?php echo U('Gallery/gallery');?>"><?php echo (L("gallery")); ?></a></li>
								 <li><a href="<?php echo U('Sign/signIn');?>"><?php echo (L("sign")); ?></a></li>
                                                                 <li><a href="<?php echo U('Sign/logout');?>"><?php echo (L("logout")); ?></a></li>
							 </ul>
							</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
					<script type="text/javascript" src="/www/Public/js/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>
<!---->

</head>
<body>
	<div class="main">
		<div class="header" >
			<h1><?php echo (L("sign")); ?></h1>
                            <a href="<?php echo U('Sign/getUserInfo');?>"><img src="/www/Public/images/login/wX.jpg" width="100" height="100"></a>
		</div>
		<p><?php echo (L("signNote")); ?></p>
			<form action="<?php echo U('Sign/register');?>" method="post" enctype="multipart/form-data">
				<ul class="left-form">
					<h2><?php echo (L("signUp")); ?></h2>
					<li onclick="test()">
						<input type="text"   placeholder="<?php echo (L("userName")); ?>" name="user_name" onkeyup="user_volidate(this.value)"required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="<?php echo (L("email")); ?>" name="email" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="<?php echo (L("password")); ?>" name="user_pwd" required/>
						<!-- <a href="#" class="icon into"> </a> -->
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="<?php echo (L("informPassword")); ?>" name="user_pwd" required/>
						<!-- <a href="#" class="icon into"> </a> -->
						<div class="clear"> </div>
					</li> 
					<li>
					<b><p>选择您要上传的头像，若需更改请联系管理员</p></b>
					    <input type="file"  name="user_image" placeholder="<?php echo (L("userImage")); ?>" required/>
					    <div class="clear"> </div>
					</li>
					<li id="verify_check">
					<input type="text" name="verify" placeholder="请输入验证码" required/>
					<div class="clear"> </div>
					<img id="verify_image" src="<?php echo U('Sign/verify',array('flag'=>1));?>"  onclick="fleshVerify()"/>
					
					</li>
					
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i><?php echo (L("passInform")); ?></label>
					<div class="clear"> </div>
					<input type="submit" onClick="myFunction()" value="<?php echo (L("create_account")); ?>">
						<div class="clear"> </div>
				</ul>
                            </form>
                <form action="<?php echo U('Sign/signIn');?>" method="post">
				<ul class="right-form">
					<h3><?php echo (L("login")); ?></h3>
					<div>
						<li><input type="text"  name="user_name" placeholder="<?php echo (L("userName")); ?>" required/></li>
						<li> <input type="password"  name="user_pwd" placeholder="<?php echo (L("password")); ?>" required/></li>
						<h4><?php echo (L("gorgetPass")); ?></h4>
							<input type="submit" value="<?php echo (L("login_box")); ?>" >
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>
					
			</form>
			
		</div>

			<!--引入footer-->
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-6 news-ltr">
				 <h4>Connection</h4>
				 <p>If you have any userful suggestion or infomation,you can contact me by enter your email or other way to connect you, thank you!</p>
				 <form action="" method="post">					 
					  <input type="text" class="text" value="Enter suggestion" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Email';}">
					 <input type="submit" value="<?php echo (L("send")); ?>">
					 <div class="clearfix"></div>
				 </form>			 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3><?php echo (L("foot_catogory")); ?></h3>
				 <ul class="ftr-list">
					 <li><a href="#"><?php echo (L("php")); ?></a></li>
					 <li><a href="#"><?php echo (L("js")); ?></a></li>
					 <li><a href="#"><?php echo (L("life")); ?></a></li>
					 <li><a href="#"><?php echo (L("novel")); ?></a></li>
					 <li><a href="#"><?php echo (L("others")); ?></a></li>
				 </ul>							 
			 </div>	
			 <div class="col-md-3 ftr-grid">
				 <img src="/www/Public/images/weixin.jpg" style="height:80%;width:80%" alt="<?php echo (L("erweima")); ?>"/>			 
			 </div>			 	
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>备案号：蜀ICP备16016381 <a  href="http://www.hexiaojiao.top" target="_blank" title="小花的个人博客">Copyright © 2016 hexiaojiao.top All Rights Reserved. 个人博客 版权所有</a></p>
	 </div>
</div>
<!---->

</body>
</html>

	
</body>
</html>