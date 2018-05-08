<?php /* Template Name: Run Barefoot - Page */ ?>

<?php get_header() ?>

	<section class="page-hero">
		<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
	</section>
	
	<section class="page-contents runbarefoot-contents">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="runbarefoot-left">
					<?php if(have_posts()): while(have_posts()): the_post() ?>
						<?php the_content() ?>	
					<?php endwhile; endif; ?>
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="runbarefoot-sidebar">
						<h2 class="sidebar-title">Important Details</h2>
						<?php get_template_part('run-barefoot/sidebar') ?>
					
					</div>
				</div>
				
				
			</div>
		</div>
	</section>

<?php get_footer() ?>