<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Single</title>
<script type='text/javascript' src="__PIBLIC__/js/jquery-1.11.1.min.js"></script>
<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/css/style.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/Public/editor/themes/default/default.css" />
	<link rel="stylesheet" href="/Public/editor/plugins/code/prettify.css" />
	<script charset="utf-8" src="/Public/editor/kindeditor.js"></script>
	<script charset="utf-8" src="/Public/editor/lang/zh-CN.js"></script>
	<script charset="utf-8" src="/Public/editor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '/Public/editor/plugins/code/prettify.css',
				uploadJson : '/Public/editor/php/upload_json.php',
				fileManagerJson : '/Public/editor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
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

<!---->
<center>
	<form action="<?php echo U('Blog/add');?>" method="post" enctype="multipart/form-data">

<p>请选择博客封面：<input type="file" name="blog_images" /></p>
<p>请选择博客分组：<select name="blog_group" id="">
	<option value="PHP">PHP</option>
	<option value="治愈">治愈</option>
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
<textarea name="content" id="blog_content" style="width:700px;height:200px;visibility:hidden;"><?php echo htmlspecialchars($htmlData); ?></textarea>
		<br /><br />
<input type="submit" style="width: 400px;height: 50px;" />
	</form>
</center>
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