<?php /* Template Name: Landing Page */ ?>

<?php get_header() ?>

		<section class="page-hero">
			<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive alignhero')); ?>
		</section>
		
		<?php if(have_posts()): while(have_posts()): the_post() ?>
		<section class="page-contents landing-contents">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="landing-left">
							<?php the_content() ?>
						</div>	
					</div>
					
					<div class="col-md-4">
						<div class="landing-right">
							<?php if(get_field('landing_sidebar_image') != ''): $_sidebarImage = get_field('landing_sidebar_image'); ?>
								<a class="" data-toggle="modal" data-target="#location-map">
									<img src="<?php echo $_sidebarImage['url'] ?>" class="aligncenter img-responsive" />
								</a>
								<p>Click to expand map</p>
								
								<div class="modal fade course-map" id="location-map" tabindex="-1" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
												<h4 class="modal-title">Toy Drive Drop Off Locations</h4>
											</div>
											<div class="modal-body">
												<img src="<?php echo $_sidebarImage['url'] ?>" class="aligncenter img-responsive"  />		
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; endif; ?>
		
<?php wp_reset_query() ?>

<?php get_footer() ?>