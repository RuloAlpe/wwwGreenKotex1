/**
 * Ambar
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Ambar
 *
 */

// Modal
var modal = document.getElementById('modal-ayuda');
var modalOpen = document.getElementById("modal-ayuda-open");
var modalClose = document.getElementById("modal-ayuda-close");

/**
 * ----------------------------
 *		Document Ready
 * ----------------------------
 *
 * - Animsition
 *
 */
$(document).ready(function(){

	/**
	 * Modal
	 */
	// Open Modal
	$(modalOpen).on("click", function(){
		modal.style.display = "flex";
		modal.style.display = "-ms-flexbox";
	});
	// Close Modal
	$(modalClose).on("click", function(){
		modal.style.display = "none";
	});

});


/**
 * ----------------------------
 *		Click Window
 * ----------------------------
 *
 * - Modal
 *
 */
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