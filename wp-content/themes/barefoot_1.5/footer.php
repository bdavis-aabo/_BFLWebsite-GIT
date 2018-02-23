<?php
	$_privacy = new WP_Query();
	$_privacy->query('post_type=page&post_status=publish&pagename=privacy-policy');
	
	$_terms = new WP_Query();
	$_terms->query('post_type=page&post_status=publish&pagename=terms-of-use');
?>	
	

		<footer class="footer">
			<?php if(is_page('richmond-american-homes')): ?>
				<img src="<?php bloginfo('template_directory') ?>/assets/images/richmond-footer.jpg" alt="" class="footer-images img-responsive" />
			<?php elseif(is_page('brookfield-residential')): ?>
				<img src="<?php bloginfo('template_directory') ?>/assets/images/brookfield-footer.jpg" alt="" class="footer-images img-responsive" />
			<?php elseif(is_page('calatlantic-homes')): ?>
				<img src="<?php bloginfo('template_directory') ?>/assets/images/calatlantic-footer.jpg" alt="" class="footer-images img-responsive" />
			<?php else: ?>
				<img src="<?php bloginfo('template_directory') ?>/assets/images/footer-images.jpg" alt="" class="footer-images img-responsive" />
			<?php endif; ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-8 col-sm-8">
						<div class="footer-contents">
							<a href="" class="footer-logo"><img src="<?php bloginfo('template_directory') ?>/assets/images/footer-logo.jpg" alt="" class="img-responsive" /></a>
							<p><strong>Situated perfectly between Denver and Loveland just east of I-25 exit #240 next to two charming lakes and the St. Vrain river.</strong></p>
							<p class="copyright">Pricing product specifications, amenities and landscaping are subject to change without prior notice.<br />
								&copy;<?php echo date('Y') ?> Brookfield Residential. <?php /* <a class="modal-btn" data-toggle="modal" data-target="#privacy-modal">Privacy Policy</a> | <a class="modal-btn" data-toggle="modal" data-target="#terms-modal">Terms of Use</a> */ ?>
								<a href="http://www.brookfieldresidentialco.com/privacy-policy" class="modal-btn" target="_blank" title="<?php bloginfo('name') ?> - Privacy Policy">Privacy Policy</a> | <a href="http://www.brookfieldresidentialco.com/terms-use" class="modal-btn" target="_blank" title="<?php bloginfo('name') ?> - Privacy Policy">Terms of Use</a>
							</p>
					</div>
				</div>
			</div>
		</footer>
		
		<div class="modal fade" role="dialog" tabindex="-1" id="privacy-modal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<?php while($_privacy->have_posts()): $_privacy->the_post() ?>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
						<h4 class="modal-title"><?php the_title() ?></h4>
					</div>
					<div class="modal-body"><?php the_content() ?></div>
				<?php endwhile; wp_reset_query() ?>	
					<div class="modal-footer"><span class="close" data-dismiss="modal">Close</span></div>
				</div>
			</div>
		</div>
		<div class="modal fade" role="dialog" tabindex="-1" id="terms-modal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<?php while($_terms->have_posts()): $_terms->the_post() ?>
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
						<h4 class="modal-title"><?php the_title() ?></h4>
					</div>
					<div class="modal-body"><?php the_content() ?></div>
				<?php endwhile; wp_reset_query() ?>
					<div class="modal-footer"><span class="close" data-dismiss="modal">Close</span></div>
				</div>
			</div>	
		</div>
		
		
		
		<a href="#page-top" class="scrollToTop"><span class="fa fa-chevron-up"></span></a>
		
		<?php wp_footer() ?>
   	</body>
</html>
