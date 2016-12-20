/**
 * 
 */
var basePath = "http://localhost/wwwGreenKotex1/web/site/";

$(document).ready(
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
	    })
);

