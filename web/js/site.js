/**
 * 
 */
var basePath = "http://localhost/wwwGreenKotex1/web/site/";

$('.js-submit-vendedores').on("click", function(e){
	e.preventDefault();
	$.ajax({
		url: basePath + "registro-vendedores",
		type: 'post',
		success: function(){
			console.log("success");	
		}
	});
});
