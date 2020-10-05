$(document).ready(function(){
	var on_point = false;
	$('body').on('mouseover','.monument',function(){
		$('#tooltip').remove();
		var x = ($(this).position()).top + 40;
		var y = ($(this).position()).left + 40;
		var z = this.id;
		window.timerId = window.setInterval(function(){
			$.ajax({
				url: 'php/monument_info.php',
				type: 'POST',
				dataType: 'text',
				data: { m_id: z, top:x, left:y },
				success: success_get_info
			});
			window.clearInterval(window.timerId);
		},1000);
	});
	$('body').on('mouseleave','.monument',function() {
		$('#tooltip').remove();
		window.clearInterval(window.timerId);
	});

	$('body').on('click','.monument', function(){
		$(location).attr('href','monument_page/monument_page.php?type=monument&id='+this.id);
	});

	function success_get_info(data)
	{
		$('#map-container').append(data);
	};
});