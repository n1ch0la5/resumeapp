			</div><!--End Site-Content-->
            <footer>
				<p class="copyright">&copy; Copyright <?php echo date("Y") ?> <a href="">eRezzy.com</a> All rights reserved.</p>
				<nav class="footer-nav">
					<ul>
						<li><a class="newWin" href="/privacy.html">Privacy Policy</a></li>
					</ul>
				</nav>
				<ul class="footer-social-links">
					<li><a class="facebook" href="https://www.facebook.com/eRezzy?ref=hl"><i class="fa fa-facebook-square"></i></a></li>
					<li><a class="twitter" href="https://twitter.com/TweetERezzy"><i class="fa fa-twitter-square"></i></a></li>
					<li><a class="linkedin" href="https://www.linkedin.com/company/5324765?trk=tyah&trkInfo=tarId%3A1420464517983%2Ctas%3Aerezzy%2Cidx%3A1-1-1"><i class="fa fa-linkedin-square"></i></a></li>
				</ul>
			</footer>
		</div><!--End Wrapper-->
		<nav class="offcanvas-menu">
			<ul>
				<?php if( $this->ion_auth->logged_in() ) : ?>
				<li class="login"><a href="/auth/logout/">Logout</a></li>
				<?php else : ?>
				<li><a class="login" href="/auth/login/">Sign In</a></li>
				<li><a class="login" href="/auth/register/">Sign Up</a></li>
				<?php endif; ?>
				<li><a href="/examples">Examples</a></li>
				<li><a href="/builder">Resume Builder</a></li>
				<li><a href="/tips">Tips</a></li>
				<li><a href="/how">How it Works</a></li>
				<li><a class="get-started" href="">Get Started</a></li>
			</ul>
		</nav><!--End Off Canvas Menu-->
	</body>
	<!--[if lt IE 9]><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!--><script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><!--<![endif]-->

    <script src="/js/site.js" type="text/javascript" async></script>

</html>