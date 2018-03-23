jQuery(document).ready(function(){
	$('.sliding-btn').delay(5000).animate({
		right: '0'}, 1000);
		
	$('#promo-carousel').carousel({
		interval: 9500,
		pause: 'hover'
	});
});