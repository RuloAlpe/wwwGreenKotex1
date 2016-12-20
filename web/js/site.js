/**
 * Kotex.js
 */

var basePath = "http://localhost/wwwGreenKotex1/web/site/";

$(document).ready(function(){

	/**
	 * Animsition
	 */
	$('.animsition').animsition();

	/**
	 * Ladda
	 */
	// $('#registro-btn').click(function(){
	// 	// e.preventDefault();
	// 	var l = Ladda.create(this);
	// 	l.start();
	// });


	$('#from-verdedores').on('beforeSubmit', function(){
		var form = $(this);
		if(form.find('.has-error').length) {
			return false;
		}

		$.ajax({
			url: form.attr('action'),
			type: 'post',
			data: form.serialize(),
			success: function() {
				document.getElementById("from-verdedores").reset();
			}
		});
		return false;
	});

	
});
