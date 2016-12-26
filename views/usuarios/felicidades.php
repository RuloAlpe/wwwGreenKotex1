<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- .ur3 -->
<div class="ur3">
	
	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/edificio.png" class="edificio" alt="Edificio">
	
	<img src="<?=Url::base()?>/webAssets/images/angel.png" class="angel" alt="Angel">

	<img src="<?=Url::base()?>/webAssets/images/pavimento2.png" class="pavimento" alt="Pavimento">

	<img src="<?=Url::base()?>/webAssets/images/premios2.png" class="premios" alt="Premios">

	<!-- .ur3-cont -->
	<div class="ur3-cont">
	
		<!-- .ur3-felicidades -->
		<div class="ur3-felicidades">

			<a href="" class="logo">
				<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
			</a>

			<h2>¡Felicidades!</h2>

			<h3>¡Tus datos fueron registrados!</h3>

			<h4>Sigue registrando tickets</h4>

		</div>
		<!-- end - .ur3-felicidades -->

		<!-- .ur3-botones -->
		<div class="ur3-botones">
			
			<?php
			$form = ActiveForm::begin ( [
					'options' => [
							'enctype' => 'multipart/form-data'
					],
					"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/guardar-ticket'] ),
			] );
			?>
				<input type="hidden" name="email-usuario" value="<?= $correo ?>">
					
				<?= Html::submitButton('<span class="ladda-label">Registrar otro ticket</span>', ['id'=>'btn-usuario-ticket','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>
				
				<a id="btn-terminar-usuario" class="btn btn-primary" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/usuarios/registro'] ) ?>">Terminar</a>
				
			<?php
			ActiveForm::end ();
			?>

		</div>
		<!-- end - .ur3-botones -->
	
	</div>
	<!-- end - .ur3-cont -->

</div>
<!-- end - .ur3 -->