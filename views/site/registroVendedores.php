<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

use yii\helpers\Url;

# echo $idGerente;
?>

<!-- .mt3 -->
<div class="mt3">

	<a href="<?=Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro'] );?>" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos-2.png" class="productos" alt="Productos">

	<!-- .mt3-cont -->
	<div class="mt3-cont">

		<h2>Registra a tu equipo de ventas</h2>
		
		<?php if($idGerente != 0){ ?>
		
			<?php
			$form = ActiveForm::begin ( [
					'options' => [
							'enctype' => 'multipart/form-data'
					],
					
					"id" => "from-verdedores",
					"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['site/registro-vendedores'] )
			] );
	
			?>
				<?= $form->field($vendedor, 'id_gerente')->textInput(['maxlength' => true, 'value' => $idGerente, 'style' => 'display:none'])->label(false)?>
				
				<?= $form->field($vendedor, 'txt_nombre')->textInput(['maxlength' => true])?>
					
				<?= $form->field($vendedor, 'txt_apellido')->textInput(['maxlength' => true])?>
				
				<?= $form->field($vendedor, 'txt_correo')->textInput(['maxlength' => true])?>
				
				<p id="correoRegistardo" style="display:none">Este correo ya esta registrado</p>
				
				<?= $form->field($vendedor, 'num_telefono')->textInput(['maxlength' => 10, 'class' => 'txt_telefono'])?>
	
				<!-- .form-group-btns -->
				<div class="form-group-btns">
					
					<?= Html::submitButton('<span class="ladda-label">Guardar y registrar otro vendedor</span>', ['id' => 'btn-submit-vendedor', 'class' => 'btn btn-primary ladda-button animated delay-3', 'data-style'=>'zoom-out'])?>
					<a id="submit_terminar" class="btn btn-primary ladda-button" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/registro'] ) ?>" data-style="zoom-out"><span class="ladda-label">Guardar y terminar</span></a>
<!-- 					<a class="btn btn-primary" href="http://localhost/wwwGreenKotex1/web/site/registro">Terminar</a> -->
	
				</div>
				<!-- end - .form-group-btns -->
				
			<?php
			ActiveForm::end ();
			?>
		<?php }else{ ?>
					<a class="btn btn-primary" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/registro-gerentes'] ) ?>">Registrarse como Gerente</a>
		<?php  } ?>

	</div>
	<!-- end - .mt3-cont -->

</div>
<!-- end - .mt3 -->

