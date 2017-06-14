<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo (L("title")); ?></title>
<!-- 引入ico图标并且设置书签栏 -->
<link rel="shortcut icon"  href="/Public/images/favicon.ico" />
<link rel="Bookmark" href="/Public/images/fivicon.ico" />
<link href="/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/Public/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/Public/css/lightbox.css">

<!-- jQuery -->
<script type='text/javascript' src="/Public/js/jquery-1.11.1.min.js"></script>
<!--引入css文件 -->
<link href='/Public/css/family.css' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blog,learn,PHP,website,ThinkPHP" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
</head>
<body>
<!-- header -->
<div class="banner">
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
					 <h1><a href="<?php echo ($indexUrl); ?>"><span><?php echo (L("name")); ?></span></a></h1>
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
								 <li class="active"><a href="<?php echo ($indexUrl); ?>"><?php echo (L("index")); ?></a></li>
								 <li class="dropdown">
									<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown"><?php echo (L("reviews")); ?><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo ($reviewUrl); ?>"><?php echo (L("review_1")); ?></a></li>
										<li><a href="<?php echo ($galleryUrl); ?>"><?php echo (L("review_2")); ?></a></li>
									</ul>
								 </li>					
								 <li><a href="<?php echo ($galleryUrl); ?>"><?php echo (L("gallery")); ?></a></li>
								 <li><a href="<?php echo ($signUrl); ?>"><?php echo (L("sign")); ?></a></li>
                                                                 <li><a href="<?php echo ($indexUrl); ?>">退出</a></li>
							 </ul>
							</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
					<script type="text/javascript" src="/Public/js/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
		  <div class="banner-info">
			 <h3><?php echo (L("welcome")); ?></h3>
			 <h2><?php echo (L("theme")); ?></h2>
		  </div>
		  <div class="social">
				<ul>
					<li><a href="#"><span class="fa"> </span></a></li>
					<li><a href="#"><span class="tw"> </span></a></li>
					<li><a href="#"><span class="g"> </span></a></li>
					<li><a href="#"><span class="in"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
				</ul>
				<div class="clearfix"></div>
		 </div>
	 </div>	 
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <div class="welcome-info">
				<h3><?php echo (L("title")); ?></h3>
	     </div>
	 </div>
</div>
<!---->  
<div class="content">
	 <div class="container">
		  <div class="col-md-8 content-left">
			 <div class="information">
				 <h4><?php echo (L("title_1")); ?></h4>
				 <div class="information_grids">
					 <div class="info">					 
						 <p><?php echo (L("motto")); ?></p>
						 <a href="about.html"><?php echo (L("read_more")); ?></a>
					 </div>
					 <div class="info-pic">	
						 <img src="/Public/images/ps.png" class="img-responsive" alt=""/>
					 </div>
					 <div class="clearfix"></div>
				 </div>				 
			 </div>
			 <div class="games-grids">
					 <div class="game-grid-left">
						 <div class="grid1">
							 <h5 class="act"><a href="<?php echo ($singleUrl); ?>"><?php echo ($life["blog_group"]); ?></a></h5>
							 <a href="<?php echo ($singleUrl); ?>"><img src="<?php echo ($life["blog_images"]); ?>" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="<?php echo ($singleUrl); ?>"><?php echo ($life["blog_name"]); ?></a></h4>
								 <p><?php echo (substr($life[blog_content],0,62)); ?></p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo ($singleUrl); ?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div>
						 <div class="grid2">
							 <h5 class="race"><a href="<?php echo ($singleUrl); ?>">Racing</a></h5>
							 <a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/c2.jpg" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="<?php echo ($singleUrl); ?>">Monster Racing</a></h4>
								 <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo ($singleUrl); ?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div>
					 </div>
					 
					 <div class="game-grid-right">
						 <div class="grid3">
							 <h5 class="sport"><a href="<?php echo ($singleUrl); ?>"><?php echo ($build["blog_group"]); ?></a></h5>
							 <a href="<?php echo ($singleUrl); ?>"><img src="<?php echo ($build["blog_images"]); ?>" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="<?php echo ($singleUrl); ?>"><?php echo ($build["blog_name"]); ?></a></h4>
								 <p><?php echo (substr($build["blog_content"],0,64)); ?></p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo ($singleUrl); ?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div>
						 <div class="grid4">
							 <h5 class="arc"><a href="<?php echo ($singleUrl); ?>">Arcade</a></h5>
							 <a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/c4.jpg" class="img-responsive" alt=""/></a>
							 <div class="grid1-info">
								 <h4><a href="<?php echo ($singleUrl); ?>">Skylanders</a></h4>
								 <p>Integer ut leo vitae nibh cursus aliquetr Sed, condimentum bibendum nibh accumsan vel.</p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo ($singleUrl); ?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div>
					 </div>
					 <div class="clearfix"></div>
				 </div>
		  </div>
		  <div class="col-md-4 content-right">
			  <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav2" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo (L("trending")); ?></a></li>
                    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo (L("recent_posts")); ?></a></li>
                    </ul>
               <!-- Tab panes -->
              <div class="tab-content">
						<div role="tabpanel" class="tab-pane active re-pad2" id="home">
						   <div class="game1">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/tr1.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-pic-info">
								<h4><a href="<?php echo ($singleUrl); ?>">Angry Birds</a></h4>
								<p>Lorem Ipsum is simply dummy text of the printing industry.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="game1">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/tr3.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-pic-info">
								<h4><a href="<?php echo ($singleUrl); ?>">Vice City GTA</a></h4>
								<p>Lorem Ipsum is simply dummy text of the printing industry.</p>
								</div>                                                                                                                                                                                                                     
								<div class="clearfix"></div>
							</div>
							<div class="game1">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/tr2.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-pic-info">
								<h4><a href="<?php echo ($singleUrl); ?>">Call Of Duty</a></h4>
								<p>Lorem Ipsum is simply dummy text of the printing industry.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane re-pad2" id="profile">
							<div class="game-post">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/tr4.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-post-info">
								<h4><a href="<?php echo ($singleUrl); ?>">IronMan</a></h4>
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="game-post">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/tr5.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-post-info">
								<h4><a href="<?php echo ($singleUrl); ?>">God Of War</a></h4>
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="game-post">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo ($singleUrl); ?>"><img src="/Public/images/tr6.jpg" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-post-info">
								<h4><a href="<?php echo ($singleUrl); ?>">Need For Speed</a></h4>
								<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2015 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>                   
			 </div>
			 <!---->
			 <div class="category blog-ctgry">
					<h4>Top Games</h4>
					<div class="list-group">
						<a href="#" class="list-group-item">Cras justo odio</a>
						<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
						<a href="#" class="list-group-item">Morbi leo risus</a>
						<a href="#" class="list-group-item">Porta ac consectetur ac</a>
						<a href="#" class="list-group-item">Vestibulum at eros</a>
						<a href="#" class="list-group-item">Quisque elementum </a>
						<a href="#" class="list-group-item">Vestibulum eleifend</a>
						<a href="#" class="list-group-item">Donec sit amet justo </a>
					</div>
			 </div>	
			 <div class="photo-gallery">
				 <h4><?php echo (L("gallery")); ?></h4>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p2.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p2.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p1.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p1.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p3.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p3.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p4.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p4.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p5.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p5.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p6.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p6.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>
				 <div class="gallery-1">
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p1.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p1.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p3.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p3.jpg" alt=""/></a>
					</div>
					<div class="col-md-4 gallery-grid-pic">
						<a class="example-image-link" href="/Public/images/p4.jpg" data-lightbox="example-set"><img class="example-image" src="/Public/images/p4.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				 </div>

			 </div>

		  </div>
		  <div class="clearfix"></div>
	 </div>
</div>
<script src="/Public/js/lightbox-plus-jquery.min.js"></script>

<!--引入footer-->
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-6 news-ltr">
				 <h4>Newsletter</h4>
				 <p>Aenean sagittis est eget elit pulvinar cursus. Lorem ipsum consectetur adipiscing elit. Phasellus non purus at risus consequat finibus.</p>
				 <form>					 
					  <input type="text" class="text" value="Enter Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Email';}">
					 <input type="submit" value="Subscribe">
					 <div class="clearfix"></div>
				 </form>			 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categories</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Action</a></li>
					 <li><a href="#">Racing</a></li>
					 <li><a href="#">Adventure</a></li>
					 <li><a href="#">Simulation</a></li>
					 <li><a href="#">Bike</a></li>
				 </ul>							 
			 </div>	
			 <div class="col-md-3 ftr-grid">
				 <h3>Platform</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Pc</a></li>
					 <li><a href="#">Ps4</a></li>
					 <li><a href="#">XBOX 360</a></li>					 
					 <li><a href="#">XBOX ONE</a></li>
					 <li><a href="#">PSP</a></li>
				 </ul>				 
			 </div>			 	
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>备案号：蜀ICP备16016381 <a  href="www.hexiaojiao.top" target="_blank" title="小花的个人博客">Copyright © 2016 hexiaojiao.top All Rights Reserved. 个人博客 版权所有</a></p>
	 </div>
</div>
<!---->

</body>
</html>

</body>
</html>