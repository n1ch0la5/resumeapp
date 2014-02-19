			</div><!--End Site-Content-->
            <footer>
				<p class="copyright">&copy; Copyright <?php echo date("Y") ?> <a href="">eRezzy.com</a> All rights reserved.</p>
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
				<?php if( $this->ion_auth->logged_in() ) : ?>
				<li class="login"><a href="/auth/logout/">Logout</a></li>
				<?php else : ?>
				<li><a class="login" href="">Sign In</a></li>
				<li><a class="login" href="">Sign Up</a></li>
				<?php endif; ?>
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