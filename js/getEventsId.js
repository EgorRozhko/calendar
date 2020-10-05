$(document).ready(function(){
	$('body').on('click','.oneOfEvents',function(){
		var item_id = this.id;
		$('#map').attr("src","images/secondObla.png");
		$.ajax({
			url: "php/ssd.php",
			type: "POST",
			data: ({i_id: item_id}),
			dataType: "text",
			success: func_success
		});
		$('#listOfEvents').empty();
		$('#listOfEvents').css({
			display:'none'
		});
		$(".bigCalendar").remove();
	});

	$('body').on('click','.obla',function(){
		var item_id = this.id;
  		$.ajax({
			url: "php/show_region.php",
			type: "POST",
			data: ({i_id: item_id}),
			dataType: "text",
			success: func_success
		});
	});

	$('body').on('click','.icon_anim', function(){
		$(location).attr('href','event_page/event_page.php?type=icon_anim&id='+this.id);
	});

	function func_success(data)
	{
		$('.obla').remove();
		$('#map-container').append(data);
		$('body, html').animate({scrollTop: $('.obla').offset().top }, 1500);
		$('.obla').addClass('b');
	};
});