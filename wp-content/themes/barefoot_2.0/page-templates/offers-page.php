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
	
	<section class="offer-section page-contents">
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
			<?php while($_offers->have_posts()): $_offers->the_post(); $_builderLabel = get_field('promo_builder'); ?>
			<div class="row offer-row">
				<div class="col-md-7">
					<div class="offer-graphic <?php echo get_field('promo_alignment') . ' ' . get_field('promo_theme') ?>">
						<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
						<h1 class="offer-title"><?php the_title() ?></h1>
					</div>
				</div>
				<div class="col-md-5">
					<div class="offer-details">
						<h2 class="offer-title"><?php the_title() ?></h2>
						<?php echo get_field('promo_summary') ?>
						
						<?php if($_builderLabel['value'] != 'barefoot-lakes'): ?>
							<a href="" class="builder-btn btn" title="<?php ?>"><i class="fa fa-chevron-right"></i> Visit <?php echo $_builderLabel['label'] ?></a>
						<?php endif; ?>
					</div>
				</div>
			
			</div>
			<?php endwhile; ?>	
		</div>
	</section>
	
<?php get_footer() ?>


