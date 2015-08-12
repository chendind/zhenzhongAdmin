<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<title>Log In</title>
	
	<link rel="stylesheet" type="text/css" href="/Public/resource/css/common/reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/resource/css/login/login.css">
</head>
<body>
<section class="logo-wrapper">
	<div class="brand-top"></div>
	<div class="brand-middle"></div>	
</section>
<section class="login-wrapper">
	<div class="login-panel">
		<div class="login-title">
			<p>A.RT</p>
			<p>Private Label</p>
			<p>User System</p>
		</div>
		<div class="login-submit">
			<form method="post">
				<label class="sign-in">Sign In</label>
				<div class="dropdown-wrapper">
					<a class="dropdown-triger">
						<div class="dropdown-content">中文</div>
						<span class="flaticon-earth3 addon"></span>
					</a>
					<div class="clear"></div>
					<ul class="dropdown-list">
						<li>中文</li>
						<li>English</li>
						<li>Français</li>
						
					</ul>
				</div>
				
				<input type="text" name="user" placeholder="User Name">
				<input type="password" name="pwd" placeholder="Password">
				<a class="btn-red" name="submit" href="/index.php/Admin/Admin/public">Sign In</a>
			</form>
			<div class="login-help">
				<a href="#"><span>Forgot </span><span>Password?</span></a>
			</div>
		</div>
		<div class="login-copyright">
			<p>Copyright 2015 Auchan, Inc.</p>
			<p>All rights reserved</p>
			<div class="clear"></div>
			<ul class="items">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Support</a></li>
			</ul>
		</div>
	</div>		
</section>
<section class="brand-wrapper">
	<div class="brand-bottom"></div>
</section>
<script type="text/javascript" src="/Public/resource/js/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/Public/resource/js/login/login.js"></script>
</body>
</html>