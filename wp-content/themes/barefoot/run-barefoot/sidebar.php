				<div class="col-md-4">
					<div class="barefoot-right">
						<ul class="sidebar-links">
							<li>
								<a data-toggle="modal" data-target="#directions">
									<img src="<?php bloginfo('template_directory') ?>/assets/images/directions.jpg" alt="directions map" class="img-responsive aligncenter" />
								</a>
							</li>
							
							<li>
								<a href="" data-toggle="modal" data-target="#map">
									<img src="<?php bloginfo('template_directory') ?>/assets/images/runbarefoot-coursemap.jpg" alt="cour map" class="img-responsive aligncenter" />
								</a>
							</li>
<?php /*
							<li><a href="">sponsors</a></li>
							<li><a href="">photo gallery</a></li>
*/ ?>	
						</ul>
						
						<div class="modal fade course-map" id="directions" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
										<h4 class="modal-title">Run Barefoot 5k - Directions</h4>
									</div>
									<div class="modal-body">
										<img src="<?php bloginfo('template_directory') ?>/assets/images/directional-map.jpg" class="aligncenter img-responsive" />		
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal fade course-map" id="map" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
										<h4 class="modal-title">Run Barefoot 5k - Course Map</h4>
									</div>
									<div class="modal-body">
										<img src="<?php bloginfo('template_directory') ?>/assets/images/runbarefoot-map_v3.jpg" class="aligncenter img-responsive" />		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>