$(document).ready(function(){

	$('.logout-btn').click(function(event){
		event.preventDefault();
		
		$.ajax({
			url  	:  './../backofficeadmin/phpfunction/loginfunction.php',
			type    : 'post',
			data    :
					{
						logout   : 1
					},success: function(){
						location.reload();

					}

		})
	});






});


