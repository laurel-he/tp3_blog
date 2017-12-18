<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/css/style.css" rel='stylesheet' type='text/css' />
<link href="/Public/css/read.css" rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- jQuery (necessary JavaScript plugins) -->
</head>
<body>
<!-- header -->
<link rel="shortcut icon"  href="/Public/images/favicon.ico" />
<link rel="Bookmark" href="/Public/images/fivicon.ico" />
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
								 <?php if(cookie('user_name') == 'admin'): ?><li><a href="<?php echo U('Blog/add');?>"><?php echo (L("review_3")); ?></a></li>
									<?php else: ?>						
								 <li><a href="{Gallery/gallery}"><?php echo (L("gallery")); ?></a></li><?php endif; if(cookie('user_name') == ''): ?><li><a href="<?php echo U('Sign/signUp');?>"><?php echo (L("sign")); ?></a></li><?php endif; ?>
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
	 </div>	 
</div>
<!---->

<h1 id="read-head">评论列表</h1>
<div id="bod" >

<div id="read-right" style="clear:both;height:auto;overflow:hidden">

<?php if(is_array($select)): foreach($select as $key=>$data_info): ?><div class="media">
				  <div class="media-left">
					<a href="#">
					  <img class="media-object" src="<?php echo ($data_info["avatar"]); ?>" alt="" width="60px" height="60px">
					</a>
				  </div>
				  <div class="media-body">
					<h4 class="media-heading"><a href="#"><?php echo ($data_info["name"]); ?></a></h4>
						<p><?php echo ($data_info["message"]); ?></p>	
						<?php if(cookie('user_name') == $data_info['name']): ?><a href="<?php echo U('Single/delete',array('id'=>$data_info['id']));?>">删除评论</a><?php endif; ?>

				  </div>
				  				</div>
<hr /><hr /><?php endforeach; endif; ?>

<center class="pages"><?php echo ($data_list); ?></center>

</div>
<!--引入footer-->
<footer style="clear:both"><link rel="stylesheet" href="/Public/flipcountdown/jquery.flipcountdown.css" />
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
</html></footer>


</body>

</html>