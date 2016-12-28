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
				
				return false;
			}
			
			var button = document.getElementById('guardar-registro');
			var l = Ladda.create(button);
		 	l.start();
			
		});