﻿<?php if ( ! defined('BASE_PATH') ) exit('No direct script access allowed');
ob_start();
use \tinyPHP\Classes\Libraries\Cookies as Auth;
use \tinyPHP\Classes\Libraries\Hooks as Action;
$hook = new Action;
$auth = new Auth;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $hook->get_option('forum_name'); ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/forum.css" />
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/custom.js"></script>
</head>
<!-- Start body tag -->
<body>

<!-- Start top black bar -->
<div class="top" id="top">
	<div class="inner">
		<form action="">
		<div class="login">
		<div class="col1"></div>
		<div class="col2"></div>
		<div class="col3"></div>
		<div class="col4"></div>
		<?php if($auth->isUserLoggedIn() == true) { ?>
		<div class="col5">Howdy</div>
		<div class="col6"><a href="<?php echo BASE_URL; ?>profile"><?php echo $auth->getUserField('username'); ?></a> <a href="<?php echo BASE_URL; ?>index/logout">( Logout )</a></div>
		<?php } else { ?>
		<div class="col5"><a href="<?php echo BASE_URL; ?>login" class="a1">Login</a></div>
		<div class="col6"><a href="<?php echo BASE_URL; ?>register" class="a1">Register</a></div>
		<?php } ?>
		</div>
		</form>
	</div><!-- /.inner -->
</div><!-- /.top -->
<!-- End top black bar -->

<!-- Start header -->
<div class="header">
	<div class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>static/images/logo01.png" alt="" width="206" height="46" /></a></div>
	</div><!-- /.header -->
<!-- End header -->

<!-- Start Menu -->
<div class="topmenu">
	<div class="inner">
		<ul class="menu">
			<li class="item01"><a href="<?php echo BASE_URL; ?>"><span>Home</span></a></li>
			<?php if($auth->isUserLoggedIn() == true) { ?>
			<li class="item02"><a class="parent" href="#"><span>Browse All Pages</span></a>
			<ul>
				<?php if($auth->getUserField('role') == 'Administrator') { ?>
				<li><a href="<?php echo BASE_URL; ?>settings">Forum Settings</a></li>
				<li><a href="<?php echo BASE_URL; ?>category/create">Create a forum</a></li>
				<?php } ?>
				<li><a href="<?php echo BASE_URL; ?>profile">Edit Profile</a></li>
				<li><a href="<?php echo BASE_URL; ?>topic/create">Start a topic</a></li>
			</ul>
			</li>
			<?php } ?>
		</ul>
	</div><!-- /.inner -->
</div><!-- /.topmenu -->
<div class="topmenu2-obj">
	<div class="inner"></div><!-- /.inner -->
</div><!-- /.topmenu2-obj -->
<!-- End of Menu -->

<!-- Start main container -->
<div class="container">