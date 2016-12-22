/**
 * Kotex.js
 */

var basePath = "http://localhost/wwwGreenKotex1/web/";
var valor = true;

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
				if(!valor){
            		window.location.href = basePath + 'site/registro';
            	}
				swal("Good job!", "You clicked the button!", "success")
				document.getElementById("from-verdedores").reset();
			}
		});
		return false;
	});

	
});

$(document).ready(function(){
	$(".js-submit-vendedores").on("click", function(e){
		e.preventDefault();
		valor = true;
		$('#from-verdedores').submit();
	});
	$("#submit_terminar").on("click", function(e){
		e.preventDefault();
		valor = false;
		$('#from-verdedores').submit();
	});
});

function validarSoloNumeros(e) {
	 // Allow: backspace, delete, tab, escape, enter and .
	 if ($.inArray(e.keyCode, [ 46, 8, 9, 27, 13, 110 ]) !== -1 ||
	 // Allow: Ctrl+A, Command+A
	 (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
	 // Allow: home, end, left, right, down, up
	 (e.keyCode >= 35 && e.keyCode <= 40)) {
	  // let it happen, don't do anything
	  return;
	 }
	 // Ensure that it is a number and stop the keypress
	 if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57))
	   && (e.keyCode < 96 || e.keyCode > 105)) {
	  e.preventDefault();
	 }
}
$('.txt_telefono').keydown(function(e) {
	  validarSoloNumeros(e);
 });

$('#entgerentes-id_cadena').on('change', function(){
	var idC = $(this).val();
	console.log(idC);
	$.ajax({
		url: basePath + "site/get-sucursales?idC="+idC,
		type: "get",
		success: function(data){
			$('select#entgerentes-id_sucursal').html(data);
		}
	});
});

$('#enttickets-id_cadena').on('change', function(){
	var idC = $(this).val();
	console.log(idC);
	$.ajax({
		url: basePath + "usuarios/get-sucursales?idC="+idC,
		type: "get",
		success: function(data){
			$('select#enttickets-id_sucursal').html(data);
		}
	});
});

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


	$('#from-ticket').on('beforeSubmit', function(){
		var form = $(this);
		if(form.find('.has-error').length) {
			return false;
		}

		$.ajax({
			url: form.attr('action'),
			type: 'post',
			data: form.serialize(),
			success: function() {
				if(!valor){
            		window.location.href = basePath + 'usuarios/registro';
            	}
				swal("Good job!", "You clicked the button!", "success")
				document.getElementById("from-ticket").reset();
			}
		});
		return false;
	});

	
});

$(document).ready(function(){
	$("#sesion-btn-ticket").on("click", function(e){
		e.preventDefault();
		valor = true;
		$('#from-ticket').submit();
	});
	$("#terminar_ticket").on("click", function(e){
		e.preventDefault();
		valor = false;
		$('#from-ticket').submit();
	});
});

//$(document).on({
//	'change' : function(e) {
//		
//		e.preventDefault();
//		var idC = $(this).val();
//		console.log(idC);
//		$.ajax({
//			url: basePath + "get-sucursales?idC="+idC,
//			type: "get",
//			success: function(data){
//				$('select#entgerentes-id_sucursal').html(data);
//			}
//		});
//	}
//}, '#entgerentes-id_cadena');
