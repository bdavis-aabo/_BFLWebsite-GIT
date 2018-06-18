<?php /* Template Name: Events Page */ ?>

<?php
	$_today = date('Y-m-d H:i:s');
	
	
	
	$_args = array(
		'post_type'	=>	'events',
		'post_status'	=>	'publish',
		'posts_per_page'	=>	-1,
		'meta_key'			=>	'event_date',
		'orderby'			=>	'meta_value_num',
		'order'				=>	'ASC',
		'meta_query'		=>	array(
			'key'			=>	'event_start',
			'compare'		=>	'>=',
			'value'			=>	$_today	
		),
	);
	$_events = new WP_Query();
	$_events->query($_args);
?>
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
		
		<section class="page-contents">
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
		
		<section class="page-events">
			<div class="container">
				<div class="row">
				<?php while($_events->have_posts()): $_events->the_post(); 
					$_sDate = get_field('event_start');
					$_sDate = new DateTime($_sDate); 
				?>
					<div class="col-md-6">
						<article class="event">
							<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
						
							<div class="event-details">
								<?php echo $_sDate->format('F j, Y') . ' @ ' . $_sDate->format('g a'); ?>
								
								<h2 class="event-title"><?php the_title() ?></h2>
								<?php echo get_field('event_info') ?>
								
								<?php if(get_field('event_page') != ''): ?>
								<a href="<?php echo get_field('event_page') ?>" title="<?php the_title() ?>" class="event-btn">
									<i class="fa fa-chevron-right"></i> Learn More</a>
								<?php endif; ?>
							</div>
						</article>
					</div>
				<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</section>

<?php get_footer() ?>