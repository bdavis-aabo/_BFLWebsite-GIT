			<div class="row">
				<div class="builder-homes">
				<?php 
					$_args = array(
						'post_type' => 	'quickmoves',
						'builder'	=>	$post->post_name,
						'orderby'	=>	'date',
						'order'		=>	'DESC',
						'posts_per_page' => 4,
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
							
							<p>Available <?php echo get_field('qmi_available') ?></p>
							
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
			</div>