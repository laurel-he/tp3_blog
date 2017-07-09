<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon"  href="/tp3/tp3_blog/Public/images/favicon.ico" />
<link rel="Bookmark" href="/tp3/tp3_blog/Public/images/fivicon.ico" />
<link href="/tp3/tp3_blog/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/tp3/tp3_blog/Public/css/style.css" rel='stylesheet' type='text/css' />
<script>
	$(function(){ 
    $("#sub_btn").click(function(){ 
        var email = $("#email").val(); 
        var preg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/; //匹配Email 
        if(email=='' || !preg.test(email)){ 
            $("#chkmsg").html("请填写正确的邮箱！"); 
        }else{ 
            $("#sub_btn").attr("disabled","disabled").val('提交中..').css("cursor","default"); 
            $.post("sendmail.php",{mail:email},function(msg){ 
                if(msg=="noreg"){ 
                    $("#chkmsg").html("该邮箱尚未注册！"); 
                    $("#sub_btn").removeAttr("disabled").val('提 交').css("cursor","pointer"); 
                }else{ 
                    $(".demo").html("<h3>"+msg+"</h3>"); 
                } 
            }); 
        } 
    }); 
})
</script>
<script>
function fleshVerify(){
//重载验证码
 $('#verify_image').attr('src',"/tp3/tp3_blog/index.php/Home/Sign-verify-flag-"+Math.floor(Math.random()*100))+".tpl";

}
</script>
<!--插入验证用户信息ajax -->

<!-- header -->
<link rel="shortcut icon"  href="/tp3/tp3_blog/Public/images/favicon.ico" />
<link rel="Bookmark" href="/tp3/tp3_blog/Public/images/fivicon.ico" />
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
					<script type="text/javascript" src="/tp3/tp3_blog/Public/js/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>
<!---->

</head>
<body>
<br /><br /><br />
	<center><form action="">
		<b><p>请输入注册时使用的邮箱账号：</p></b>
		<input type="text" name="email" id="email" /><br /><br />
		<img id="verify_image" src="<?php echo U('Sign/verify',array('flag'=>1));?>"  onclick="fleshVerify()"/>
		<input type="submit" name="sub" value="找回密码"/>
	</form>
</center>
<br /><br /><br />

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
				 <img src="/tp3/tp3_blog/Public/images/weixin.jpg" style="height:80%;width:80%" alt="<?php echo (L("erweima")); ?>"/>			 
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