<?php /* Template Name: The Homes Page */ ?>
<?php get_header() ?>

		<section class="page-hero">
			<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hero-caption">
							<h2 class="hero-title">The Homes</h2>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="page-contents">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<?php if(have_posts()): while(have_posts()): the_post() ?>
						<h1 class="page-title"><?php the_title() ?></h1>
						<span class="page-content"><?php the_content() ?></span>
					<?php endwhile; endif; ?>
						<h2 class="page-subtitle">New Homes from Colorado's Best Builders</h2>
					</div>
				</div>
				
				<?php get_template_part('homes/builder-list') ?>
				
				<div class="row"><?php echo do_shortcode('[contact-form-7 id="50" title="Builder Form"]') ?></div>
			</div>
		</section>
<?php get_footer() ?>