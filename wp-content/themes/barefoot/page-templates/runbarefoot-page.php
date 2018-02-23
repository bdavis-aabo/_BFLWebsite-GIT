<?php /* Template Name: Run Barefoot - Page */ ?>

<?php
	$_args = array(
		'post_type'			=>	'page',
		'posts_per_page'	=>	-1,
		'post_parent'		=>	$post->ID,
		'order'				=>	'ASC',
		'orderby'			=>	'ID'	
	);
	$_tabs = new WP_Query($_args);
?>


<?php get_header() ?>

	<section class="page-hero">
		<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
	</section>
	
	<section class="page-tabs">
		<ul class="nav nav-pills nav-tabs" role="tablist">
			<?php $_i = 0; if($_tabs->have_posts()): while($_tabs->have_posts()): $_tabs->the_post() ?>
			
			<li role="presentation" <?php if($_i == 0): echo 'class="active"'; endif; ?>>
				<a href="#<?php echo $post->post_name ?>" aria-controls="<?php echo $post->post_name ?>" role="tab" data-toggle="tab"><?php the_title() ?></a>
			</li>
			<?php $_i++; endwhile; endif; ?>
		</ul>
	</section>
	
	<section class="page-contents">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="barefoot-left">
						<div class="tab-content">
							<?php $_t = 0; if($_tabs->have_posts()): while($_tabs->have_posts()): $_tabs->the_post() ?>
							<div role="tabpanel" id="<?php echo $post->post_name ?>" class="tab-pane fade <?php if($_t == 0): echo 'in active'; endif; ?>">
								<?php the_content() ?>
								
								<?php if($post->post_name == 'the-race'): ?>
									
									
									<div class="modal fade course-map" id="results" tabindex="-1" role="dialog">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
													<h4 class="modal-title">Run Barefoot 5k - Race Results</h4>
												</div>
												<div class="modal-body">
													<iframe width="100%" height="600" frameborder="0" style="border: 1px solid #ddd;" src="https://runsignup.com/Race/Results/?raceId=49775&embed&resultSetId=93055"></iframe>		
												</div>
											</div>
										</div>
									</div>
									
								<?php elseif($post->post_name == 'register'): ?>
									<?php /*
									<button class="btn orange-btn center-btn" data-toggle="modal" data-target="#registration">register</button>
									
									<div class="modal fade course-map" id="registration" tabindex="-1" role="dialog">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
													<h4 class="modal-title">Run Barefoot 5k - Race Registration</h4>
												</div>
												<div class="modal-body">
													<script type="text/javascript" src="https://runsignup.com/js/widget2.js?widgetId=9897"></script>
													<noscript><p>Sorry, you must enable javascript to view this content from <a href="https://runsignup.com/">https://runsignup.com/</a>.</p></noscript>		
												</div>
											</div>
										</div>
									</div>
									*/ ?>
									<p style="text-align: center; padding: 0 30px; font-size: 1.1em;">Online registration has closed, but rest assured there's still a chance to join the race. Friends and family members can register on race day at the packet pick-up location.</p>
									
									
								<?php endif; ?>
							</div>
							<?php $_t++; endwhile; endif; ?>
						</div>
					</div>
				</div>
				<?php get_template_part('run-barefoot/sidebar') ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="race-sponsors">
						<h1 class="sponsor-title">Race Sponsors</h1>
						<img src="<?php bloginfo('template_directory') ?>/assets/images/runbarefoot-sponsors.jpg" alt="Run Barefoot 5k - Race Sponsors" class="aligncenter img-responsive" />
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer('barefoot') ?>