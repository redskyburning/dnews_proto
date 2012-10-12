$(document).ready(function(){
	$('.module-slider').each(function(){
		var thisW = $(this).find('.slider-wrap').outerWidth();
		$(this).find('.slider-member').css('width',thisW+'px');
		$(this).removeClass('pre');
	});
});
