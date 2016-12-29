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

$(".mask-checks").on("click", function(){

	modal.style.display = "flex";

});

$("#modal-acepto-aviso-privacidad").on("click", function(){

	$(".mask-checks").hide();
	$("#box-2").prop( "checked", true );
	modal.style.display = "none";

});

$("#box-2").on("click", function(){
	if($("#box-2").is(':checked')) {
		// alert("Está activado");
	} else {
		$(".mask-checks").show();
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