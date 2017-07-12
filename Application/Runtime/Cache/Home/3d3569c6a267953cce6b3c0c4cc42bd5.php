<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Single</title>
<script type='text/javascript' src="__PIBLIC__/js/jquery-1.11.1.min.js"></script>
<link href="/tp3/tp3_blog/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/tp3/tp3_blog/Public/css/style.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
</head>
<body>
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
										<?php if(cookie('user_name') == 'admin'): ?><li><a href="<?php echo U('Blog/add');?>"><?php echo (L("review_3")); ?></a></li>
									<?php else: ?>						
								 <li><a href="<?php echo ($galleryUrl); ?>"><?php echo (L("gallery")); ?></a></li><?php endif; ?>
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

<!---->
<center>
	<form action="<?php echo U('Blog/add');?>" method="post" enctype="multipart/form-data">

<p>请选择博客封面：<input type="file" name="blog_images" /></p>
<p>请选择博客分组：<select name="blog_group" id="">
	<option value="PHP">PHP</option>
	<option value="JS">JS</option>
	<option value="生活">生活</option>
	<option value="小说">小说</option>
	<option value="其他">其他</option>
</select></p>
		<div>
	<div><p style="font-size: 40px;color: rgba(13,233,245,0.6);"><?php echo (L("add_blogTitle")); ?></p></div>
	<input type="text" name="blog_name" style="width: 700px;height: 50px;font-size: 24px;" />
	<br /><br /><br />
</div>
<div><p style="font-size: 40px;color: rgba(13,233,245,0.6);"><?php echo (L("add_blogContent")); ?></p></div>
<textarea name="content" id="blog_content" style="width: 700px;height: 300px;font-size: 20px;">
	
</textarea>
<br />
<input type="submit" style="width: 400px;height: 50px;" />
	</form>
</center>
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
					 <li><a href="<?php echo U('Single/blog',array('kind'=>0));?>"><?php echo (L("php")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>1));?>"><?php echo (L("js")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>2));?>"><?php echo (L("life")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>3));?>"><?php echo (L("novel")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>4));?>"><?php echo (L("others")); ?></a></li>
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