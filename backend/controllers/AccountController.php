<?php

namespace backend\controllers;

use Yii;
use backend\models\Account;
use backend\models\Platform;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * AccountController implements the CRUD actions for Account model.
 */
class AccountController extends BackendController
{
    public function behaviors()
    {/*{{{*/
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'acess' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete', 'trash'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['view', 'update', 'delete', 'trash'],
                        'roles' => ['editor', 'inspector'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->getUser()->can($action->id.ucfirst($action->controller->id), [
                                'model' => $action->controller->findModel(Yii::$app->getRequest()->get('id'))
                            ]);
                        }
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['editor'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->getUser()->can($action->id.ucfirst($action->controller->id));
                        }
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['editor', 'inspector'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->getUser()->can($action->id.ucfirst($action->controller->id));
                        }
                    ],
                ],
            ],
        ];
    }/*}}}*/

    /**
     * Lists all Account models.
     * @return mixed
     */
    public function actionIndex()
    {/*{{{*/
        $tableName = Account::tableName(). '.';
        $dataProvider = new ActiveDataProvider([
            'query' => Account::find()->select([
                $tableName.'id', $tableName.'platform_id',
                $tableName.'staff_id', $tableName.'name', $tableName.'uid'
            ])->joinWith('categories')->joinWith('staff'),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }/*}}}*/

    /**
     * Displays a single Account model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {/*{{{*/
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }/*}}}*/

    /**
     * Creates a new Account model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {/*{{{*/
        $model = new Account();

        if ($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view', 'id' => $model->id]);

        return $this->render('create', [
            'model' => $model,
            'platform' => Platform::find()->all(),
        ]);
    }/*}}}*/

    /**
     * Updates an existing Account model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {/*{{{*/
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view', 'id' => $model->id]);

        return $this->render('update', [
            'model' => $model,
            'platform' => Platform::find()->all(),
        ]);
    }/*}}}*/

    /**
     * Deletes an existing Account model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {/*{{{*/
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }/*}}}*/

    /**
     * Finds the Account model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Account the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {/*{{{*/
        if (($model = Account::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }/*}}}*/

}
