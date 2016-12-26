<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\models\CatSucursal;

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
		<p>Este correo ya esta registrado</p>
	<?php }?>
	
	<?= $form->field($usuario, 'num_telefono')->textInput(['maxlength' => 10, 'class' => 'txt_telefono'])?>
	
	<?= $form->field($ticket, 'id_cadena')->dropDownList(ArrayHelper::map($cadenas, 'id_cadena', 'txt_nombre'), ['prompt'=>'Seleciona una cadena','class' => 'js-id-cadena'])?>
			
	<?= $form->field($ticket, 'id_sucursal')->dropDownList(ArrayHelper::map(CatSucursal::find()->one(), 'id_sucursal', 'txt_nombre'),['prompt'=>'Seleciona una sucursal'])?>
	
	<?= $form->field($ticket, 'txt_ticket')->textInput(['maxlength' => true])?>
	
	<?= Html::submitButton('Enviar', array('class' => 'js-submit-usuarios'))?>

<?php
ActiveForm::end ();
?>