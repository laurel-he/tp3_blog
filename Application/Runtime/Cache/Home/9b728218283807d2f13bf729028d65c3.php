<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>相册</title>
<link rel="shortcut icon"  href="/www/Public/images/favicon.ico" />
<link rel="Bookmark" href="/www/Public/images/fivicon.ico" />
<link href="/www/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/www/Public/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/www/Public/css/lightbox.css">

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="/www/Public/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  
</head>
<body>
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

<!---->
<div class="gallery">
	 <div class="container">
		 <h2><?php echo (L("gallery")); ?></h2>
		 <div class="gallery-bottom">
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g2.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g2.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g1.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g1.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g3.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g3.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g4.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g4.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g5.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g5.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g6.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g6.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g9.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g9.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g7.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g7.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g4.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g7.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g7.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g5.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g5.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="/www/Public/images/g8.jpg" data-lightbox="example-set"><img class="example-image" src="/www/Public/images/g8.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>				
		 </div>
	 </div>
</div>	
<script src="/www/Public/js/lightbox-plus-jquery.min.js"></script>

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