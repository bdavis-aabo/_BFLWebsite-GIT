<?php /* Template Name: Homepage */ ?>

<?php get_header() ?>

		<?php 
			get_template_part('homes/home-community');
			get_template_part('homes/home-homes');
			//get_template_part('homes/home-join');
			get_template_part('homes/home-social'); 
		?>
		
<?php get_footer() ?>