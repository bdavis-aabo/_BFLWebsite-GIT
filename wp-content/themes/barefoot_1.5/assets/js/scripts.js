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
	var winW = $(window).width();
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