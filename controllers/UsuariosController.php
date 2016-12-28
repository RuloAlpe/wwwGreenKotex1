<?php

namespace app\controllers;

use Yii;
use app\models\EntUsuarios;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\CatSucursal;
use app\models\CatCadena;
use app\models\EntTickets;
use app\models\RelUsuarioTickets;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * UsuariosController implements the CRUD actions for EntUsuarios model.
 */
class UsuariosController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'delete' => [ 
										'POST' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * Lists all EntUsuarios models.
	 *
	 * @return mixed
	 */
	public function actionIndex() {
		$dataProvider = new ActiveDataProvider ( [ 
				'query' => EntUsuarios::find () 
		] );
		
		return $this->render ( 'index', [ 
				'dataProvider' => $dataProvider 
		] );
	}
	
	/**
	 * Displays a single EntUsuarios model.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionView($id) {
		return $this->render ( 'view', [ 
				'model' => $this->findModel ( $id ) 
		] );
	}
	
	/**
	 * Creates a new EntUsuarios model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 *
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new EntUsuarios ();
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->id_usuario 
			] );
		} else {
			return $this->render ( 'create', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Updates an existing EntUsuarios model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel ( $id );
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->id_usuario 
			] );
		} else {
			return $this->render ( 'update', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Deletes an existing EntUsuarios model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 *
	 * @param string $id        	
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel ( $id )->delete ();
		
		return $this->redirect ( [ 
				'index' 
		] );
	}
	
	/**
	 * Finds the EntUsuarios model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 *
	 * @param string $id        	
	 * @return EntUsuarios the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = EntUsuarios::findOne ( $id )) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.' );
		}
	}
	public function actionRegistro() {
		return $this->render ( 'registro' );
	}
	public function actionRegistroUsuarios() {
		$sucursales = CatSucursal::find ()->where ( [ 
				'b_habilitado' => 1 
		] )->all ();
		$cadenas = CatCadena::find ()->where ( [ 
				'b_habilitado' => 1 
		] )->all ();
		
		if ($this->existeSesion ()) {
			
			$usuario = $this->obtenerSesionUsuario ();
			$ticket = new EntTickets ();
			return $this->render ( 'registroTickets', [ 
					'idUsuario' => $usuario->id_usuario,
					'ticket' => $ticket,
					'sucursales' => $sucursales,
					'cadenas' => $cadenas,
					'tick' => 1 
			] );
		}
		
		$usuarios = new EntUsuarios ();
		
		if ($usuarios->load ( Yii::$app->request->post () )) {
			
			if ($usuarios->save ()) {
				$this->crearSesionUsuario ( $usuarios );
				
				$ticket = new EntTickets ();
				return $this->render ( 'registroTickets', [ 
						'idUsuario' => $usuarios->id_usuario,
						'ticket' => $ticket,
						'sucursales' => $sucursales,
						'cadenas' => $cadenas,
						'tick' => 1 
				] );
			}
			;
		}
		
		return $this->render ( 'registroUsuarios', [ 
				'usuario' => $usuarios,
				'sucursales' => $sucursales,
				'cadenas' => $cadenas,
				// 'ticket' => $ticket,
				'correo' => 1 
		] )
		// 'tick' => 1
		;
	}
	public function actionGetSucursales($idC) {
		// Yii::$app->response->format = Response::FORMAT_JSON;
		$sucursales = CatSucursal::find ()->where ( [ 
				'id_cadena' => $idC 
		] )->andWhere ( [ 
				'b_habilitado' => 1 
		] )->all ();
		
		foreach ( $sucursales as $sucursal ) {
			echo "<option value='" . $sucursal->id_sucursal . "'>" . $sucursal->txt_nombre . "</option>";
		}
		// return ['sucursales' => $sucursal];
	}
	public function actionAbrirSesion() {
		$usuario = new EntUsuarios();
		return $this->render ( 'abrirSesion',['usuario'=>$usuario] );
	}
	public function actionGuardarTicket() {
		$correo = new EntUsuarios();
		$correo->load ( Yii::$app->request->post () );
		
		
		$usuario = EntUsuarios::find()->where(['txt_correo'=>$correo])->one();
		
		if($usuario){
			$this->crearSesionUsuario($usuario);
		}else{
			$usuario = new EntUsuarios();
			$usuario->addError('txt_correo', 'No existe una cuenta con el correo ingresado');
			return $this->render ( 'abrirSesion',['usuario'=>$usuario] );
		}
		
		if ($this->existeSesion ()) {
			
			$usuario = $this->obtenerSesionUsuario();
			
				
				// $this->crearSesionUsuario($buscar);
				
				$sucursales = CatSucursal::find ()->where ( [ 
						'b_habilitado' => 1 
				] )->all ();
				$cadenas = CatCadena::find ()->where ( [ 
						'b_habilitado' => 1 
				] )->all ();
				$ticket = new EntTickets ();
				
				return $this->render ( 'registroTickets', [ 
						'idUsuario' => $usuario->id_usuario,
						'ticket' => $ticket,
						'sucursales' => $sucursales,
						'cadenas' => $cadenas,
						'tick' => 1 
				] );
			
			
			
		}else{
			return $this->redirect(['usuarios/registro']);
		}
	}
	public function actionGuardarRelacion($id = 0) {
		$ticket = new EntTickets ();
		if($validar = $this->validarTicket($ticket)){
			return $validar;
		}
		
		if($this->existeSesion()){
			$usuario = $this->obtenerSesionUsuario();
			if ($id != 0) {
				
				if ($ticket->load ( Yii::$app->request->post () )) {
					
					$ticket->save ();
					
					$rel = new RelUsuarioTickets ();
					
					
					$rel->id_usuario = $usuario->id_usuario;
					$rel->id_ticket = $ticket->id_ticket;
					
					if($rel->save ()){
						return ['status'=>'success'];
					}else{
						return ['status'=>'error'];
					}
					
// 					return $this->render ( 'felicidades', [ 
// 							'correo' => $usuario->txt_correo 
// 					] );
				}
			}
		}
	}
	
	public function actionFinish(){
		if($this->existeSesion()){
			
			$usuario = $this->obtenerSesionUsuario();
			
			$this->removerSesionUsuario();
			
			return $this->render ( 'felicidades', [
					'correo' => $usuario->txt_correo
			] );
			
		}else{
			$this->redirect(['usuarios/registro']);
		}
		
		
	}
	
	private function validarTicket($ticket){
		if (Yii::$app->request->isAjax && $ticket->load ( Yii::$app->request->post () )) {
			Yii::$app->response->format = Response::FORMAT_JSON;
	
			return ActiveForm::validate ( $ticket );
		}
	}
	
	private function crearSesionUsuario($usuario) {
		$session = Yii::$app->session;
		$session->set ( 'usuario', $usuario );
	}
	private function removerSesionUsuario() {
		$session = Yii::$app->session;
		$session->remove ( 'usuario' );
	}
	private function obtenerSesionUsuario() {
		$session = Yii::$app->session;
		return $session->get ( 'usuario' );
	}
	private function existeSesion() {
		$session = Yii::$app->session;
		
		if ($session->has ( 'usuario' )) {
			return true;
		} else {
			return false;
		}
	}
}
