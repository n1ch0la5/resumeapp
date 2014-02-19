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
		  <script src="/javascripts/respond.js" type="text/javascript"></script>
		<![endif]-->

	</head>
	<body>
		<div class="wrapper">
			<header>
				<div class="logo">
					<h1><a href="">eRezzy</a></h1>
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
						<li><a href="">Examples</a></li>
						<li><a href="">Resume Builder</a></li>
						<li><a href="">Tips</a></li>
						<li><a href="">How it Works</a></li>
						<li><a class="get-started" href="">Get Started</a></li>
					</ul>
				</nav>
			</header>
			<div class="site-content">
				<main class="alpha" role="main">
					<div class="feature-video">
						<div class="content">
							<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>
							<p>Pellenteque velit augue, elementum et interdum vel, molestie et ante.</p>
							<a class="watch" href="#">Watch Our Video</a>
					    </div>
					</div>
					<div class="cta-bar is-sticky">
						<p>Get started on your professional resume today.</p>
						<a class="cta-bar green" href="">Create a Resume</a>
						<a class="cta-bar white icon-arrow-right" href="">Sign Up</a>
					</div>
					<div class="trust">
					</div>
					<div class="primary three-col">
						<h2>Build your professional resume in just a few minutes</h2>
						<div class="col col1">
							<div class="image"><img src="/images/file.png" alt="What is eRezzy?" /></div>
							<h3>What is eRezzy?</h3>
							<p>An online tool that helps you creat your resume quickly and professionally without the hassle and struggle of figuring out how to format everything.</p>
							<p>With a good resume, you have the passport to a better job.</p>
						</div>
						<div class="col col2">
							<div class="image"><img src="/images/macbook.png" alt="How Does it Work?" /></div>
							<h3>How Does it Work?</h3>
							<p>Enter your occupation (and experience), it will suggest the best template. Select key phrases where resume writing experience is not required.</p>
							<p>Easily save and export to PDF, or publish online</p>
						</div>
						<div class="col col3">
							<div class="image"><img src="/images/browser.png" alt="Key Phrases" /></div>
							<h3>Key Phrases</h3>
							<p>Search and customize thousands of professional phrases. You pick from samples written by experts. No more writers block.</p>
							<p>We include context-sensitive resume writing tips</p>
						</div>
					</div>
					<div class="secondary two-col">
						<div class="col col1">
							<h3>Heading</h3>
							<ul class="arrow">
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
							</ul>
						</div>
						<div class="col col2">
							<h3>Heading</h3>
							<ul class="arrow">
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
							</ul>
						</div>
					</div>
				</main>
			</div><!--End Site-Content-->
			<footer>
				<p class="copyright">&copy; Copyright 2014 <a href="">eRezzy.com</a> All rights reserved.</p>
				<nav class="footer-nav">
					<ul>
						<li><a href="">About Us</a></li>
						<li><a href="">Privacy Policy</a></li>
						<li><a href="">Terms of Use</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</nav>
				<ul class="footer-social-links">
					<li><a class="facebook" href=""><i class="fa fa-facebook-square"></i></a></li>
					<li><a class="twitter" href=""><i class="fa fa-twitter-square"></i></a></li>
					<li><a class="linkedin" href=""><i class="fa fa-linkedin-square"></i></a></li>
					<li><a class="youtube" href=""><i class="fa fa-youtube-square"></i></a></li>
				</ul>
			</footer>
		</div><!--End Wrapper-->
		<nav class="offcanvas-menu">
			<ul>
				<li><a class="login" href="">Sign In</a></li>
				<li><a class="login" href="">Sign Up</a></li>
				<li><a href="">Examples</a></li>
				<li><a href="">Resume Builder</a></li>
				<li><a href="">Tips</a></li>
				<li><a href="">How it Works</a></li>
				<li><a class="get-started" href="">Get Started</a></li>
			</ul>
		</nav><!--End Off Canvas Menu-->
	</body>
	<!--[if lt IE 9]><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!--><script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><!--<![endif]-->

    <script src="/js/site.js" type="text/javascript" async></script>

</html>