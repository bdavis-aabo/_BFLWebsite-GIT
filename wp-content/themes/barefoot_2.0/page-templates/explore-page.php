<?php 
	/* Template Name: Explore Page */ 

	global $post;
	$post_class = get_post($post->ID);
	
	$_childPages = new WP_Query();
	$_args = array(
		'post_parent' 	=> 	$post->ID,
		'post_type'		=>	'page',
		'post_status'	=>	'publish',
		'order'			=>	'ASC',
		'orderby'		=>	'menu_order'
	);
	$_childPages->query($_args);
	$_tab = 0;
	$_p = 0;
	
	$_children = get_pages(array('child_of' => $post->ID)); 
?>


<?php get_header() ?>
		
		<section class="homes-hero">
			<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive alignhero')); ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hero-caption builder-caption">
							<?php if(!is_page('realtor-pre-grand-opening-rsvp')): ?>
								<h2 class="hero-title"><?php the_title() ?></h2>
							<?php endif; ?>
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
							<?php the_content() ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</section>
		
		<section class="explore-sections">
			<div class="container">
				<div class="row">
				<?php if(count($_children) > 0): ?>
					<?php if($_childPages->have_posts()): while($_childPages->have_posts()): $_childPages->the_post() ?>
					
						<?php if($post->post_name != 'the-field-guide'): ?>
						<div class="col-md-4">
							<article class="explore-section">
							<?php if($post->post_name == 'peninsula-park'): ?>
								<button type="button" data-toggle="modal" data-target="#peninsula-video-modal">
									<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
								</button>
								<div class="modal fade" id="peninsula-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
								    	<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
												<h4 class="modal-title" id="myModalLabel">Peninsula Park</h4>
								    		</div>
											<div class="modal-body">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe width="720" height="405" src="https://www.youtube.com/embed/TzSkHC6G0fo?rel=0" frameborder="0" gesture="media" allowfullscreen class="embed-responsive-item"></iframe>
												</div>
								    		</div>
										</div>
									</div>
								</div>
							<?php else: 
								echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); 
							endif; ?>
							
							<h2 class="explore-title"><?php the_title() ?></h2>
							<?php the_content() ?>
							
							<?php if(get_field('explore_image') != ''): $_exploreImage = get_field('explore_image'); ?>
							<!-- Button trigger modal -->
							<button type="button" class="btn normal-btn" data-toggle="modal" data-target="#<?php echo $post->post_name . '-modal'; ?>">
								<i class="fa fa-chevron-right"></i> View <?php the_title() ?> Map
							</button>
							
							<!-- Modal -->
							<div class="modal fade" id="<?php echo $post->post_name . '-modal'; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
							    	<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
											<h4 class="modal-title" id="myModalLabel"><?php the_title() ?></h4>
							    		</div>
										<div class="modal-body">
											<img src="<?php echo $_exploreImage['url'] ?>" alt="<?php the_title() ?>" class="img-responsive aligncenter" />
							    		</div>
									</div>
								</div>
							</div>
							<?php endif; ?>
						</article>
						</div>
						<?php else: ?>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<article class="explore-field-guide">
									<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
									<h2 class="explore-title"><?php the_title() ?></h2>
									
									<?php the_content() ?>
									
									<button type="button" class="btn normal-btn" data-toggle="modal" data-target="#field-guide">
										<i class="fa fa-chevron-right"></i> View Community Field Guide
									</button>		
								</article>
								
								<!-- Modal -->
								<div class="modal fade" id="field-guide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
								    	<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
												<h4 class="modal-title" id="myModalLabel">Barefoot Lakes - Field Guide</h4>
								    		</div>
											<div class="modal-body">
												<div data-configid="15757478/59483615" style="width:100%; height:650px;" class="issuuembed"></div>
												<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
								    		</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<?php endif; ?>
					
					
					
					
					
					
					<?php endwhile; endif; wp_reset_query(); ?>
				
				<?php endif; ?>	
				</div>
				
				
			</div>
			
		</section>

<?php get_footer() ?>