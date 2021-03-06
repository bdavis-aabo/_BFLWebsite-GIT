<?php 
	$_terms = get_terms('builder','orderby=slug&hide_empty=0');
	$_homeBuilders = new WP_Query(array(
		'orderby'	=>	'menu_order',
		'order'		=>	'ASC',
		'post_type'	=>	'home_builders',
		'posts_per_page' => -1,
	));
?>
			<div class="row">
				<div class="builders">
					<div class="quickmove-table">
					<?php while($_homeBuilders->have_posts()): $_homeBuilders->the_post() ?>
						<div class="builder-header">
							<div class="col-md-3 col-xs-12 builder-blocks">
								<div class="builder-logo">
									<?php $_logo = get_field('homebuilder_logo') ?>
									<img src="<?php echo $_logo['url'] ?>" alt="<?php the_title() ?>" class="aligncenter img-responsive" />
								</div>
							</div>
							<div class="col-md-9 col-xs-12 builder-blocks">
								<div class="builder-description">
									<h2 class="builder-name"><?php the_title() ?></h2>
									<span class="address"><?php echo get_field('homebuilder_address') ?></span>
									<span class="hours">
										<?php echo 'Sales Office is Open Daily: ' . str_replace('<br>', ' | ',get_field('homebuilder_hours')) ?>
									</span><br />
									<span class="phone"><?php echo get_field('homebuilder_phone') ?></span>
								</div>
							</div>
						</div>
						
						<div class="builder-homes clearfix">
						<?php 
							$_args = array(
								'post_type' => 	'quickmoves',
								'builder'	=>	$post->post_name,
								'orderby'	=>	'date',
								'order'		=>	'DESC',
								'posts_per_page' => 8,
								'hide_empty' =>	1
							);
							$_quickMoves = new WP_Query($_args);
							if($_quickMoves->have_posts()): while($_quickMoves->have_posts()): $_quickMoves->the_post();
							$_homeImage = get_field('qmi_image');
						?>
							<div class="col-md-3 col-sm-6 ">
								<div class="builder-home">
									<img src="<?php echo $_homeImage['url'] ?>" class="img-responsive aligncenter" />
									<strong><?php echo get_field('qmi_floorplan') ?></strong><br />
									<span class="address-price"><?php echo get_field('qmi_address') ?> | <strong><?php echo '$' . get_field('qmi_price') ?></strong></span>
									
									<p><?php echo get_field('qmi_available') ?></p>
									
									<p class="details"><?php echo get_field('qmi_square_footage') . ' | ' . get_field('qmi_bedrooms') . ' beds | ' . get_field('qmi_bathrooms') . ' bath<br/>' .
											get_field('qmi_garage') ?></p>
									
									<a href="<?php echo get_field('qmi_link') ?>" class="builder-btn" target="_blank"><i class="fa fa-chevron-right"></i> More Information</a>
								</div>
							</div> 
						<?php endwhile; ?> 
						<?php else: ?>
							<div class="col-md-12">
								<div class="builder-nohome">
									<h2>There are no quick move-in homes currently available from this builder.<br/>Please call the sales office for more information.</h2>
								</div>
							</div>
						<?php endif; ?>
						</div>
					<?php endwhile; ?>
					</div>
				</div>	
			</div>	
				
				<?php /*
					
