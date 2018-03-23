<?php $_models = get_field('homebuilder_models'); ?>
<div class="homebuilder-models col-md-8 col-sm-12">
	<div id="model-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<?php $_s = 0; foreach($_models as $_model): ?>
	    	<div class="item <?php if($_s == 0): echo 'active'; endif; ?>">
				<img src="<?php echo $_model['url'] ?>" alt="" width="100%" height="100%">
				<div class="carousel-caption">
					<strong><?php echo $_model['title'] ?></strong><br />
					<span class="details">
						<?php echo $_model['description'] ?>
					</span>
				</div>
	    	</div>
	    	<?php $_s++; endforeach; ?>
		</div>
		
		<ol class="carousel-indicators visible-sm-block hidden-xs-block visible-md-block visible-lg-block">
		<?php $_i = 0; foreach($_models as $_model): $_size = 'model-thumb'; ?>
			<li data-target="#model-carousel" data-slide-to="<?php echo $_i ?>" <?php if($_i == 0): echo 'class="active"'; endif; ?>>
				<?php echo wp_get_attachment_image($_model['ID'], $_size, '', ['class' => 'img-responsive']); ?>
				<div class="thumb-mask"></div>
			</li>
		<?php $_i++; endforeach; ?>
		</ol>
	</div>
	
	
	
	
	<?php foreach($_models as $_model): ?>
	
<!--
	<div class="col-md-6 homebuilder-model">
		<div class="model">
			<div class="model-image">
				<img src="<?php echo $_model['url'] ?>" class="aligncenter img-responsive" />
				<div class="model-caption"><?php echo $_model['title'] ?></div>
			</div>
			<div class="model-details"><?php echo $_model['description'] ?></div>
		</div>
	</div>
-->
	<?php endforeach; ?>
</div>