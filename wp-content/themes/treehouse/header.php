<!doctype html>
<html <?php language_attributes(); ?> ng-app="thApp">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>

	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

	
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

	<?php

	$menu_args = array( 
		'theme_location' => 'primary',
		'items_wrap' => '<ul id="%1$s" ng-class="{ open : menuOpen }" class="menu right inline-list %2$s">%3$s</ul>'
	); 

	?>
	
</head>

<body <?php body_class(); ?> ng-controller="MainController">
	<header class="header" ng-init="showMenu = false;">
		<!-- <div class="row">
			<div class="small-12 columns"> -->
				<h1 class="left"><a href="<?php echo home_url() ?>" title="<?php bloginfo('name'); ?>" class="logo"><?php bloginfo('name'); ?></a></h1>
				<a ng-click="showMenu = !showMenu" ng-class="{ rotate : showMenu }" class="right toggle-menu"><i class="fa fa-bars"></i></a>
				<ul class="inline-list right" ng-class="{ visible : showMenu }">
					<li><a href="<?php echo home_url('/#work') ?>">Work</a></li>
					<li><a ng-click="showAbout(false)">About</a></li>
					<li><a ng-click="showAbout(true)">Contact</a></li>
				</ul>
			<!-- </div>
		</div> -->
	</header>