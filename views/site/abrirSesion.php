<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin ( [
		'options' => [
				'enctype' => 'multipart/form-data'
		],
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/sesion'] ),
] );
?>
	<label>Ingrese correo</label>
	<input type="email" name="email-gerente">
		
	<?= Html::submitButton('<span class="ladda-label">Registrarse</span>', ['id'=>'sesion-btn','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>

<?php
ActiveForm::end ();
?>
