<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\CatSucursal;
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

		<h2>Datos del Gerente</h2>

		<?php
		$form = ActiveForm::begin ( [
				'id'=>'form-registros-gerentes',
				'options' => [ 
						'enctype' => 'multipart/form-data' 
				],
				"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro-gerentes'] ),
		] );
		?>

			<?= $form->field($gerente, 'txt_nombre')->textInput(['maxlength' => true])?>
				
			<?= $form->field($gerente, 'txt_apellido')->textInput(['maxlength' => true])?>
			
			<?= $form->field($gerente, 'txt_correo')->textInput(['maxlength' => true])?>
			
			<?php if($correo == 0){?>
				<div class="help-error-correo-registrado">
					<p>Este correo ya esta registrado</p>
				</div>
			<?php }?>
			
			<?= $form->field($gerente, 'num_telefono')->textInput(['maxlength' => 10, 'class' => 'txt_telefono'])?>
			
			<!-- .form-group-select -->
			<div class="form-group-select">
			
				<?= $form->field($gerente, 'id_cadena')->dropDownList(ArrayHelper::map($cadenas, 'id_cadena', 'txt_nombre'), ['prompt'=>'Seleciona una cadena','class' => 'js-id-cadena'])?>
				
				<?= $form->field($gerente, 'id_sucursal')->dropDownList(ArrayHelper::map(CatSucursal::find()->one(), 'id_sucursal', 'txt_nombre'),['prompt'=>'Seleciona una sucursal'])?>
			
			</div>
			<!-- end - .form-group-select -->

			<!-- .form-group-botones-center -->
			<div class="form-group-botones-center">
				<?= Html::submitButton('<span class="ladda-label">Enviar</span>', ['id' => 'btn-submit-gerentes', 'class' => 'btn btn-primary ladda-button animated delay-3', 'data-style'=>'zoom-out'])?>
			</div>
			<!-- end - .form-group-botones-center -->
<a class="btn btn-secundary ladda-button" data-style="zoom-out" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/abrir-sesion'] ) ?>"><span class="ladda-label">Ya tengo registro</span></a>
		<?php

		ActiveForm::end ();

		?>

	</div>
	<!-- end - .mt2-cont -->

</div>
<!-- end - .mt2 -->