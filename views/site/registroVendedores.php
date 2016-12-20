<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

echo $idGerente;

$form = ActiveForm::begin ( [
		'options' => [
				'enctype' => 'multipart/form-data'
		],
		
		"id" => "from-verdedores",
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro-vendedores'] )
] );

?>
	<?= $form->field($vendedor, 'id_gerente')->textInput(['maxlength' => true, 'value' => $idGerente, 'style' => 'display:none'])?>
	
	<?= $form->field($vendedor, 'txt_nombre')->textInput(['maxlength' => true])?>
		
	<?= $form->field($vendedor, 'txt_apellido')->textInput(['maxlength' => true])?>
	
	<?= $form->field($vendedor, 'txt_correo')->textInput(['maxlength' => true])?>
	
	<?= $form->field($vendedor, 'num_telefono')->textInput(['maxlength' => true])?>
	
	<?= Html::submitButton('Resgistrar otro vendedor', array('class' => 'js-submit-vendedores'))?>

<?php
ActiveForm::end ();
?>
<a href="http://localhost/wwwGreenKotex1/web/site/registro">Terminar</a>