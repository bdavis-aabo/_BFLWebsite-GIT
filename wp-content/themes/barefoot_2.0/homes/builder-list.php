<?php  
	$_builders = new WP_Query();
	$_builders->query('post_type=home_builders&post_status=publish&order=ASC&orderby=menu_order');


	/*** row variables ***/
	$_maxColumns 	= 4;
	$_column 		= 12/$_maxColumns;
	$_totalItems 	= $_builders->post_count;
	$_remainder 	= $_totalItems % $_maxColumns;
	$_firstRowItem 	= ($_totalItems - $_remainder);
	
	$_i = 0; 
	
	//echo 'total: ' . $_totalItems . '<br />column: ' . $_column . '<br />Remainder: ' . $_remainder . '<br />First Row: ' . $_firstRowItem;
?>

				<section class="builder-list">
					<div class="row">
						<div class="col-md-12">
						<?php while($_builders->have_posts()): $_builders->the_post(); ?>	
				
						<?php if($_i % $_maxColumns == 0): ?>
							<div class="row">
						<?php endif; ?>
					
						<?php if ($_i >= $_firstRowItem): ?>
							<?php if($_remainder == 1): ?>
								<div class="col-md-<?php echo $_column ?> col-md-offset-<?php echo $_column ?>">
						
							<?php elseif($_remainder == 2): ?>
								<?php if($_i % $_remainder == 1): ?>
								<div class="col-md-<?php echo $_column ?>">
								<?php else: ?> 
								<div class="col-md-<?php echo $_remainder ?>"></div>
								<div class="col-md-<?php echo $_column ?>">
								<?php endif; ?>
							<?php else: ?>
								<div class="col-md-<?php echo $_column ?>">
							<?php endif; ?>
						<?php else: ?>
								<div class="col-md-<?php echo $_column ?>">
						<?php endif; ?>
									<?php // begin content ?>
									<article class="builder">
										<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
										<?php echo get_field('homebuilder_introduction') ?>
										<a href="<?php echo get_field('homebuilder_page') ?>" title="<?php the_title() ?>">
											<i class="fa fa-chevron-right blue-txt"></i> More Information
										</a>
									</article>
									<?php // end content ?>
								</div>
						<?php $_i++; ?>
					
						<?php if($_i % $_maxColumns == 0): ?>
							</div>
						<?php endif; ?>	
					<?php endwhile; wp_reset_query(); ?>
				
					<?php if($_i % $_maxColumns != 0): ?>
							</div>
					<?php endif; ?>	
						</div> <?php //end col-md-12 ?>
					</div>
					
				</section>
