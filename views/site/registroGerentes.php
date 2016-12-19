<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

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
	
	<?= $form->field($gerente, 'num_telefono')->textInput(['maxlength' => true])?>
	
	<?= $form->field($gerente, 'id_sucursal')->dropDownList(ArrayHelper::map($sucursales, 'id_sucursal', 'txt_nombre'))?>
	
	<?= $form->field($gerente, 'id_cadena')->dropDownList(ArrayHelper::map($cadenas, 'id_cadena', 'txt_nombre'))?>
	
	<?= Html::submitButton('Enviar', array('class' => 'js-submit-gerentes'))?>

<?php

ActiveForm::end ();