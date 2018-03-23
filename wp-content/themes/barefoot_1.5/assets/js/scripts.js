$(document).ready(function(){
	var winW = $(window).width();
	var iconW = $('.scrollToTop').width() + 26;
	var posW	= (winW - iconW) / 2 + 'px';
	
	$('.scrollToTop').css('right', posW);
	
	// Show or Hide Scroll Button
	$(window).scroll(function(){
		//console.log('scroll: ' + $(this).scrollTop());
		
		if($(this).scrollTop() > 100){
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	// Scroll to Top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop: 0}, 800);
		$('.navbar-nav li').removeClass('active');
		
		return false;
	});
	
	// Scrollspy
	$('body').scrollspy({ offset : 60 });
	
	jQuery('input[name="builder[]"]').change(function(){
		var emailTo = [];
		var builder = [];
		var portfolio = [];
		var p;
		
		jQuery.each(jQuery('input[name="builder[]"]:checked'), function(){

			if(jQuery(this).val() === 'Barefoot Lakes - Harvest Portfolio' || jQuery(this).val() === 'Barefoot Lakes - Avenue Portfolio'){
				p = jQuery(this).val().replace('Barefoot Lakes - ', '');
				p = p.replace(' ', '-').toLowerCase();
			}
			
			portfolio.push(p);
			emailTo.push(jQuery(this).attr('data-mailto'));
			builder.push(jQuery(this).val());
		});
		
		jQuery('#mailto').val(emailTo.join(', '));
		jQuery('#builder').val(builder.join(', '));
		jQuery('#portfolio').val(portfolio.join(', '));
	});
	
	jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
		var target = this.href.split('#');
		//jQuery('html,body').animate({scrollTop:0}, 800);
		jQuery('.nav a').filter('a[href="#' + target[1] + '"]').tab('show');
		
	});
	
	var winH = $(window).height();
	//var winW = $(window).width();
	var scrollBtnW = $('.scrollBtn').width();
	var scrollDiff = (winW - scrollBtnW)/2;
	
	$('.scrollBtn').css('left',scrollDiff + 'px');
	if(winH <= 1200){
		$('.scrollBtn').show();
		$(window).scroll(function(){
			if($(this).scrollTop() > 80){
				$('.scrollBtn').fadeOut(250);
			} else {
				$('.scrollBtn').fadeIn(250);
			}
		});
	}
});

$(document).ready(function(){
	var percent = 0,
	interval = 30,//it takes about 6s, interval=20 takes about 4s
	$bar = $('.transition-timer-carousel-progress-bar'),
	$crsl = $('#builder-carousel');
	$('.carousel-indicators li, .carousel-control').click(function (){$bar.css({width:0.5+'%'});});
	/*line above just for showing when controls are clicked the bar goes to 0.5% to make more friendly, 
	if you want when clicked set bar empty, change on width:0.5 to width:0*/
	$crsl.carousel({//initialize
		interval: 7000,
		pause: true
	}).on('slide.bs.carousel', function (){percent = 0;});//This event fires immediately when the bootstrap slide instance method is invoked.
	function progressBarCarousel() {
		$bar.css({width:percent+'%'});
		percent = percent +0.5;
		if (percent>=100) {
			percent=0;
			$crsl.carousel('next');
		}
	}
	var barInterval = setInterval(progressBarCarousel, interval);//set interval to progressBarCarousel function
	if (!(/Mobi/.test(navigator.userAgent))) {//tests if it isn't mobile
		$crsl.hover(function(){
					clearInterval(barInterval);
				},
				function(){
					barInterval = setInterval(progressBarCarousel, interval);
				}
		);
	}
});