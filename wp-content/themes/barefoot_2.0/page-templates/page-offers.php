<?php /* Template Name: Offers Page */ ?>

<?php
	$_offers = new WP_Query();
	$_offers->query('post_type=promos&post_status=publish&posts_per_page=5&order=ASC&orderby=menu_order');		
?>


<?php get_header() ?>

	<?php while(have_posts()): the_post() ?>
	<section class="homes-hero">
		<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hero-caption">
						<h2 class="hero-title"><?php the_title() ?></h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="offer-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_content() ?>
				</div>				
			</div>
		</div>
	</section>
	<?php endwhile; ?>
	
	<section class="offer-grid">
		<div class="container">
			<div class="row">
			<?php while($_offers->have_posts()): $_offers->the_post() ?>
			
				<?php the_title() ?>
			
			<?php endwhile; ?>	
			</div>
		</div>
	</section>
	
<?php get_footer() ?>