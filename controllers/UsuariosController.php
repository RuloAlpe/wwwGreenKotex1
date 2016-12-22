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

/**
 * UsuariosController implements the CRUD actions for EntUsuarios model.
 */
class UsuariosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EntUsuarios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => EntUsuarios::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EntUsuarios model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new EntUsuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EntUsuarios();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_usuario]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EntUsuarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_usuario]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EntUsuarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EntUsuarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EntUsuarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EntUsuarios::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionRegistro(){
    	
    	return $this->render('registro');
    }
    
    public function actionRegistroUsuarios(){
    	$usuarios = new EntUsuarios();
    	$sucursales = CatSucursal::find()->where(['b_habilitado'=>1])->all();
    	$cadenas = CatCadena::find()->where(['b_habilitado'=>1])->all();
    	$ticket = new EntTickets();
    	
    	if($usuarios->load ( Yii::$app->request->post () ) && $ticket->load ( Yii::$app->request->post () )){
    		$usuarios->save();
    		$ticket->save();
    		$relacion = new RelUsuarioTickets();
    		$relacion->id_usuario = $usuarios->id_usuario;
    		$relacion->id_ticket = $ticket->id_ticket;
    		$relacion->save();
    	
    		return $this->render('felicidades');
    	}
    	
    	return $this->render('registroUsuarios',[
    			'usuario' => $usuarios,
    			'sucursales' => $sucursales,
    			'cadenas' => $cadenas,
    			'ticket' => $ticket
    	]);
    }
    
    public function actionGetSucursales($idC){
    	//Yii::$app->response->format = Response::FORMAT_JSON;
    	$sucursales = CatSucursal::find()->where(['id_cadena'=>$idC])->andWhere(['b_habilitado'=>1])->all();
    	 
    	foreach($sucursales as $sucursal){
    		echo "<option value='" . $sucursal->id_sucursal . "'>" . $sucursal->txt_nombre . "</option>";
    	}
    	//return ['sucursales' => $sucursal];
    }
    
    public function actionAbrirSesion(){
    	 
    	return $this->render('abrirSesion');
    }
    
    public function actionGuardarTicket(){
    	$correo = $_POST['email-usuario'];
    	$buscar = EntUsuarios::find()->where(['txt_correo'=>$correo])->one();
    	$sucursales = CatSucursal::find()->where(['b_habilitado'=>1])->all();
    	$cadenas = CatCadena::find()->where(['b_habilitado'=>1])->all();
    	$ticket = new EntTickets();
    
    	if($buscar){
    		 
    		return $this->render('registroTickets',[
    			'idUsuario' => $buscar->id_usuario,
				'ticket' => $ticket,
    			'sucursales' => $sucursales,
    			'cadenas' => $cadenas
    		]);
    	}
    	 
    	return $this->render('abrirSesion');
    }
    
    public function actionGuardarRelacion($id = 0){
    	if($id != 0){
    		$ticket = new EntTickets();
    		if($ticket->load ( Yii::$app->request->post () )){
    			$ticket->save();
    			$rel = new RelUsuarioTickets();
    			$rel->id_usuario = $id;
    			$rel->id_ticket = $ticket->id_ticket;
    			$rel->save();
    			
    			return $this->render('felicidades');
    		}
    		
    	}
    }
}
