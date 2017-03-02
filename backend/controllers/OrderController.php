<?php

namespace backend\controllers;

use Yii;
use backend\models\Order;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
{
//    public $enableCsrfValidation = false;
//    public function beforeAction($action)
//    {
//        $this->enableCsrfValidation = false;
//        return parent::beforeAction($action);
//    }
    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
////                'only' => ['create', 'update', 'delete'],
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
////                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'delete' => ['POST'],
//                ],
//            ],
//        ];
//    }

    /**
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
        $data = null;

        if(isset($_GET['last_month'])) {
            $data = order::getCheck();
            $dataProvider = new ArrayDataProvider([
                'allModels' => $data,
                'sort' => [
                ],
                'pagination' => [
                    'pageSize' => 50,
                ],
            ]);

            return $this->render('last_month_index',['dataProvider' =>$dataProvider]);
        }

        if(isset($_GET['pre_last_month'])) {
            $data = order::getCheckPreLastMonth();
            $dataProvider = new ArrayDataProvider([
                'allModels' => $data,
                'sort' => [
                ],
                'pagination' => [
                    'pageSize' => 50,
                ],
            ]);

            return $this->render('index',['dataProvider' =>$dataProvider]);
        }

        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
            'sort' => [
            ],
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);

        return $this->render('last_month_index',['dataProvider' =>$dataProvider]);
    }
//    public function actionIndex()
//    {
//        $data = order::getCheck();
//
//        $dataProvider = new ArrayDataProvider([
//            'allModels' => $data,
//            'sort' => [
//                'attributes' => ['order_customFields_delivery_method']
//            ],
//            'pagination' => [
//                'pageSize' => 50,
//            ],
//        ]);
//        return $this->render('index',['dataProvider' =>$dataProvider]);
//    }

    /**
     * Displays a single Order model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    
    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
}
