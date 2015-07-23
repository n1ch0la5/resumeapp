				<main class="alpha" role="main">
					<?php if( $this->ion_auth->logged_in() ) : ?>
					<div class="li-home-feature">
						<div class="img-container">
							<img src="images/placeholder.jpg" alt="eRezzy Resume">
						</div>
						<div class="content">
							<p>Welcome back <?php echo $firstname; ?>. Ready to make your resume stand out? <a href="/builder">Get Started</a></p>
					    </div>
					</div>
					<?php else : ?>
					<div class="feature-video">
						<div class="video-box">
							<iframe width="560" height="315" src="//www.youtube.com/embed/sVFHEFPaE_M?autoplay=1&controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<?php endif; ?>
					<div class="cta-bar is-sticky">
						<p>Get started on your free professional resume today</p>
						<a class="buynow" href="/builder"><img src="/images/buy.jpg" alt="buy now"></a>
						<!--<a class="green" href="/builder">Create a Resume</a>-->
					</div>
					<div class="trust">
					</div>
					<div class="primary three-col">
						<h2>eRezzy’s customizable resume templates allow you to tell the story of your career in an attractive, professional way.</h2>
						<div class="col col1">
							<div class="image"><img src="/images/file.png" alt="What is eRezzy?" /></div>
							<h3>What is eRezzy?</h3>
							<p>eRezzy provides the tools to build a customizable resume that helps job seekers take the next step in their career. With a better resume, you’re more likely to land a better job.</p>
						</div>
						<div class="col col2">
							<div class="image"><img src="/images/macbook.png" alt="How Does it Work?" /></div>
							<h3>How Does it Work?</h3>
							<p>You tell us about your career. We suggest the best way to format it in a resume. Enter your work history, select from key phrases, and let eRezzy handle the rest.</p>
						</div>
						<div class="col col3">
							<div class="image"><img src="/images/browser.png" alt="Key Phrases" /></div>
							<h3>Key Phrases</h3>
							<p>Recruiters screen hundreds of resumes, looking for the words that will make candidates stand out. eRezzy lets you build those words into your resume at the start.</p>
						</div>
					</div>
					<div class="secondary two-col">
						<div class="col col1">
							<h3>Resume Templates</h3>
							<ul class="arrow">
								<li>Take some of the hassle out of resume writing by choosing one of our customizable templates</li>
								<li>Create a clear and concise resume with eRezzy</li>
							</ul>
						</div>
						<div class="col col2">
							<h3>eRezzy Helps You</h3>
							<ul class="arrow">
								<li>Put your tailored resume in more hands, faster</li>
								<li>Build a professional resume in seconds</li>
							</ul>
						</div>
					</div>
				</main>
