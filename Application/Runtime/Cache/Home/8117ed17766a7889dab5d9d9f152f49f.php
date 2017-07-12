<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon"  href="/tp3/tp3_blog/Public/images/favicon.ico" />
<link rel="Bookmark" href="/tp3/tp3_blog/Public/images/fivicon.ico" />

	<title>贺小花的个人博客</title>

	<!--- CSS --->
	<link rel="stylesheet" href="/tp3/tp3_blog/Public/css/loginIn_style.css" type="text/css" />


	<!--- Javascript libraries (jQuery and Selectivizr) used for the custom checkbox --->

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="/tp3/tp3_blog/Public/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="/tp3/tp3_blog/Public/js/selectivizr.js"></script>
		<noscript><link rel="stylesheet" href="/tp3/tp3_blog/Public/css/fallback.css" /></noscript>
	<![endif]-->

	</head>

	<body>
		<div id="container">
			<form action="<?php echo U('Sign/signIn');?>" method="post">
				<div class="login"><?php echo (L("login")); ?></div>
				<p><?php echo (L("signNote")); ?></p>
				<div class="username-text">用户名：</div>
				<div class="password-text">密码：</div>
				<div class="username-field">
					<input type="text" name="user_name" placeholder="请输入用户名" />
				</div>
				<div class="password-field">
					<input type="password" name="user_pwd" placeholder="请输入密码" />
				</div>
				<input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">记住密码</label>
				<div class="forgot-usr-pwd"> <a href="<?php echo U('Sign/forget');?>">忘记用户名 </a>或者直接 <a href="<?php echo U('Sign/signUp');?>">注册新账号</a></div>
				<input type="submit" name="submit" value="GO" />
			</form>
		</div>
		<div id="footer">
			 <p>备案号：蜀ICP备16016381 <a  href="http://www.hexiaojiao.top" target="_blank" title="小花的个人博客">Copyright © 2016 hexiaojiao.top All Rights Reserved. 个人博客 版权所有</a></p>
		</div>
	</body>
</html>