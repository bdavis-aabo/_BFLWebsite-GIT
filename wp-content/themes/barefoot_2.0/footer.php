
		<section class="footer-quicklinks">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-3"><a href="/the-homes"><i class="fa fa-home"></i> Find Your Home</a></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><a href="/special-offers"><i class="fa fa-tags"></i> Special Offers</a></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><a href="/the-location"><i class="fa fa-compass"></i> Directions</a></div>
					<div class="col-md-3 col-sm-3 col-xs-3"><a href="/events"><i class="fa fa-calendar"></i> Upcoming Events</a></div>
				</div>
			</div>
		</section>

		<footer class="footer gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-7 footer-menus">
						<div class="home-menu">
							<strong>SELECT YOUR HOME</strong>
							<?php wp_nav_menu(array('menu'=>'footer-home', 'depth'=>1, 'container'=>false, 'menu_class'=>'footer-menu')); ?>
						</div>
					</div>

					<div class="col-md-1 col-sm-2 col-xs-2 footer-menus">
						<strong>COMMUNITY</strong>
						<?php wp_nav_menu(array('menu'=>'footer-community', 'depth'=>1, 'container'=>false, 'menu_class'=>'footer-menu')); ?>
					</div>

					<div class="col-md-3"></div>
					<div class="col-md-5 col-sm-12">
						<div class="footer-right">
							<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/barefoot-footerlogo.jpg" alt="<?php bloginfo('name') ?>" class="img-responsive alignright" />
							</a>
							<p class="directions">Find us 15 minutes east of Longmont just north of Erie and 30 minutes from downtown Denver,<br/>with immediate access to I-25 at Exit #240.</p>
							<p class="copyright">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/ehologo-white.jpg" alt="Equal Housing Opportunity" class="alignright" />
								Pricing product specifications, amenities and landscaping are subject to change without prior notice.<br />
								&copy;<?php echo date('Y') ?> Brookfield Residential. <a href="http://www.brookfieldresidentialco.com/privacy-policy" target="_blank">Privacy Policy</a> | <a href="http://www.brookfieldresidentialco.com/terms-use" target="_blank">Terms of Use</a>
							</p>
							<ul class="footer-social">
								<li>
									<a href="https://www.facebook.com/BarefootLakes/" target="_blank">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/barefootlakes/" target="_blank">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<?php
			$_parent = get_post($post->post_parent, OBJECT);
			$_slug = $_parent->post_name;
		?>

		<!-- page popup -->
		<div class="page-mask"></div>
		<div class="page-popup">
			<button id="boxClose"><i class="fa fa-2x fa-times"></i></button>
			<div class="popup-content">
				<div class="runbarefoot-contents">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/barefoot-popheader.jpg" class="img-responsive aligncenter" />
					<h1 class="popup-title">It's everything you've always wanted in a 5k & 10k</h1>
					<h2 class="popup-subtitle">Plus an awesome after party and the grand opening of Peninsula Park.</h2>

					<a href="<?php bloginfo('url') ?>/barefoot-lakes-5k-10k/" class="btn register-btn">Register Today</a>
				</div>
			</div>
		</div>
		<!-- /end page popup -->

		<?php if(!is_page('become-a-pathfinder') && !is_front_page() && !is_page('thank-you') && !is_page('run-barefoot-lakes-5k')): ?>
			<button type="button" class="sliding-btn" data-toggle="modal" data-target="#promoModal" onclick="ga('send','event', 'Request Information', 'click', '<?php the_title() ?> - View Form');">
				<i class="fa fa-envelope"></i> request information
			</button>
			<?php get_template_part('homes/builder-lightbox') ?>
		<?php endif; ?>
<!-- 		<a href="#page-top" class="scrollToTop"><span class="fa fa-chevron-up"></span></a> -->

		<?php wp_footer() ?>
   	</body>
</html>
