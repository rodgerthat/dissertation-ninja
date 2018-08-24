<?php
/**
 * Created by PhpStorm.
 * User: goat
 * Date: 8/24/18
 * Time: 1:36 PM
 */

get_header(); ?>

<!-- PRELOADER -->
<div id="preloader"></div>

<!-- MAIN CONTAINER -->
<div class="main-container">


	<!-- HEADER -->
	<header class="white-bg text-black">
		<div class="row">
			<div class="logo">
				<a href="index.html"><img class="large-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dn-logo.png" width="110" alt="Logo"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dn-logo-sm.png" class="small-logo" width="90" alt="Logo"> </a>
			</div>
			<div class="menu-tint menu-trigger pushmenu"></div>
			<div class="menu">
				<div id="nav" class="pushmenu">
					<ul class="collapse">
						<li> <a href="index.html" data-offset="45" data-smooth-scroll>Home</a></li>
						<li> <a href="#about" data-offset="45" data-smooth-scroll>About</a></li>
						<li> <a href="#services" data-offset="45" data-smooth-scroll>Our Services</a></li>
						<li> <a href="#video" data-offset="45" data-smooth-scroll>Video Overview</a></li>
						<li> <a href="#contact" data-offset="45" data-smooth-scroll>Contact</a></li>
					</ul>


					<ul>
						<li> <a href="#"><i class="fa fa-user"></i> Log In</a>

						</li>
					</ul>

				</div>
				<div id="menu-trigger" class="menu-trigger">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		<!-- SEARCH OVERLAY -->
		<div class="search-overlay">
			<a href="#" class="close-search"></a>
			<form action="search.html" method="get">
				<input type="text" class="form-search" value="" placeholder="Type here to search...">
				<h5>Press enter to start</h5>
			</form>
		</div>
		<!-- END SEARCH OVERLAY -->
	</header>
	<!-- END HEADER -->


	<!-- INNER CONTAINER 190 30 45-->
	<div class="inner-container">



		<!-- SECTION -->
		<section class="full-height show-scrolldown-btn parallax" data-overlay="7" data-jarallax data-speed="0.2">
			<img class="jarallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider1.png" alt="">
			<div class="v-middle">
				<div class="row">
					<div class="large-12 columns text-center">
						<h1 class="uppercase">The Dissertation Process</h1>
						<h3 class="mb30">Are you thinking about starting a doctoral program, enrolled in a doctoral program, or just starting your dissertation?  The fact is that only about 50% of people who start a doctoral program ever finish.</h3>
						<a href="#services" class="button rounded white" data-offset="45" data-smooth-scroll>Check Out Our Services</a> </div>
				</div>
			</div>
		</section>
		<!-- END SECTION -->






		<!-- SECTION -->
		<section id="about" data-overlay="0">
			<div class="v-middle">
				<div class="row" style="background: url('assets/images/water.png') no-repeat center center fixed">
					<div class="large-12 columns text-center mb0 small-mb50">
						<h5 class="topheading reveal-from-bottom">About</h5>
						<h2 class="reveal-from-bottom mb70">A <em>unique approach</em>.</h2>
					</div>
					<div class="medium-4 columns reveal-from-bottom">
						<div class="contentbox-style3">
							<p>TEXT</p>

						</div>
					</div>
					<div class="medium-4 columns reveal-from-bottom">
						<div class="contentbox-style3">


							<p>TEXT</p>

						</div>
					</div>
					<div class="medium-4 columns reveal-from-bottom">
						<div class="contentbox-style3">



							<p>TEXT
							</p>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END SECTION -->




		<!-- SECTION -->
		<section class="large-testimonials light-bg">
			<div class="v-middle">
				<div class="row reveal-from-bottom">
					<div class="medium-6 columns">
						<p>Hello friend.</p>
						<div class="author-block">
							<h5>Name</h5>
							<p>Founder, Name</p>
						</div>
					</div>
					<div class="medium-6 columns"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dr-t-cutout.png" /> </div>
				</div>
			</div>
		</section>
		<!-- END SECTION -->






		<!-- SECTION -->
		<section id="services" class="sticked-boxes parallax" data-overlay="8" data-jarallax data-speed="0.2">
			<img class="jarallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider2.png" alt="">
			<div class="v-middle">
				<div class="row">
					<div class="large-12 columns text-center mb70 small-mb50">
						<h5 class="topheading reveal-from-bottom">Services</h5>
						<h2 class="reveal-from-bottom">We provide <em>expert</em> assistance.</h2>
						<h4 class="subheader reveal-from-bottom">Below are the services we provide.</h4>
					</div>

					<div data-equalizer data-equalize-on="medium">

						<div class="medium-4 columns reveal-from-bottom mb10 small-mb30">
							<div class="contentbox-style1 bordered" data-equalizer-watch>
								<div class="contentbox-content">
									<h3 style="color: #009444;"> <img class="jarallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/green-icon.png" alt=""> Name</h3>
									<p>Text</p>

									<p><strong>INCLUDES:</strong></p>
									<ul style="color:white;">
										<li>stuff</li>
									</ul>


									<p><a class="button rounded filled reveal-from-bottom text-center pb10 small-pb10" href="#"> Purchase</a></p>
								</div>
							</div>
						</div>

						<div class="medium-4 columns reveal-from-bottom mb10 small-mb30"">
						<div class="contentbox-style1 bordered" data-equalizer-watch>
							<div class="contentbox-content">
								<h3 style="color: #be1e2d;"> <img class="jarallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/red-icon.png" alt=""> Name</h3>
								<p>Text</p>
								<p><strong>INCLUDES:</strong></p>
								<ul style="color:white;">
									<li>Stuff</li>
								</ul>
								<p><a class="button rounded filled reveal-from-bottom text-center pb10 small-pb10" href="#"> Purchase</a></p>
							</div>
						</div>
					</div>

					<div class="medium-4 columns reveal-from-bottom mb10 small-mb30"">
					<div class="contentbox-style1 light-bg boxed" data-equalizer-watch>
						<div class="contentbox-content">
							<h3 style="color: #000;"> <img class="jarallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blk-icon.png" alt=""> Title</h3>
							<p>Text</p>
							<p><strong>INCLUDES:</strong></p>
							<ul style="color:black;">
								<li>Stuff></li>
							</ul>
							<p><a class="button rounded filled reveal-from-bottom text-center pb10 small-pb10" href="#"> Purchase</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="large-12 columns text-center mt50 small-mt20">
				<h4 class="reveal-from-bottom">Need Services We Don’t Provide?</h4>
				<h4 class="subheader reveal-from-bottom">Don’t worry. We can refer you to well-qualified <strong>editors, methodologists, and specialists in your discipline</strong> to assist you with other needs.</h4>
			</div>


	</div>

</div>


</div>
</section>
<!-- END SECTION -->




<!-- SECTION -->
<section id="video" class="light-bg" data-overlay="0">
	<div class="v-middle">
		<div class="row">
			<div class="large-12 columns text-center">
				<h5 class="topheading reveal-from-bottom">Video Overview</h5>
				<h2 class="reveal-from-bottom">One decision can make the difference between ABD and doctor!  <em>Make the decision</em> that gets you where you want to be.</h2>
				<h4 class="subheader reveal-from-bottom">You have complimentary access to an introduction video below that provides an overview.</h4>

				<div class="large-12 columns text-center mb50 small-mb50">
				</div>
				<div class="medium-4 columns reveal-from-bottom">
					<div class="contentbox-style3">
						<p><strong style="color: #be1e2d;">Text</p>

						<p>Text</p>

						<p>Text</p>
					</div>
				</div>
				<div class="medium-4 columns reveal-from-bottom">
					<div class="contentbox-style3">
						<p>Text</p>

						<p>Text</p>

						<p>Text</p>


					</div>
				</div>
				<div class="medium-4 columns reveal-from-bottom">
					<div class="contentbox-style3">

						<p>Text</p>

						<p>Text</p>

						<div class="video-button-modal reveal-from-bottom"><a data-rel="lightcase" href="https://www.youtube.com/embed/YR5ApYxkU-U"><span class="button small filled play"></span> </a> <span>View Complimentary Video</span>
						</div>

						<div class="large-6 columns v-middle">
							<div class="video-placeholder video-box reveal-from-right mt20"><a data-rel="lightcase" href="https://www.youtube.com/embed/YR5ApYxkU-U"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/drt2.png" alt=""> <span class="button filled play"></span> </a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION -->



<!-- SECTION -->
<section id="contact" class="transparent-bg">
	<!-- FORM SECTION -->
	<div class="row">
		<div class="large-8 small-centered columns form-section mt0">
			<div class="large-12 columns text-center mb50 small-mb50">
				<h5 class="topheading reveal-from-bottom">Contact</h5>
			</div>
			<div class="form-block">
				<form role="form" id="contactForm" data-toggle="validator">
					<div class="row">
						<div class="large-12 columns">
							<input type="text" id="name" placeholder="Name*" required>
						</div>
						<div class="large-6 columns">
							<input type="email" id="email" placeholder="Email*" required>
						</div>
						<div class="large-6 columns">
							<input type="text" id="subject" placeholder="Subject">
						</div>
						<div class="large-12 columns">
							<textarea id="message" placeholder="Message*" required></textarea>
						</div>
						<div class="large-12 columns">
							<button type="submit" id="form-submit" class="submit rounded filled">Submit</button>
							<div id="msgSubmit"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END FORM SECTION -->
</section>
<!-- END SECTION -->
</div>
<!-- END INNER CONTAINER -->

<?php get_footer(); ?>
