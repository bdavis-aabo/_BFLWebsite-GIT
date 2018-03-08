<?php
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

<?php if(count($_children) > 0): ?>
	<section class="community-tabs">
		<div class="container">
			<div class="row">
				<?php if($_childPages->have_posts()): while($_childPages->have_posts()): $_childPages->the_post() ?>	
				<div class="col-md-4">
				
					<div class="community-tab">
						<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'aligncenter img-responsive')); ?>
						<h2><?php the_title() ?></h2>
						<?php the_content() ?>
					</div>
			
				</div>
				<?php endwhile; endif; wp_reset_query(); ?>	
			</div>
		</div>
	</section>
		
		
		
		
		
		
		
	
		<ul class="community-tabs nav nav-pills" role="tablist">
			<?php if($_childPages->have_posts()): while($_childPages->have_posts()): $_childPages->the_post() ?>
			<li role="presentation" class="tab <?php if($_tab == 0): echo 'active'; endif; ?>"><?php //echo $_tab ?>
				<a href="#<?php echo 'panel'.$_tab ?>" id="tab-<?php echo $_tab ?>" aria-controls="<?php echo 'panel'.$_tab ?>" role="tab" data-toggle="tab">
					<?php the_title() ?>
				</a>
			</li>
			<?php $_tab++; endwhile; endif; ?>
		</ul>
		
		<div class="tab-content community-tab-content">
			<?php if($_childPages->have_posts()): while($_childPages->have_posts()): $_childPages->the_post() ?>
			<div class="tab-pane fade <?php if($_p == 0): echo 'active in'; endif; ?>" role="tabpanel" id="<?php echo 'panel'.$_p ?>">
				<?php the_content() ?>
				
				<?php if($post->post_name == 'peninsula-park'): ?>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="720" height="405" src="https://www.youtube.com/embed/TzSkHC6G0fo?rel=0" frameborder="0" gesture="media" allowfullscreen class="embed-responsive-item"></iframe>
				</div>
				<?php elseif($post->post_name == 'waterside-neighborhood'): ?>
				<a class="modal-link" data-toggle="modal" data-target="#community-map">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/community-map.jpg" alt="<?php bloginfo('name') ?> - <?php the_title() ?>" class="aligncenter img-responsive" />
				</a>
				<div class="modal fade course-map" id="community-map" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
								<h4 class="modal-title"><?php bloginfo('name') ?> - <?php the_title() ?></h4>
							</div>
							<div class="modal-body">
								<img src="<?php bloginfo('template_directory') ?>/assets/images/community-map.jpg" alt="<?php bloginfo('name') ?> - <?php the_title() ?>" class="aligncenter img-responsive" />
								<a href="/wp-content/uploads/2017/11/BarefootLakes_Community-Map-and-Model-Directory.pdf" class="btn blue-btn">Download Barefoot Lakes Community Map</a>	
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
			</div>
			<?php $_p++; endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
<?php endif; ?>

	<div class="community-tab-message" id="contact-form">
		<h3>Discover your new home in Barefoot Lakes</h3>
		<a href="/the-homes" class="btn blue-btn">Find your Home</a>
	</div>