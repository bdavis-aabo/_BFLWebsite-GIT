<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php bloginfo('name') ?></title>
		
		<!-- Load CSS via PHP -->
		
		<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/assets/images/favicon.png" type="image/x-icon" />
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php include_once('assets/_inc/wp_bootstrap_analytics.php') ?> <!-- uncomment when pushed -->
		
		<script type="text/javascript" src="//nexus.ensighten.com/choozle/236/Bootstrap.js"></script>
		
		<?php wp_head() ?>
	</head>
	
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    	    <div class="container">
    	        <div class="navbar-header page-scroll">
    	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    	                <span class="sr-only">Toggle navigation</span>
    	                <span class="icon-bar"></span>
    	                <span class="icon-bar"></span>
    	                <span class="icon-bar"></span>
    	            </button>
    	            <a class="navbar-brand" href="<?php bloginfo('url') ?>">
	    	            <img src="<?php bloginfo('template_directory') ?>/assets/images/bfl-headerlogo.png" alt="<?php bloginfo('name') ?>" class="img-responsive" />
	    	        </a>
    	        </div>
		
    	        <!-- Collect the nav links, forms, and other content for toggling -->
    	        <div class="collapse navbar-collapse navbar-ex1-collapse">
					<?php wp_nav_menu(array('menu'=>'main-menu', 'depth'=>3, 'container'=>false, 'menu_class'=>'nav navbar-nav','walker'=>new wp_bootstrap_navwalker())); ?>	    	        
    	        </div>
    	        <!-- /.navbar-collapse -->
    	    </div>
    	    <!-- /.container -->
    	</nav>