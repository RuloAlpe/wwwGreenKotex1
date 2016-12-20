<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntGerentes;
use app\models\CatSucursal;
use app\models\CatCadena;
use app\models\EntVendedores;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionRegistro(){
    	//$this->layout = false;
    	
    	return $this->render('registro');
    }

    public function actionRegistroGerentes(){
    	//$this->layout = false;
    	
    	$gerente = new EntGerentes();
    	$sucursales = CatSucursal::find()->where(['b_habilitado'=>1])->all();
    	$cadenas = CatCadena::find()->where(['b_habilitado'=>1])->all();
    	
    	if($gerente->load ( Yii::$app->request->post () )){
    		$gerente->save();
    		$idGerente = $gerente->id_gerente;
    		$entVendedores = new EntVendedores();
    		
    		return $this->render('registroVendedores',[
    				'vendedor' => $entVendedores,
    				'idGerente' => $idGerente
    		]);
    	}
    	
    	return $this->render('registroGerentes', [
    			'gerente' => $gerente,
    			'sucursales' => $sucursales,
    			'cadenas' => $cadenas
    	]);
    }
    
    public function actionRegistroVendedores(){
    	//$this->layout = false;
    	
    	$vendedor = new EntVendedores();
    	$idGerente = 0;
    	
    	if($vendedor->load ( Yii::$app->request->post () )){
    		//$vendedor->id_gerente = 1;
    		$vendedor->save();
    		$idGerente = $vendedor->id_gerente;
    		$vendedor = new EntVendedores();
    			
    		return $this->render('registroVendedores',[
    				'vendedor' => $vendedor,
    				'idGerente' => $idGerente
    		]);
    	}
    	
    	return $this->render('registroVendedores',[
    			'vendedor' => $vendedor,
    			'idGerente' => $idGerente
    	]);
    }
}
