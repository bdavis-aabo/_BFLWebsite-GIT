<?php /* Template Name: Page - Homepage */ ?>

<?php get_header() ?>

	<?php while(have_posts()): the_post() ?>		
		<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
	<?php endwhile; ?>
	
	<?php get_template_part('home/home-builders') ?>
	
	<?php get_template_part('home/home-promos') ?>
	
	<!--	
		//Homebuilder Grid
		
		//Homepage Promos	
	-->

<?php get_footer() ?>