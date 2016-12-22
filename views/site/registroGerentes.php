<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\CatSucursal;
?>

<!-- .mt2 -->
<div class="mt2">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos.png" class="productos" alt="Productos">

	<!-- .mt2-cont -->
	<div class="mt2-cont">

		<h2>Datos del Gerente</h2>

		<?php
		$form = ActiveForm::begin ( [ 
				'options' => [ 
						'enctype' => 'multipart/form-data' 
				],
				"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro-gerentes'] ),
		] );
		?>

			<?= $form->field($gerente, 'txt_nombre')->textInput(['maxlength' => true])?>
				
			<?= $form->field($gerente, 'txt_apellido')->textInput(['maxlength' => true])?>
			
			<?= $form->field($gerente, 'txt_correo')->textInput(['maxlength' => true])?>
			
			<?= $form->field($gerente, 'num_telefono')->textInput(['maxlength' => true, 'class' => 'txt_telefono'])?>
			
			<?= $form->field($gerente, 'id_cadena')->dropDownList(ArrayHelper::map($cadenas, 'id_cadena', 'txt_nombre'), ['prompt'=>'Seleciona una cadena','class' => 'js-id-cadena'])?>
			
			<?= $form->field($gerente, 'id_sucursal')->dropDownList(ArrayHelper::map(CatSucursal::find()->one(), 'id_sucursal', 'txt_nombre'),['prompt'=>'Seleciona una sucursal'])?>
			
			<?= Html::submitButton('Enviar', array('class' => 'btn btn-primary js-submit-gerentes'))?>

		<?php

		ActiveForm::end ();

		?>

	</div>
	<!-- end - .mt2-cont -->

</div>
<!-- end - .mt2 -->