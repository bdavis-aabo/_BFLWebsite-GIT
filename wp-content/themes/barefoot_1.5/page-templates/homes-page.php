<?php /* Template Name: The Homes Page */ ?>
<?php get_header() ?>

		<section class="page-hero">
			<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hero-caption">
							<h2 class="hero-title">
								<?php if(is_page('the-homes')): echo 'The Homes'; elseif(is_page('quick-move-in-homes')): echo 'Quick Move-In Homes'; endif; ?>
							</h2>
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
						<?php if(!is_page('quick-move-in-homes')): ?><h2 class="page-subtitle">New Homes from Colorado's Best Builders</h2><?php endif; ?>
					</div>
				</div>
				
				<?php if(is_page('the-homes')): get_template_part('homes/builder-list'); elseif(is_page('quick-move-in-homes')): get_template_part('homes/qmi-homes'); endif; ?>
				
				<div class="row"><?php echo do_shortcode('[contact-form-7 id="50" title="Builder Form"]') ?></div>
			</div>
		</section>
<?php get_footer() ?>