<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!-- .ur2 -->
<div class="ur2">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos.png" class="productos" alt="Productos">

	<!-- .ur2-cont -->
	<div class="ur2-cont">

		<h2 class="ingresar">Ingresar</h2>

		<?php
		$form = ActiveForm::begin ( [
		'options' => [
				'enctype' => 'multipart/form-data'
		],
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/guardar-ticket'] ),
		] );
		?>
			<?= $form->field($usuario, 'txt_correo')->input('email')?>
				
			<div class="form-group-botones">

				<a class="btn btn-secundary ladda-button" data-style="zoom-out" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/usuarios/registro-usuarios'] ) ?>"><span class="ladda-label">Registrarse</span></a>

				<?= Html::submitButton('<span class="ladda-label">Ingresar</span>', ['id'=>'sesion-btn-usuario','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>

			</div>
						

		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .ur2-cont -->

</div>
<!-- end - .ur2 -->