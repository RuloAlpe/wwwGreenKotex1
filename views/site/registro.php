<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- .mt1 -->
<div class="mt1">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<!-- <div class="pavimento"></div> -->
	
	<img src="<?=Url::base()?>/webAssets/images/pavimento.png" class="pavimento" alt="Pavimento">

	<img src="<?=Url::base()?>/webAssets/images/premios.png" class="premios" alt="Premios">

	<!-- .mt1-cont -->
	<div class="mt1-cont">

		<h2>Invita a tu equipo de ventas</h2>

		<p>
			Gerente, registra a tu cadena, tu sucursal ya tu equipo de ventas, entre más venda tu sucursal más oportunidades tienen de ganar.
		</p>

		<?php
		$form = ActiveForm::begin ( [
				'options' => [
						'enctype' => 'multipart/form-data'
				],
				"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro-gerentes'] ),
		] );
		?>
		<?= Html::submitButton('<span class="ladda-label">Registrarse</span>', ['id'=>'registro-btn','class'=>'btn btn-primary ladda-button animated delay-3', 'data-style'=>'zoom-out'])?>


		<?php

		ActiveForm::end ();
		?>

	</div>
	<!-- end - .mt1-cont -->

</div>
<!-- end - .mt1 -->

<!-- <button id="registro">Registrarse</button> -->