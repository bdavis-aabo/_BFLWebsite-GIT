<?php
	$_builders = new WP_Query();
	$_builders->query('post_type=home_builders&post_status=publish&posts_per_page=-1&order=asc&orderby=menu_order');
?>

	<section class="homepage-builders">
		<div class="container-fluid">
			<div class="row">
			<?php while($_builders->have_posts()): $_builders->the_post() ?>
				<div class="col-md-3 col-sm-6">
					<article class="builder">
						<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
						<?php echo get_field('homebuilder_introduction') ?>
						
						<a href="<?php echo get_field('homebuilder_page') ?>" title="<?php the_title() ?>">
							<i class="fa fa-chevron-right blue-txt"></i> View Floorplans
						</a>
					</article>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	</section>
	
<?php wp_reset_query() ?>