<?php /* Template Name: Page - Thank You */ ?>

<?php get_header() ?>

		<section class="homes-hero">
			<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hero-caption">
							<h2 class="hero-title">
								<?php the_title() ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="page-contents explore-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<?php if(have_posts()): while(have_posts()): the_post() ?>
						<span class="page-content"><?php the_content() ?></span>
					<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</section>

<?php get_footer() ?>