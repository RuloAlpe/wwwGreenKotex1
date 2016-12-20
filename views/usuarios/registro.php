<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin ( [
		'options' => [
				'enctype' => 'multipart/form-data'
		],
		"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/registro-usuarios'] ),
] );
?>
<?= Html::submitButton('Registrarse')?>

<?php

ActiveForm::end ();
?>