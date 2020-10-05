$('document').ready(function(){
	$('#show-monuments').on('click', function(){
		$('.monument').remove();
		$.ajax({
			url: "php/show_monuments.php",
			success: successFunction
		});
	});
	function successFunction(data)
	{
		$('.obla').remove();
		$('#map').attr('src', 'images/map.png');
		$('#map').addClass('b');
		$('.monument').addClass('b');
		$('#map-container').append(data);
	}
});