<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- .ur1 -->
<div class="ur1">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<!-- <div class="pavimento"></div> -->
	
	<img src="<?=Url::base()?>/webAssets/images/pavimento.png" class="pavimento" alt="Pavimento">

	<img src="<?=Url::base()?>/webAssets/images/premios.png" class="premios" alt="Premios">

	<h2 class="title"><span class="title-kotex">Kotex</span> te lleva <span class="title-purple">al mejor concierto</span> <span class="title-uppercase">CDMX 19 de Febrero</span></h2>

	<!-- .ur1-cont -->
	<div class="ur1-cont">

		<h3>Compra productos Kotex</h3>

		<p>
			Registra tus tickets, entre más registres más oportunidades tienes de ganar
		</p>

		<p>
			Elige la cadena o sucursal donde realizaste tu compra.
		</p>

		<span class="incluye">*Incluye vuelos y hospedaje.</span>

		<?php
		$form = ActiveForm::begin ( [
		'options' => [
		'enctype' => 'multipart/form-data'
		],
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/registro-usuarios'] ),
		] );
		?>

		<?= Html::submitButton('<span class="ladda-label">Registrate</span>', ['id'=>'registro-btn','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>

	<a id="ready" class="btn btn-primary ladda-button" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/usuarios/abrir-sesion'] ) ?>" data-style="zoom-out"><span class="ladda-label">Ya tengo registro</span></a>

		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .ur1-cont -->
	
	<!-- .acepto-terminos-condiciones -->
	<div class="acepto-terminos-condiciones">
		<p>Acepto términos y condiciones</p>
	</div>
	<!-- end - .acepto-terminos-condiciones -->

</div>
<!-- end - .ur1 -->