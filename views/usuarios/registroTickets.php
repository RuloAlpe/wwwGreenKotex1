<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\CatSucursal;

$form = ActiveForm::begin ( [
		'options' => [
				'enctype' => 'multipart/form-data'
		],
		'id' => 'from-ticket',
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/guardar-relacion?id=' . $idUsuario] ),
] );
?>	

	<?= $form->field($ticket, 'id_cadena')->dropDownList(ArrayHelper::map($cadenas, 'id_cadena', 'txt_nombre'), ['prompt'=>'Seleciona una cadena','class' => 'js-id-cadena'])?>
			
	<?= $form->field($ticket, 'id_sucursal')->dropDownList(ArrayHelper::map(CatSucursal::find()->one(), 'id_sucursal', 'txt_nombre'),['prompt'=>'Seleciona una sucursal'])?>
			
	<?= $form->field($ticket, 'txt_ticket')->textInput(['maxlength' => true])?>
	
	<?php //if($tick == 0){?>
		<p id="ticketRegistardo" style="display:none">Este ticket ya esta registrado</p>
	<?php //}?>
		
	<?= Html::submitButton('<span class="ladda-label">Registrar otro ticket</span>', ['id'=>'sesion-btn-ticket','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>
	<a id="terminar_ticket" class="btn btn-primary" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/registro'] ) ?>">Terminar</a>
<?php
ActiveForm::end ();
?>