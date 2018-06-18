jQuery(document).ready(function(){
	$('.sliding-btn').delay(5000).animate({
		right: '0'}, 1000);

	$('#promo-carousel').carousel({
		interval: 9500,
		pause: 'hover'
	});

	// page popup box functions
	var winW = $(window).width();
	var winH = $(window).height();
	var boxW = $('.page-popup').width();
	var boxH = $('.page-popup').height();

	var posL = (winW - boxW) / 2;
	var posT = (winH - boxH) / 2;

	$('.page-popup').css('left', posL + 'px').css('top', posT + 'px');

	function displayMask() {
		$('.page-mask').addClass('show');
		$('html, body').css('overflow','hidden');
	}
	function displayPopup(){
		$('.page-popup').addClass('visible');
		Cookies.set('name', 'barefoot_popup', { expires: 7 });
	}
	function closePopup(){
		$('.page-mask').removeClass('show');
		$('.page-popup').removeClass('visible');
		$('html, body').css('overflow','auto');
	}

	var lastFocus;
	var popCookie = Cookies.get('name');

	if(popCookie !== 'barefoot_popup'){
		setTimeout(function(){
			lastFocus = document.activeElement;
			displayMask();
		}, 4500);
		setTimeout(function(){
			displayPopup();
		}, 5500);
	} 

	$('#boxClose').click(function(){
		closePopup();
	});

	$('.page-mask').click(function(){
		closePopup();
	});
});
