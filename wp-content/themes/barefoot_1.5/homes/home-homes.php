 <?php
	$_homesPage = new WP_Query();
	$_homesPage->query('post_type=page&post_status=publish&pagename=homes-page');
?>		

		<?php while($_homesPage->have_posts()): $_homesPage->the_post() ?>
		<section class="homes-section" id="homes">
			<div class="homes-heroimage">
				<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive alignhero')); ?>
			</div>
			
			<div class="homes-message">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="homes-message-content">
								<hgroup><h1><?php the_title() ?></h1></hgroup>
								<?php the_content() ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="homes-builderlogos">
								<img src="<?php bloginfo('template_directory') ?>/assets/images/builder-logos.jpg" alt="" class="img-responsive aligncenter" />
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<?php endwhile; wp_reset_query() ?>
		
		