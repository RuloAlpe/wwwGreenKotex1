<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- .mt2 -->
<div class="mt2">

	<a href="<?=Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro'] );?>" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos.png" class="productos" alt="Productos">

	<!-- .mt2-cont -->
	<div class="mt2-cont">
	
		<h2 class="ingresar">Ingresar</h2>

		<?php
		$form = ActiveForm::begin ( [
				'options' => [
						'enctype' => 'multipart/form-data'
				],
				"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/sesion'] ),
		] );
		?>


		<?= $form->field($gerente, 'txt_correo')->textInput(['maxlength' => true])?>
			<?php if($message == 0){?>
				<div class="help-error">
					<p>El correo es incorrecto</p>
				</div>
			<?php }?>

			<!-- .form-group-botones -->
			<div class="form-group-botones">
				
				<a class="btn btn-secundary ladda-button" data-style="zoom-out" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/registro-gerentes'] ) ?>"><span class="ladda-label">Registrarse</span></a>
				
				<?= Html::submitButton('<span class="ladda-label">Ingresar</span>', ['id'=>'sesion-btn','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>

			</div>
			<!-- end - .form-group-botones -->
			
		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .mt2-cont -->

</div>
<!-- end - .mt2 -->