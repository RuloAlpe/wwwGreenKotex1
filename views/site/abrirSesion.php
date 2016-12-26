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
	<?php if($message == 0){?>
		<p>El correo es incorrecto</p>
	<?php }?>
		
	<?= Html::submitButton('<span class="ladda-label">Registrarse</span>', ['id'=>'sesion-btn','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>
	<a class="btn btn-primary" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/registro-gerentes'] ) ?>">Registrarse como Gerente</a>
	
<?php
ActiveForm::end ();
?>
