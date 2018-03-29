<?php 
	/* Template Name: Builder Page */ 
	$_builders = new WP_Query();
	$_builders->query('post_type=home_builders&pagename=' . $post->post_name . '&post_status=publish&order=ASC&orderby=menu_order');
?>

<?php get_header() ?>

		<?php if($_builders->have_posts()): while($_builders->have_posts()): $_builders->the_post(); $_heroSlides = get_field('homebuilder_slides'); ?>
		<section class="page-hero">
			<?php if($_heroSlides): ?>
				<div id="builder-carousel" class="carousel slide carousel-fade" data-interval="9500" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
					<?php $_i = 0; foreach($_heroSlides as $_slide): ?>
				    	<div class="item <?php if($_i == 0): echo 'active'; endif; ?>">
							<img src="<?php echo $_slide['url'] ?>" alt="" width="100%" height="100%">
				    	</div>
					<?php $_i++; endforeach; ?>
					</div>
				</div>
				<hr class="transition-timer-carousel-progress-bar" />
			<?php else: ?>
				<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
			<?php endif; ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="hero-caption builder-caption">
							<h2 class="hero-title">
								<?php 
								if(is_page('brookfield-residential-avenue-portfolio') || is_page('brookfield-residential-harvest-portfolio')): 
									echo 'Brookfield Residential';
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
		<?php endwhile; endif; ?>
		
		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<section class="page-contents">
			<div class="container">
				<div class="row">
					<div class="col-md-11">
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
					<?php get_template_part('builder/builder-models') ?>
					
					<div class="col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 col-xs-offset-0">
						<div class="homebuilder-sidebar">
							<?php 
								$_logo = get_field('homebuilder_logo'); 
								$_size = 'large'; 
								//$_med  = $_logo['sizes'][$_size];
								$w = $_logo['sizes'][$_size . '-width'];
								$h = $_logo['sizes'][$_size . '-height'];	
							?>
							
							<img src="<?php echo $_logo['url'] ?>" alt="<?php the_title() ?>" width="<?php echo $w ?>" class="aligncenter img-responsive" />
							<p class="blue-txt">Visit the <?php if($_builder != ''): echo $_builder; else: the_title(); endif; ?> sales office for more information and tour the models.</p>
							<p class="address"><?php echo get_field('homebuilder_address') ?></p>
							<span class="hours"><span class="blue-txt">SALES OFFICE HOURS</span><br /><?php echo get_field('homebuilder_hours') ?></span>
							<p class="pricing">
								<?php if($_portfolio != ''): echo $_portfolio; endif; ?><br />
								<?php echo get_field('homebuilder_pricing') ?></p>
							
							<?php if(get_field('homebuilder_link')): ?>
								<a href="<?php echo get_field('homebuilder_link') ?>" class="builder-btn" title="<?php the_title() ?>" target="_blank" onclick="ga('send','event', 'Builder Page', 'click', '<?php the_title() ?>');">
									<i class="fa fa-chevron-right"></i> Go To <?php if($_portfolio != ''): echo $_portfolio; else: the_title(); endif; ?>
								</a>
							<?php endif; ?>
<!-- 								<button class="builder-btn"><i class="fa fa-chevron-right"></i> request information</button> -->
						</div>
					</div>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</section>
		
		<section class="homebuilder-qmis">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="quickmove-intro">
							<h1>Quick Move-In Homes</h1>
							<p><?php the_title() ?> has a number of homes that are ready and waiting for you to move in. All you need to do is choose which is the perfect fit for you, your family and your lifestyle.</p>
							<p class="disclaimer">*Pricing, product specfications, amenities and landscaping are subject to change without prior notice.</p>
						</div>
					</div>
				</div>
				
				<?php get_template_part('builder/builder-qmis') ?>
			</div>
		</section>
		
<?php wp_reset_query() ?>

<?php get_footer() ?>