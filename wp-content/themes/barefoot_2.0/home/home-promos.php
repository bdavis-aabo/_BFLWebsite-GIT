<?php
	$_promos = new WP_Query();
	$_promos->query('post_type=promos&post_status=publish&posts_per_page=4&order=asc&orderby=menu_order');
	$_i = 0;
?>
	<section class="homepage-promos">
		<div id="promo-carousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			<?php while($_promos->have_posts()): $_promos->the_post() ?>
		    	<div class="item <?php if($_i == 0): echo 'active'; endif; ?>">
					<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
					<div class="carousel-caption <?php echo get_field('promo_alignment') . ' ' . get_field('promo_theme') ?>">
						<h1 class="promo-title"><?php the_title() ?></h1>
						<?php echo get_field('promo_summary') ?>
						<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
							<i class="fa fa-chevron-right blue-txt"></i> View Offer Details</a>
							
						<div class="promo-btns">
							<a href="<?php bloginfo('url') ?>/the-homes/quick-move-in-homes" title="<?php bloginfo('name') ?> - Quick Move-In Homes" class="btn default-btn">Available Homes</a>
							<button class="btn outline-btn">Request Information</button>
						</div>
					</div>
		    	</div>
		    <?php $_i++; endwhile; ?>
			</div>
		
			<!-- Controls -->
			<div class="carousel-controls">
				<a class="left carousel-control" href="#promo-carousel" role="button" data-slide="prev">
		    		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#promo-carousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		
	</section>
	
<?php wp_reset_query() ?>