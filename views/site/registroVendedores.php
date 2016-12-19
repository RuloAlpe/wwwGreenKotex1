<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$form = ActiveForm::begin ( [
		'options' => [
				'enctype' => 'multipart/form-data'
		],
		
		"id" => "from-verdedores",
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro-vendedores'] )
] );

?>

	<?= $form->field($vendedor, 'txt_nombre')->textInput(['maxlength' => true])?>
		
	<?= $form->field($vendedor, 'txt_apellido')->textInput(['maxlength' => true])?>
	
	<?= $form->field($vendedor, 'txt_correo')->textInput(['maxlength' => true])?>
	
	<?= $form->field($vendedor, 'num_telefono')->textInput(['maxlength' => true])?>
	
	<?= Html::submitButton('Enviar', array('class' => 'js-submit-vendedores'))?>

<?php

ActiveForm::end ();