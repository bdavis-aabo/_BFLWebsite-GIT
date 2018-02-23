<?php
	$_eventsPage = new WP_Query();
	$_eventsPage->query('post_type=page&post_status=publish&pagename=events-page');
?>	
		<section class="social-section clearfix">
			<div class="follow-container">
				<h3>Follow Us</h3>
				<p><strong>Keep up-to-date on all of our events.</strong><br />
					#barefootlakes<br />
					#astepahead
				</p>
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/BarefootLakes" target="_blank"><i class="fa fa-3x fa-facebook-square"></i></a></li>
					<?php /*
					<li><a href=""><i class="fa fa-3x fa-instagram"></i></a></li>
					<li><a href=""><i class="fa fa-3x fa-twitter-square"></i></a></li>
					<li><a href=""><i class="fa fa-3x fa-youtube-square"></i></a></li>
					*/ ?>
				</ul>
			</div>
			
			<?php while($_eventsPage->have_posts()): $_eventsPage->the_post() ?>
			<div class="events-container">
				<div class="events">
					<hgroup><h1><?php the_title() ?></h1></hgroup>
					<?php the_content() ?>
				</div>
			</div>
			<?php endwhile; wp_reset_query() ?>
		</section>