// Modal
var modal = document.getElementById('modal-agregar-post');
var modalOpen = document.getElementById("modal-agregar-post-open");
var modalClose = document.getElementById("modal-agregar-post-close");

$(document).ready(function(){
	
	/**
	 * Modal
	 */
	// Open Modal
	$(modalOpen).on("click", function(){
		modal.style.display = "flex";
	});
	// Close Modal
	$(modalClose).on("click", function(){
		modal.style.display = "none";
	});

}); // end - READY

$('body').on(
		'beforeSubmit',
		'#from-usuarios',
		function() {
			var form = $(this);
			// return false if form still have some validation errors
			if (form.find('.has-error').length) {
				return false;
			}
			
			if(!$("#box-1").prop('checked')){
				swal("Espera", "Debe haber aceptado el aviso de privacidad", "warning");
				return false;
			}
			
			var button = document.getElementById('guardar-registro');
			var l = Ladda.create(button);
		 	l.start();
			
		});

$(".mask-check").on("click", function(){

	modal.style.display = "flex";

});

$("#modal-acepto-aviso-privacidad").on("click", function(){

	$(".mask-check").hide();
	$("#box-1").prop( "checked", true );
	modal.style.display = "none";

});

$("#box-1").on("click", function(){
	if($("#box-1").is(':checked')) {
		// alert("Está activado");
	} else {
		$(".mask-check").show();
	}
});


window.onclick = function(event) {
	// Modal - Close
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

$(window).bind("click touchstart", function(){
	// Modal - Close
	if (event.target == modal) {
		modal.style.display = "none";
	}
});