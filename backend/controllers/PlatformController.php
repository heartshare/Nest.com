<?php

namespace backend\controllers;

use Yii;
use backend\models\Platform;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * PlatformController implements the CRUD actions for Platform model.
 */
class PlatformController extends BackendController
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
                    'only' => ['index', 'view', 'create', 'update', 'trash', 'delete'],
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
     * Lists all Platform models.
     * @return mixed
     */
    public function actionIndex()
    {/*{{{*/

        # 如果当前登录者的角色为 role/leader, 可以见到被 trashed 的记录
        $roles = Yii::$app->authmanager->getRolesByUser(Yii::$app->getUser()->identity->id);
        if (isset($roles['god']) || isset($roles['leader']))
            $where = [];
        else {
            $where = [
                'is_trashed' => Platform::UNTRASHED,
            ];
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Platform::find()->select([
                'id', 'name', 'ctime', 'staff_id'
            ])->where($where),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }/*}}}*/

    /**
     * Displays a single Platform model.
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
     * Creates a new Platform model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {/*{{{*/
        $model = new Platform();

        if ($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view', 'id' => $model->id]);

        return $this->render('create', [
            'model' => $model,
        ]);
    }/*}}}*/

    /**
     * Updates an existing Platform model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {/*{{{*/
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }/*}}}*/

    /**
     * Deletes an existing Platform model.
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
     * Finds the Platform model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Platform the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {/*{{{*/
        if (($model = Platform::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }/*}}}*/

}
