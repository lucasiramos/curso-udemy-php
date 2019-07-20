url = "http://ig.com.devel:8080";

window.addEventListener("load", function(){
	$('.btn-like').css('cursor','pointer')
	$('.btn-dislike').css('cursor','pointer')

	$(document).on('click', '.btn-like', function(event){
		$(this).addClass('btn-dislike').removeClass('btn-like')
		$(this).attr('src', url + '/images/heart-red.png')

		$.ajax({
			url: url + '/like/' + $(this).data('id'),
			type: 'GET',
			success: function(response){
				console.log('Has dado like a la publicación')
			}
		})
	});

	$(document).on('click', '.btn-dislike', function(event){
		$(this).addClass('btn-like').removeClass('btn-dislike')
		$(this).attr('src', url + '/images/heart-gray.png')
		
		$.ajax({
			url: url + '/dislike/' + $(this).data('id'),
			type: 'GET',
			success: function(response){
				console.log('Has dado dislike a la publicación')
			}
		})
	});
});