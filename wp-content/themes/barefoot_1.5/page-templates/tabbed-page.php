<?php /* Template Name: Tabbed Page */ ?>

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
		
		
		<section class="page-contents tabbed-contents">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="landing-left">
							<?php if(have_posts()): while(have_posts()): the_post() ?>
								<?php the_content() ?>
							<?php endwhile; endif; ?>
						</div>	
					</div>
				</div>
					
				<div class="row">
					<div class="col-md-8">
						<div class="tabbed-left"><?php get_template_part('community_tabs') ?></div>
					</div>
					<div class="col-md-4"></div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class=""><?php echo do_shortcode('[contact-form-7 id="50" title="Builder Form"]') ?></div>
					</div>
				</div>
			</div>
		</section>
		
<?php wp_reset_query() ?>

<?php get_footer() ?>