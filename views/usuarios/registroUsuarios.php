<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\CatSucursal;

$this->registerJsFile ( '@web/webAssets/js/kotex.js', [ 
  'depends' => [ 
    \app\assets\AppAsset::className () 
  ] 
] );
?>

<!-- .ur2 -->
<div class="ur2">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos.png" class="productos" alt="Productos">

	<!-- .ur2-cont -->
	<div class="ur2-cont">

		<!-- <h2>Datos del Gerente</h2> -->

		<?php
		$form = ActiveForm::begin ( [
			'options' => [
			'enctype' => 'multipart/form-data'
			],

			"id" => "from-usuarios",
			"action" => Yii::$app->urlManager->createAbsoluteUrl ( ['usuarios/registro-usuarios'] )
		] );
		?>

			<?= $form->field($usuario, 'txt_nombre')->textInput(['maxlength' => true])?>

			<?= $form->field($usuario, 'txt_apellido')->textInput(['maxlength' => true])?>
	
			<?= $form->field($usuario, 'txt_correo')->input('email')?>
			
			<?php if($correo == 0){?>
				<p>Este correo ya esta registrado</p>
			<?php }?>
			
			<?= $form->field($usuario, 'num_telefono')->textInput(['maxlength' => 10, 'class' => 'txt_telefono'])?>

			<div class="form-group-select">
				<?= $form->field($ticket, 'id_cadena')->dropDownList(ArrayHelper::map($cadenas, 'id_cadena', 'txt_nombre'), ['prompt'=>'Seleciona una cadena','class' => 'js-id-cadena'])?>
		
				<?= $form->field($ticket, 'id_sucursal')->dropDownList(ArrayHelper::map(CatSucursal::find()->one(), 'id_sucursal', 'txt_nombre'),['prompt'=>'Seleciona una sucursal'])?>
			</div>
			
			<div class="form-group-ayuda">
				<?= $form->field($ticket, 'txt_ticket')->textInput(['maxlength' => true])?>
				<span id="modal-ayuda-open" class="form-group-ayuda-span"><i class="ion ion-help"></i></span>

				<?php if($tick == 0){?>
					<p>Este ticket ya esta registrado</p>
				<?php }?>
			</div>

			<div class="form-group-check">
				<div class="boxes">
					<input type="checkbox" id="box-1">
					<label for="box-1">He leído y acepto el Aviso de Privacidad</label>
				</div>
			</div>

			<?= Html::submitButton('Enviar', array('class' => 'btn btn-primary js-submit-usuarios'))?>


		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .ur2-cont -->

</div>
<!-- end - .ur2 -->

<!-- .modal -->
<div id="modal-ayuda" class="modal modal-admin">

	<!-- .modal-content -->
	<div class="modal-content">

		<!-- Brn Close -->
		<span id="modal-ayuda-close" class="modal-close"><i class="ion ion-close-round"></i></span>
		
		<h2 class="modal-content-title">Registra el número marcado en rojo</h2>

		<div class="modal-content-ticket">
			<img id="imgTicket" src="<?=Url::base()?>/webAssets/images/" alt="Ticket">	
		</div>

	</div>
	<!-- end - .modal-content -->

</div>
<!-- end - .modal -->