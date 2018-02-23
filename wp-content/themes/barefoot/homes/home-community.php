<?php
	$_communityStory = new WP_Query();
	$_communityStory->query('post_type=page&post_status=publish&pagename=developer-story');
?>

		<section class="community-section">
			
			<?php if(have_posts()): while(have_posts()): the_post() ?>
			<div class="community-heroimage">
				<a href="/holiday-toy-drive" title="Barefoot Lakes - Pathfinders Celebration"><?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive alignhero')); ?></a>
				
				<?php /* if(is_front_page()): ?>
					<div class="grandopening-msg">
						<span>Richmond American Homes Tour and<br /> Giveaway Event, June 17</span>
						<a href="/the-homes" class="btn blue-btn">more information</a>
					</div>
				<?php endif; */ ?>
			</div>
			
			<div class="community-message" id="community">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/community-bg.png" class="community-bg community-big" />
				<img src="<?php bloginfo('template_directory') ?>/assets/images/community-message-bgmed.png" class="community-bg community-med" />
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="message-contents">
								<hgroup><h1><?php the_title() ?></h1></hgroup>
								<?php the_content() ?>
							</div>
						</div>
						<div class="col-lg-4">&nbsp;</div>
					</div>
				</div>
				<div class="community-image">
					<img src="<?php bloginfo('template_directory') ?>/assets/images/community-image.jpg" alt="" class="img-responsive alignhero" />
				</div>
			</div>
			<?php endwhile; endif; ?>
			
			<div class="community-developer">
				<div class="container">
					<div class="row">
						<?php while($_communityStory->have_posts()): $_communityStory->the_post(); ?>
						<div class="col-md-8">
							<div class="community-story">
								<?php the_content() ?>								
							</div>
						</div>
						<div class="col-md-4">
							<div class="community-logos">
								<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
		
<?php wp_reset_query() ?>