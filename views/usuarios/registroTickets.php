<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\CatSucursal;
use yii\helpers\Url;

?>	

<!-- .ur4 -->
<div class="ur4">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos.png" class="productos" alt="Productos">

	<!-- .ur4-cont -->
	<div class="ur4-cont">

		<!-- <h2>Datos del Gerente</h2> -->

		<?php
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
			
			<!-- .form-group-btns -->
			<div class="form-group-btns">

				<?= Html::submitButton('<span class="ladda-label">Registrar otro ticket</span>', ['id'=>'sesion-btn-ticket','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>
				
				<a id="terminar_ticket" class="btn btn-primary" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/registro'] ) ?>">Terminar</a>
			
			</div>
			<!-- end - .form-group-btns -->
			
		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .ur4-cont -->

</div>
<!-- end - .ur4 -->