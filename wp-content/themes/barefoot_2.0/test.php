<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bootstrap 3 Carousel</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
 <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<body>
<div id="myCarousel" class="carousel slide myCarousel" data-interval="false" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> 
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item">
      <!--put img inside itens like this-->
      <!--<img src="" alt="...">-->
        <div class="container">
    <div class="carousel-caption">
          <h3>First slide label</h3>
          <p>It's Responsive and Pauses on hover</p>
        </div>
        </div>
    </div>
    <div class="item">
        <div class="container">
        <div class="carousel-caption">
          <h3>Second slide label</h3>
          <p>If you use controls, progress bar will change too.</p>
        </div>
        </div>
    </div>
    <div class="item">
        <div class="container">
        <div class="carousel-caption">
          <h3>Third slide label</h3>
          <p>Bug fixed</p>
        </div>
        </div>
    </div>
  </div>
  <hr class="transition-timer-carousel-progress-bar" />
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <center>
      <h2>Bootstrap 3 Carousel With Progress Bar</h2>
      <h3>A pen by Eduardo Gomes (elgsantos)</h3>
      <h4>Code also on Github: https://gist.github.com/elgsantos/5ff76405f52d33715ffa</h4>
    </center>
  </body>
</html>

<div id="builder-carousel" class="carousel slide" data-interval="false" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
	<?php $_i = 0; foreach($_heroSlides as $_slide): ?>
    	<div class="item <?php if($_i == 0): echo 'active'; endif; ?>">
			<img src="<?php echo $_slide['url'] ?>" alt="" width="100%" height="100%">
    	</div>
	<?php $_i++; endforeach; ?>
	</div>
</div>
<hr class="transition-timer-carousel-progress-bar" />