<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

echo "felicidades tus datos han sido registrados";
?>
<?php
$form = ActiveForm::begin ( [
		'options' => [
				'enctype' => 'multipart/form-data'
		],
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/guardar-ticket'] ),
] );
?>
	<input type="hidden" name="email-usuario" value="<?= $correo ?>">
		
	<?= Html::submitButton('<span class="ladda-label">Registrar otro ticket</span>', ['id'=>'btn-usuario-ticket','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>
	<a id="btn-terminar-usuario" class="btn btn-primary" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/usuarios/registro'] ) ?>">Terminar</a>
	
<?php
ActiveForm::end ();
?>