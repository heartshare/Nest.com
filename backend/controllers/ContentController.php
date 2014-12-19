<?php

namespace backend\controllers;

use Yii;

use backend\models\Content;
use backend\models\ContentSearch;
use backend\models\Category;
use backend\models\StaffCategory;

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
    # 用户被分配的 can_curd 的分类
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
        $searchModel->where = $this->getWhere();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'category' => Category::find()->asArray()->all(),
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

        # 非本人创建且为草稿的内容, 不可见
        if ($model->staff_id !== Yii::$app->getUser()->identity->id && $model->is_draft)
            throw new ForbiddenHttpException('As record is draft, You are not allowed to perform this action.');

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

        $category = $this->getCategory();
        if (!$category)
            throw new ForbiddenHttpException('您尚未被分配可以添加内容的分类. You are not allowed to perform this action.');

        $model = new Content();

        if ($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view', 'id' => $model->id]);

        return $this->render('create', [
            'model' => $model,
            'category' => $category,
        ]);
    }/*}}}*/

    /**
      * @brief verify content: pass or no pass
      * @param $id
      * @return page
     */
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

        # 被审核后的内容不能被修改
        if ($model->is_verified > Content::WAITFORVERIFY)
            throw new ForbiddenHttpException('内容已被审核, 不能被修改. You are not allowed to perform this action.');

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

        $model = $this->findModel($id);

        # 被审核后的内容不能被修改
        if ($model->is_verified > Content::WAITFORVERIFY)
            throw new ForbiddenHttpException('内容已被审核, 不能被删除. You are not allowed to perform this action.');

        $model->delete();

        return $this->redirect(['index']);
    }/*}}}*/

    /**
        * @brief trash but not real delete a record
        * @param $id
        * @return page
     */
    public function actionTrash($id)
    {/*{{{*/
        $model = $this->findModel($id);
        # 被审核后的内容不能被修改
        if ($model->is_verified > Content::WAITFORVERIFY)
            throw new ForbiddenHttpException('内容已被审核, 不能被删除. You are not allowed to perform this action.');

        parent::actionTrash($id);
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
            $this->_category = StaffCategory::find()->select(['category_id as id'])
                ->where(['staff_id' => Yii::$app->getUser()->identity->id])
                ->asArray()->all();

            $this->_category = Category::find()->where(['id' => array_column($this->_category, 'id')])->all();
        }
        return $this->_category;
    }/*}}}*/

    /**
      * @brief  构建 index 方法搜索之前的 where 过滤语句
      * @return array
     */
    protected function getWhere()
    {/*{{{*/

        $staff_id = Yii::$app->getUser()->identity->id;

        $role = Yii::$app->authmanager->getRolesByUser($staff_id);

        # 确保领导的上级地位, 显示所有记录
        if (isset($role['god']) || isset($role['leader']))
            return [];

        # 当前用户可以浏览[can_browse]的分类
        $staffCategory = StaffCategory::find()->where([
            'staff_id' => $staff_id,
            'can_browse' => 1,
        ])->asArray()->all();

        $staffCategory  = array_column($staffCategory, 'category_id');

        $tableName = Content::tableName();

        return [
            'and',
            # 未被软删除
            $tableName. '.is_trashed = '. Content::UNTRASHED,
            [
                'or',
                # 创建者 等同于 拥有分类的 can_curd 权限
                $tableName. '.staff_id = '. $staff_id,
                # 拥有所属分类查看权 can_browse, 但不能查看草稿
                $staffCategory 
                ? [
                    'and',
                    $tableName. '.category_id in ('. implode(', ', $staffCategory). ') ',
                    # 不是草稿
                    $tableName. '.is_draft = 0', 
                ]
                : [],
            ]
        ];

    }/*}}}*/

}
