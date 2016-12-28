<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\CatSucursal;

$this->registerJsFile ( '@web/webAssets/js/kotex.js', [ 
  'depends' => [ 
    \app\assets\AppAsset::className () 
  ] 
] );

$this->registerJsFile ( '@web/webAssets/js/registro-usuario.js', [
		'depends' => [
				\app\assets\AppAsset::className ()
		]
] );
?>

<!-- .ur2 -->
<div class="ur2">

	<a href="<?=Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/registro'] );?>" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos.png" class="productos" alt="Productos">

	<!-- .ur2-cont -->
	<div class="ur2-cont">

		<!-- <h2>Datos del Gerente</h2> -->

		<?php
		$form = ActiveForm::begin ( [
			'options' => [
			'enctype' => 'multipart/form-data'
			],

			"id" => "from-usuarios",
			"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/registro-usuarios'] )
		] );
		?>

			<?= $form->field($usuario, 'txt_nombre')->textInput(['maxlength' => true])?>

			<?= $form->field($usuario, 'txt_apellido')->textInput(['maxlength' => true])?>
	
			<?= $form->field($usuario, 'txt_correo')->input('email')?>
			
			<?php if($correo == 0){?>
				<div class="help-error-correo-registrado">
					<p>Este correo ya esta registrado</p>
				</div>
			<?php }?>
			
			<?= $form->field($usuario, 'num_telefono')->textInput(['maxlength' => 10, 'class' => 'txt_telefono'])?>

			<div class="form-group-check">
				<div class="boxes">
					<input type="checkbox" id="box-1">
					<label for="box-1">He leído y acepto el Aviso de Privacidad</label>
				</div>
			</div>

			<div class="form-group-botones-center">
				<a class="btn btn-secundary ladda-button" data-style="zoom-out" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/usuarios/abrir-sesion'] ) ?>"><span class="ladda-label">Ya tengo registro</span></a>

				<?= Html::submitButton('<span class="ladda-label">Registrar</span>', ['id' => 'guardar-registro', 'class' => 'btn btn-primary js-submit-usuarios ladda-button animated delay-3', 'data-style'=>'zoom-out'])?>
			</div>

		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .ur2-cont -->

</div>
<!-- end - .ur2 -->

