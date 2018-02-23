<?php /* Template Name: Pathfinder Page */ ?>

<?php get_header() ?>

		<section class="page-hero">
			<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive alignhero')); ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hero-caption builder-caption">
							<?php if(!is_page('realtor-pre-grand-opening-rsvp')): ?>
								<h2 class="hero-title"><?php the_title() ?></h2>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<section class="page-contents">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="homebuilder-contents pathfinder-contents">
							<?php the_content() ?>
						</div>	
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; endif; ?>
		
		<section class="homebuilder-section ">
			<div class="container">
				<div class="row">
					<div class="pathfinder-form col-md-8 col-sm-7">
						<?php if(is_page('realtor-pre-grand-opening-rsvp')): ?>
							<?php echo do_shortcode('[contact-form-7 id="127" title="Realtor Email Form"]') ?>
						<?php elseif(is_page('become-a-pathfinder')): ?>
							<?php echo do_shortcode('[contact-form-7 id="112" title="Become a Pathfinder"]') ?>
						<?php endif; ?>
					</div>
					<div class="pathfinder-sidebar col-md-4 col-sm-5">
						<?php if(is_page('realtor-pre-grand-opening-rsvp')): ?>
							<div class="pathfinder-event">
								<?php echo get_field('landing_sidebar') ?>
								<div class="message-group">
									<a href="<?php bloginfo('template_directory') ?>/assets/images/bfl-communitymap.pdf" title="Barefoot Lakes - Download Map" target="_blank" class="btn blue-btn">Download Map</a>
								</div>
							</div>
						<?php elseif(is_page('become-a-pathfinder')): ?>
							<img src="<?php bloginfo('template_directory') ?>/assets/images/barefootlakes-map.jpg" alt="<?php the_title() ?>" class="img-responsive aligncenter" />
							<div class="message-group">
								<p>From I-25 take Exit #240 (CO-119) east then make an immediate left on I-25 Frontage Road East (County Road 9 ½).
									Travel north one mile to Barefoot Lakes Parkway and turn right.
									Go to Eagle River Road, turn left and look for model homes on your left.</p>
								<a href="https://www.google.com/maps/dir//12684-12692+E+I25+Frontage+Rd,+Longmont,+CO+80504/@40.1777018,-104.9749971,2514m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x876c06f94afd8ead:0x468c00cc314045e5!2m2!1d-104.9780089!2d40.1784435" title="Barefoot Lakes - Get Directions" target="_blank" class="btn blue-btn">Get Directions</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		
<?php wp_reset_query() ?>

<?php get_footer() ?>