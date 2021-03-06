<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta name="baidu-site-verification" content="vTLMT2DocA" />
<title><?php echo (L("title")); ?></title>
<!-- 引入ico图标并且设置书签栏 -->
<link rel="shortcut icon"  href="/Public/images/favicon.ico" />
<link rel="Bookmark" href="/Public/images/fivicon.ico" />
<link href="/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/Public/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/Public/css/lightbox.css">

<!-- jQuery -->
<script type='text/javascript' src="/Public/js/jquery-1.11.1.min.js"></script>
<!--分享当前页面到qq空间-->
<script type='text/javascript' src="/Public/js/share.js"></script>
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
								 <?php if(cookie('user_name') == 'admin'): ?><li><a href="<?php echo U('Blog/add');?>"><?php echo (L("review_3")); ?></a></li>
									<?php else: ?>						
								 <li><a href="<?php echo ($galleryUrl); ?>"><?php echo (L("gallery")); ?></a></li><?php endif; ?>
								 <?php if(cookie('user_name') == ''): ?><li><a href="<?php echo ($signUrl); ?>"><?php echo (L("sign")); ?></a></li><?php endif; ?>
								  <li><a href="<?php echo U('Sign/logout');?>"><?php echo (L("logout")); ?></a></li>
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
			 <h3><?php echo (L("theme")); ?></h3>
			 <h2><!-- <?php echo (L("theme")); ?> --><?php echo ($login); ?></h2>
		  </div>
		  <div class="social">
				<ul>
					<li><a href="#" id="zone" onclick="share()"><span class="fa" > </span></a></li>
					<li><a href="http://i4.buimg.com/588926/348a06a5b870c0cd.jpg"><span class="tw"> </span></a></li>
					<li><a href="http://weibo.com/3783884100"><span class="g"> </span></a></li>
	
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
					 </div>
					 <div class="info-pic">	
						 <img src="/Public/images/ps.png" class="img-responsive" alt=""/>
					 </div>
					 <div class="clearfix"></div>
				 </div>				 
			 </div>

			 <div class="games-grids">
					 <div class="game-grid-left">
<?php if(is_array($content)): $i = 0; $__LIST__ = array_slice($content,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cont): $mod = ($i % 2 );++$i;?><div class="grid1">
							 <h5 class="act"><a href="<?php echo U('Single/single',array('id'=>1));?>"><?php echo ($cont["blog_group"]); ?></a></h5>

							 <img src="<?php echo ($cont["blog_images"]); ?>" class="img-responsive" alt=""/>
							 <div class="grid1-info">
								 <h4><a href="<?php echo U('Single/single',array('id'=>1));?>"><?php echo ($cont['blog_name']); ?></a></h4>
								 <p><?php echo (msubstr($cont[blog_content],0,62)); ?></p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo U('Single/single',array('id'=>1));?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div><?php endforeach; endif; else: echo "" ;endif; ?>						 
<?php if(is_array($content)): $i = 0; $__LIST__ = array_slice($content,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cont2): $mod = ($i % 2 );++$i;?><div class="grid2">
							 <h5 class="race"><a href="<?php echo U('Single/single',array('id'=>2));?>"><?php echo ($cont2['blog_group']); ?></a></h5>
							 <img src="<?php echo ($cont2['blog_images']); ?>" class="img-responsive" alt=""/>
							 <div class="grid1-info">
								 <h4><a href="<?php echo U('Single/single',array('id'=>2));?>"><?php echo ($cont2["blog_name"]); ?></a></h4>
								 <p><?php echo (substr($cont2[blog_content],0,62)); ?></p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo U('Single/single',array('id'=>2));?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div>
					 </div><?php endforeach; endif; else: echo "" ;endif; ?>				 	
				 <div class="game-grid-right">
				 <?php if(is_array($content)): $i = 0; $__LIST__ = array_slice($content,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cont3): $mod = ($i % 2 );++$i;?><div class="grid3">
							 <h5 class="sport"><a href="<?php echo U('Single/single',array('id'=>3));?>"><?php echo ($cont3['blog_group']); ?></a></h5>
							 <img src="<?php echo ($cont3["blog_images"]); ?>" class="img-responsive" alt=""/>
							 <div class="grid1-info">
								 <h4><a href="<?php echo U('Single/single',array('id'=>3));?>"><?php echo ($cont3["blog_name"]); ?></a></h4>
								 <p><?php echo (substr($cont3["blog_content"],0,64)); ?></p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo U('Single/single',array('id'=>3));?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div><?php endforeach; endif; else: echo "" ;endif; ?>					 
<?php if(is_array($content)): $i = 0; $__LIST__ = array_slice($content,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cont4): $mod = ($i % 2 );++$i;?><div class="grid4">
							 <h5 class="arc"><a href="<?php echo U('Single/single',array('id'=>4));?>"><?php echo ($cont4['blog_group']); ?></a></h5>
							 <img src="<?php echo ($cont4["blog_images"]); ?>" class="img-responsive" alt=""/>
							 <div class="grid1-info">
								 <h4><a href="<?php echo U('Single/single',array('id'=>4));?>"><?php echo ($cont4["blog_name"]); ?></a></h4>
								 <p><?php echo (substr($cont4["blog_content"],0,64)); ?></p>								 
							 </div>
							 <div class="more">
							 <a href="<?php echo U('Single/single',array('id'=>4));?>"><?php echo (L("read_more")); ?></a>
							 </div>
						 </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
						   <?php if(is_array($hot_rank)): $i = 0; $__LIST__ = $hot_rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot): $mod = ($i % 2 );++$i;?><div class="game1">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo U('Single/single',array('id'=>$hot['blog_id']));?>"><img src="<?php echo ($hot["blog_images"]); ?>" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-pic-info">
								<h4><a href="<?php echo U('Single/single',array('id'=>$hot['blog_id']));?>"><?php echo ($hot["blog_name"]); ?></a></h4>
								<p><?php echo (substr($hot["blog_content"],0,30)); ?></p>
								</div>
								<div class="clearfix"></div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div role="tabpanel" class="tab-pane re-pad2" id="profile">
							
						<?php if(is_array($time_rank)): $i = 0; $__LIST__ = $time_rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$time): $mod = ($i % 2 );++$i;?><div class="game-post">
								<div class="col-md-3 tab-pic">
									<a href="<?php echo U('Single/single',array('id'=>$time['blog_id']));?>"><img src="<?php echo ($time["blog_images"]); ?>" alt="/" class="img-responsive"></a>
								</div>
								<div class="col-md-9 tab-post-info">
								<h4><a href="<?php echo U('Single/single',array('id'=>$time['blog_id']));?>"><?php echo ($time["blog_name"]); ?></a></h4>
								<p>Posted By <a href="#"><?php echo ($time["blog_author"]); ?></a> &nbsp;&nbsp; on <?php echo (date('Y-m-d H:i:s',strtotime($time["blog_time"]))); ?> &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
								</div>
								<div class="clearfix"></div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>                   
			 </div>
			 <!---->
			 <div class="category blog-ctgry">
					<h4><?php echo (L("rank")); ?></h4>
					<div class="list-group">
					<?php if(is_array($rank)): $i = 0; $__LIST__ = $rank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rank_list): $mod = ($i % 2 );++$i;?><a href="#" class="list-group-item"><?php echo ($rank_list[user_name]); ?></a>
					<a href="#" class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------<?php echo ($rank_list[vip]); ?>级会员
	</a><?php endforeach; endif; else: echo "" ;endif; ?>
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
<link rel="stylesheet" href="/Public/flipcountdown/jquery.flipcountdown.css" />
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script src="/Public/flipcountdown/jquery.flipcountdown.js"></script>
<script>
	$(function()
	{
		$('#flipcountdown_01').flipcountdown({
			size:"lg"
		});
	});
</script>
<!-- footer -->
<div class="footer">
	 <div class="container">
	 
		 <div class="footer-grids">
			 <div class="col-md-6 news-ltr" id="flipcountdown_01">
				 		 <h4>&nbsp;&nbsp;&nbsp;&nbsp;这是基于ThinkPHP3.2.3的个人博客，接下来很长一段时间我要学习新的技术，并且同时我想好好学学phtotoshop，本博客暂停更新</h4>
			 </div>

			 <div class="col-md-3 ftr-grid">
				 <h3><?php echo (L("foot_catogory")); ?></h3>
				 <ul class="ftr-list">
					 <li><a href="<?php echo U('Single/blog',array('kind'=>0));?>"><?php echo (L("php")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>1));?>"><?php echo (L("cure")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>2));?>"><?php echo (L("life")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>3));?>"><?php echo (L("novel")); ?></a></li>
					 <li><a href="<?php echo U('Single/blog',array('kind'=>4));?>"><?php echo (L("others")); ?></a></li>
				 </ul>							 
			 </div>	
			 <div class="col-md-3 ftr-grid">
				 <img src="/Public/images/weixin.jpg" style="height:80%;width:80%" alt="<?php echo (L("erweima")); ?>"/>			 
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