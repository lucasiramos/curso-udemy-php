$(function(){
	$(".card-hover").hover(
		function() {
			$(this).addClass('bg-primary').css('cursor', 'pointer'); 
		}, function() {
			$(this).removeClass('bg-primary');
		}
	);
});