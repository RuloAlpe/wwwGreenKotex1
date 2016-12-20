<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
if($idGerente != 0){
	$form = ActiveForm::begin ( [
			'options' => [
					'enctype' => 'multipart/form-data'
			],
			
			"id" => "from-verdedores",
			"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro-vendedores'] )
	] );
	
	?>
		<?= $form->field($vendedor, 'id_gerente')->hiddenInput(['maxlength' => true, 'value' => $idGerente])->label(false)?>
		
		<?= $form->field($vendedor, 'txt_nombre')->textInput(['maxlength' => true])?>
			
		<?= $form->field($vendedor, 'txt_apellido')->textInput(['maxlength' => true])?>
		
		<?= $form->field($vendedor, 'txt_correo')->input('email')?>
		
		<?= $form->field($vendedor, 'num_telefono')->textInput(['maxlength' => 10, 'class' => 'txt_telefono'])?>
		
		<?= Html::submitButton('Guardar y resgistrar otro vendedor', array('class' => 'js-submit-vendedores'))?>
	
	<?php
	ActiveForm::end ();
	?>
	<a id="submit_terminar" href="http://localhost/wwwGreenKotex1/web/site/registro-gerentes">Guardar y Terminar</a>
<?php }else{ ?>
		<p>Necesitas Registrarte como gerente</p>
		<a href="http://localhost/wwwGreenKotex1/web/site/registro-gerentes">registrarse</a>
<?php }?>