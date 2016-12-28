<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\CatSucursal;
use yii\helpers\Url;
$this->registerJsFile ( '@web/webAssets/js/kotex.js', [
		'depends' => [
				\app\assets\AppAsset::className ()
		]
] );
?>	

<!-- .ur4 -->
<div class="ur2">

	<a href="" class="logo">
		<img src="<?=Url::base()?>/webAssets/images/logo.png" alt="Kotex">
	</a>

	<img src="<?=Url::base()?>/webAssets/images/avion.png" class="avion" alt="Avion">

	<img src="<?=Url::base()?>/webAssets/images/productos.png" class="productos" alt="Productos">

	<!-- .ur4-cont -->
	<div class="ur2-cont">

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

<div class="form-group-select">
				<?= $form->field($ticket, 'id_cadena')->dropDownList(ArrayHelper::map($cadenas, 'id_cadena', 'txt_nombre'), ['prompt'=>'Seleciona una cadena','class' => 'js-id-cadena'])?>
		
				<?= $form->field($ticket, 'id_sucursal')->dropDownList(ArrayHelper::map(CatSucursal::find()->one(), 'id_sucursal', 'txt_nombre'),['prompt'=>'Seleciona una sucursal'])?>
			</div>
			
			<div class="form-group-ayuda">
				<?= $form->field($ticket, 'txt_ticket')->textInput(['maxlength' => true])?>
				<span id="modal-ayuda-open" class="form-group-ayuda-span"><i class="ion ion-help"></i></span>
			</div>
			<?php //if($tick == 0){?>
				<div class="help-error">
					<p id="ticketRegistardo" style="display:none">Este ticket ya esta registrado</p>
				</div>
			<?php //}?>
			
			<!-- .form-group-btns -->
			<div class="form-group-btns">
				

				<?= Html::submitButton('<span class="ladda-label">Registrar otro ticket</span>', ['id'=>'sesion-btn-ticket','class'=>'btn btn-primary ladda-button', 'data-style'=>'zoom-out'])?>
				
				<a id="terminar_ticket" class="btn btn-primary ladda-button" href="<?= Yii::$app->urlManager->createAbsoluteUrl ( ['/site/registro'] ) ?>" data-style="zoom-out"><span class="ladda-label">Terminar</span></a>
			
			</div>
			<!-- end - .form-group-btns -->
			
		<?php
		ActiveForm::end ();
		?>

	</div>
	<!-- end - .ur4-cont -->

</div>
<!-- end - .ur4 -->


<!-- .modal -->
<div id="modal-ayuda" class="modal modal-admin">

	<!-- .modal-content -->
	<div class="modal-content">

		<!-- Brn Close -->
		<span id="modal-ayuda-close" class="modal-close"><i class="ion ion-close-round"></i></span>
		
		<h2 class="modal-content-title">Registra el número marcado en rojo</h2>

		<div class="modal-content-ticket">
			<img id="imgTicket" src="<?=Url::base()?>/webAssets/images/ticket-033.png" alt="Ticket">	
		</div>

	</div>
	<!-- end - .modal-content -->

</div>
<!-- end - .modal -->