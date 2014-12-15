<?php

namespace backend\controllers;

use Yii;
use backend\models\Content;
use backend\models\ContentSearch;
use backend\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\helpers\Html;
use yii\base\Model;
use yii\web\ForbiddenHttpException;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * ContentController implements the CRUD actions for Content model.
 */
class ContentController extends BackendController
{
    private $_category;
    private $_model = false;

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
                'only' => ['index', 'view', 'create', 'update', 'delete', 'verify'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['editor', 'inspector'],
                        'matchCallback' => function ($rule, $action) {
                            return true;
                        }
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['editor'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['view', 'update', 'delete', 'verify', 'trash'],
                        'roles' => ['editor', 'inspector'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->getUser()->can($action->id.ucfirst($action->controller->id), [
                                'model' => $action->controller->findModel(Yii::$app->getRequest()->get('id'))
                            ]);
                        },
                    ],
                ],
            ],
        ];
    }/*}}}*/

    /**
     * Lists all Content models.
     * @return mixed
     */
    public function actionIndex()
    {/*{{{*/

        $searchModel = new ContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        #$dataProvider = new ActiveDataProvider([
        #    'query' => Content::find(),
        #]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'category' => $this->category,
        ]);
    }/*}}}*/

    /**
     * Displays a single Content model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {/*{{{*/
        $model = $this->findModel($id);
        $this->albumSplitHtml($model);

        return $this->render('view', [
            'model' => $model,
        ]);
    }/*}}}*/

    /**
     * Creates a new Content model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {/*{{{*/
        $model = new Content();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'category' => $this->category,
        ]);
    }/*}}}*/

    public function actionVerify($id)
    {/*{{{*/

        $model = $this->findModel($id);
        $model->scenario = 'verify';

        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate() && $model->save())
            return $this->redirect(['view', 'id' => $id]);

        # 不管审核通不通过, 内容的审核状态都不能再回到待审核状态
        $is_verified = Yii::$app->params['enumData']['is_verified'];
        unset($is_verified[0]);

        return $this->render('verify', [
            'model' => $model,
            'is_verified' => $is_verified,
        ]);
    }/*}}}*/

    /**
     * Updates an existing Content model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {/*{{{*/

        $model = $this->findModel($id);

        if (!Yii::$app->getUser()->can('updateOwnContent', ['model' => $model]))
            throw new ForbiddenHttpException('You are not allowed to perform this action.');

        $this->albumSplitHtml($model);

        if ($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view', 'id' => $model->id]);

        return $this->render('update', [
            'model' => $model,
            'category' => $this->category,
        ]);
    }/*}}}*/

    /**
     * Deletes an existing Content model.
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
     * Finds the Content model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Content the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {/*{{{*/
        if ($this->_model)
            return $this->_model;
        if (($this->_model = Content::findOne($id)) !== null)
            return $this->_model;
        throw new NotFoundHttpException('The requested page does not exist.');
    }/*}}}*/

    # split album from string to array, add to $model->album
    # generate album image html, add to $model->albumHtml
    # @param \yii\base\Model $model
    protected function albumSplitHtml(Model &$model)
    {/*{{{*/
        $model->album = explode(';', $model->album);
        $imgHtml = '';
        foreach ($model->album as $key => $pic) {
            if ($pic)
                $imgHtml .= Html::img($pic, ['alt' => '第' . $key . '张图片', 'style' => 'width: 80px; height: 80px;']) . '&nbsp;';
        }
        $model->albumHtml = $imgHtml;
    }/*}}}*/

    public function getCategory()
    {/*{{{*/
        if (!$this->_category) {
            $this->_category = Category::find()->asArray()->all();
        }
        return $this->_category;
    }/*}}}*/

}
