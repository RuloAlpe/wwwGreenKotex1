<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

# echo $idGerente;
?>

<!-- .mt3 -->
<div class="mt3">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos-2.png" class="productos" alt="Productos">

	<!-- .mt3-cont -->
	<div class="mt3-cont">

		<h2>Registra a tu equipo de ventas</h2>

		<?php
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

			<!-- .form-group-btns -->
			<div class="form-group-btns">
				
				<?= Html::submitButton('Resgistrar otro vendedor', array('class' => 'btn btn-primary js-submit-vendedores'))?>
				<a class="btn btn-primary" href="http://localhost/wwwGreenKotex1/web/site/registro">Terminar</a>

			</div>
			<!-- end - .form-group-btns -->
			
		<?php
		ActiveForm::end ();
		?>
		

	</div>
	<!-- end - .mt3-cont -->

</div>
<!-- end - .mt3 -->