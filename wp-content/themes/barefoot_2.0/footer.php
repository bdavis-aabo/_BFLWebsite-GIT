
		<section class="footer-quicklinks">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"><a href=""><i class="fa fa-home"></i> Find Your Home</a></div>
					<div class="col-md-3"><a href=""><i class="fa fa-tags"></i> Special Offers</a></div>
					<div class="col-md-3"><a href=""><i class="fa fa-compass"></i> Directions</a></div>
					<div class="col-md-3"><a href=""><i class="fa fa-calendar"></i> Upcoming Events</a></div>
				</div>
			</div>
		</section>
		
		<footer class="footer gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-1">
						<strong>EXPLORE</strong>
						<?php wp_nav_menu(array('menu'=>'footer-explore', 'depth'=>1, 'container'=>false, 'menu_class'=>'footer-menu')); ?>
					</div>
					<div class="col-md-3">
						<div class="home-menu">
							<strong>SELECT YOUR HOME</strong>
							<?php wp_nav_menu(array('menu'=>'footer-home', 'depth'=>1, 'container'=>false, 'menu_class'=>'footer-menu')); ?>
						</div>
					</div>
					<div class="col-md-2">
						<strong>THE LOCATION</strong>
						<?php wp_nav_menu(array('menu'=>'footer-location', 'depth'=>1, 'container'=>false, 'menu_class'=>'footer-menu')); ?>
					</div>
						
					<div class="col-md-6">
						<div class="footer-right">
							<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/barefoot-footerlogo.jpg" alt="<?php bloginfo('name') ?>" class="img-responsive alignright" />
							</a>
							<p class="directions">Situated perfectly between Denver and Loveland just east of I-25 exit #240<br />next to two charming lakes and the St. Vrain River</p>
							<p class="copyright">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/ehologo-white.jpg" alt="Equal Housing Opportunity" class="alignright" />
								Pricing product specifications, amenities and landscaping are subject to change without prior notice.<br />
								&copy;<?php echo date('Y') ?> Brookfield Residential. <a href="">Privacy Policy</a> | <a href="">Terms of Use</a>
							</p>
							<ul class="footer-social">
								<li>
									<a href="">
										<span class="fa-stack fa-2x">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								</li>
								<li>
									<a href="">
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

<!-- 		<a href="#page-top" class="scrollToTop"><span class="fa fa-chevron-up"></span></a> -->
		
		<?php wp_footer() ?>
   	</body>
</html>