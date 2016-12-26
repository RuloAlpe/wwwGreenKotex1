<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- .mt4 -->
<div class="mt4">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<!-- .mt1-cont -->
	<div class="mt4-cont">

		<h2>Los datos que registraste son:</h2>
		
		<!-- .mt4-tabla -->
		<div class="mt4-tabla">

			<div class="mt4-tabla-head">
				
				<div class="mt4-tabla-head-td">
					Nombre
				</div>

				<div class="mt4-tabla-head-td">
					Apellidos
				</div>

				<div class="mt4-tabla-head-td">
					Email
				</div>

			</div>

			<div class="mt4-tabla-body">

				<?php
					foreach($vendedores as $vendedor){
				?>
				
				<div class="mt4-tabla-body-tr">
					
					<div class="mt4-tabla-body-td">
						<span><?= $vendedor->txt_nombre; ?></span>
					</div>

					<div class="mt4-tabla-body-td">
						<span><?= $vendedor->txt_apellido; ?></span>
					</div>

					<div class="mt4-tabla-body-td">
						<span>email@kotex.com</span>
					</div>

				</div>

				<?php
					}
				?>

			</div>

			
		
		</div>
		<!-- end - .mt4-tabla -->
		
		<!-- .mt4-botones -->
		<div class="mt4-botones">

			<div class="btn btn-primary">Regresar</div>

			<div class="btn btn-primary">Salir</div>

		</div>
		<!-- end - .mt4-botones -->

	</div>
	<!-- end - .mt4-cont -->

</div>
<!-- end - .mt4 -->