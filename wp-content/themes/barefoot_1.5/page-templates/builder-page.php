<?php 
	/* Template Name: Builder Page */ 
	$_builders = new WP_Query();
	$_builders->query('post_type=home_builders&pagename=' . $post->post_name . '&post_status=publish&order=ASC&orderby=menu_order');


	if(is_page('brookfield-residential-avenue-portfolio') || is_page('brookfield-residential-harvest-portfolio')): 
		$_portfolio = str_replace('Brookfield Residential - ', '', $post->post_title);
		$_builder = 'Brookfield Residential';
	endif;
?>

<?php get_header() ?>

		<section class="page-hero">
			<?php 
			if(get_the_post_thumbnail($post->ID) != ''): 
				echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive'));
			else: 		
			?>
				<img src="<?php bloginfo('template_directory') ?>/assets/images/builder-hero.jpg" class="img-responsive" />
			<?php endif; ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hero-caption builder-caption">
							<h2 class="hero-title">
								<?php 
								if(is_page('brookfield-residential-avenue-portfolio') || is_page('brookfield-residential-harvest-portfolio')): 
									echo $_builder;
								else:
									the_title();
								endif;
								?>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<section class="page-contents">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="homebuilder-contents">
							<?php the_content() ?>
						</div>	
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; endif; ?>
		
		<section class="homebuilder-section">
			<div class="container">
				<div class="row">
				<?php if($_builders->have_posts()): while($_builders->have_posts()): $_builders->the_post() ?>	
					<?php $_models = get_field('homebuilder_models'); ?>
					<div class="homebuilder-models col-md-8 col-sm-7">
						<?php foreach($_models as $_model): ?>
						<div class="col-md-6 homebuilder-model">
							<?php //var_dump($_model) ?>
							<div class="model">
								<div class="model-image">
									<img src="<?php echo $_model['url'] ?>" class="aligncenter img-responsive" />
									<div class="model-caption"><?php echo $_model['title'] ?></div>
								</div>
								<div class="model-details"><?php echo $_model['description'] ?></div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="homebuilder-sidebar col-md-4 col-sm-5">
						<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive', 'class' => 'aligncenter')); ?>
						<p class="blue-txt">Visit the <?php if($_builder != ''): echo $_builder; else: the_title(); endif; ?> sales office for more information and tour the models.</p>
						<p class="address"><?php echo get_field('homebuilder_address') ?></p>
						<span class="hours"><span class="blue-txt">SALES OFFICE HOURS</span> <?php echo get_field('homebuilder_hours') ?></span>
						<p class="pricing">
							<?php if($_portfolio != ''): echo $_portfolio; endif; ?><br />
							Starting <?php echo get_field('homebuilder_pricing') ?></p>
						
						<?php if(get_field('homebuilder_link')): ?>
							<a href="<?php echo get_field('homebuilder_link') ?>" class="btn blue-btn builder-btn" title="<?php the_title() ?>" target="_blank" onclick="ga('send','event', 'Builder Page', 'click', '<?php the_title() ?>');">
								Visit <?php if($_portfolio != ''): echo $_portfolio; else: the_title(); endif; ?>
							</a>
						<?php endif; ?>
					</div>
				<?php endwhile; endif; ?>
				</div>
				
				<div class="row"><?php echo do_shortcode('[contact-form-7 id="50" title="Builder Form"]') ?></div>

			</div>
		</section>
		
<?php wp_reset_query() ?>

<?php get_footer() ?>