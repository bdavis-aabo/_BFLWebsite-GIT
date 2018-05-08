<?php /* Template Name: Run Barefoot - Page */ ?>

<?php get_header() ?>

	<section class="page-hero">
		<?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive')); ?>
	</section>
	
	<?php /*
	<section class="page-tabs">
		<ul class="nav nav-pills nav-tabs" role="tablist">
			<?php $_i = 0; if($_tabs->have_posts()): while($_tabs->have_posts()): $_tabs->the_post() ?>
			
			<li role="presentation" <?php if($_i == 0): echo 'class="active"'; endif; ?>>
				<a href="#<?php echo $post->post_name ?>" aria-controls="<?php echo $post->post_name ?>" role="tab" data-toggle="tab"><?php the_title() ?></a>
			</li>
			<?php $_i++; endwhile; endif; ?>
		</ul>
	</section>
	*/ ?>
	
	<section class="page-contents runbarefoot-contents">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="runbarefoot-left">
					<?php if(have_posts()): while(have_posts()): the_post() ?>
						<?php the_content() ?>	
					<?php endwhile; endif; ?>
					</div>
				</div>
				<?php //get_template_part('run-barefoot/sidebar') ?>
			</div>
		</div>
	</section>

<?php get_footer() ?>