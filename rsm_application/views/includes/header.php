<!doctype html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
		<meta charset="utf-8">
		<meta name="generator" content="CodeIgniter">
		<meta name="author" content="Zach Richard/Nick Johnson">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is the Meta Description">
		<link rel="canonical" href="http://eRezzy.com">
		<title>eRezzy</title>
		<meta name="apple-mobile-web-app-title" content="eRezzy">
		<meta name="application-name" content="eRezzy">
		<link rel="shortcut icon" href="/favicon.ico">
		<link href="/css/site.css" rel="stylesheet" type="text/css" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		  <script src="/js/respond.js" type="text/javascript"></script>
		  <script src="/js/modernizr.js" type="text/javascript"></script>
		<![endif]-->
	</head>
	<body class="<?php echo $page_class; ?>">
		<div class="wrapper">
			<header>
				<div class="logo">
					<h1><a href="/">eRezzy</a></h1>
				</div>
				<p class="button-menu transform"><a href="#nav"><span></span></a></p>
				<nav class="sign-in">
                <?php if( $this->ion_auth->logged_in() ) : ?>
                  <p class="welcome">Welcome, <?php echo $firstname; ?> | <a href="/auth/logout/">Logout</a></p>
                <?php else : ?>
                  <ul>
						<li><a href="">Sign In</a></li>
						<li><a href="">Sign Up</a></li>
				  </ul>
                <?php endif; ?>
				</nav>
				<nav class="topnav">
					<ul>
						<li><a href="/examples">Examples</a></li>
						<li><a href="/builder">Resume Builder</a></li>
						<li><a href="/tips">Tips</a></li>
						<li><a href="/how-it-works">How it Works</a></li>
						<li><a class="get-started" href="/builder">Get Started</a></li>
					</ul>
				</nav>
			</header>
			<div class="site-content">