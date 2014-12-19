<?php

namespace backend\controllers;

use Yii;

use backend\models\Article;
use backend\models\Category;
use backend\models\StaffCategory;
use backend\models\ArticleCategory;
use backend\models\ArticleSearch;

use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends BackendController
{

    public function behaviors()
    {/*{{{*/ return [
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
                            return Yii::$app->getUser()->can(
                                $action->id.ucfirst($action->controller->id),
                                [ 'model' => $action->controller->findModel(Yii::$app->getRequest()->get('id')) ]
                            );
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
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {/*{{{*/
        $searchModel = new ArticleSearch;

        $searchModel->where = $this->getWhere();
        $searchModel->orderBy = $this->getOrderBy();

        $dataProvider = $searchModel->search(Yii::$app->request->get());

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }/*}}}*/

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {/*{{{*/
        $model = $this->findModel($id);

        # god always be your side
        $role = Yii::$app->authmanager->getRolesByUser(Yii::$app->getUser()->identity->id);
        if ( ! isset($role['god']) && ! isset($role['leader'])) {

            # 根据 article.staff_visible 过滤请求
            switch ($model->staff_visible) {
            case Article::VISIBLE_NONE:
                $accessable = false;
                break;
            case Article::VISIBLE_PART_TIME:
            case Article::VISIBLE_FULL_TIME:
                $accessable = $this->getStaffVisibleFromStaff() === $model->staff_visible ? true : false;
                break;
            case Article::VISIBLE_ALL:
                $accessable = true;
                break;
            }
            if (!$accessable)
                throw new \yii\web\ForbiddenHttpException('you have no permission to execute this action.');

            # 根据 ArticleCategory 过滤请求
            # 当前用户对应的分类
            $staffCategory = StaffCategory::find()->select(['category_id'])
                ->where(['staff_id' => Yii::$app->getUser()->identity->id])->asArray()->all();
            $staffCategory = array_column($staffCategory, 'category_id');
            if (!ArticleCategory::modelExists($model->id, $staffCategory))
                throw new \yii\web\ForbiddenHttpException('you have no permission to execute this action.');
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }/*}}}*/

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {/*{{{*/
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->save())
                return $this->redirect(['view', 'id' => $model->id]);

        return $this->render('create', [
            'model' => $model,
            'KVCategory' => Category::getKVCategory()
        ]);
    }/*}}}*/

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {/*{{{*/
        $model = $this->findModel($id);
        $model->article_category = array_column(ArticleCategory::findByArticleId($id), 'category_id');

        if ($model->load(Yii::$app->request->post()) && $model->save())
            return $this->redirect(['view', 'id' => $model->id]);

        return $this->render('update', [
            'model' => $model,
            'KVCategory' => Category::getKVCategory()
        ]);
    }/*}}}*/

    /**
     * Deletes an existing Article model.
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
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {/*{{{*/
        if (($model = Article::findOne($id)) !== null)
            return $model;
        throw new NotFoundHttpException('The requested page does not exist.');
    }/*}}}*/

    /**
     * @brief get where condition before search
     * @return array
     */
    protected function getWhere()
    {/*{{{*/

        # 确保领导的上级地位, 显示所有记录
        $role = Yii::$app->authmanager->getRolesByUser(Yii::$app->getUser()->identity->id);
        if (isset($role['god']) || isset($role['leader']))
            return [];

        $where = [
            'and',
            'is_draft = '. Article::NOTDRAFT,
            # 软删除后普通角色(editor, inspector, staff)不可见
            'is_trashed = '. Article::UNTRASHED,
        ];

        # 确定当前用户的工作时间
        $where[] = ['staff_visible' => [$this->getStaffVisibleFromStaff(), 3]];

        # 确定当前用户可以浏览的分类
        $staffCategory = StaffCategory::find()
            ->select(['category_id'])
            ->where(['staff_id' => Yii::$app->getUser()->identity->id])
            ->asArray()->all();

        # 确定用户可以浏览的文章
        $articleId = ArticleCategory::find()
            ->select(['article_id'])
            ->where(['category_id' => array_column($staffCategory, 'category_id')])
            ->asArray()->all();
        if ($articleId)
            $where[] = ['id' => array_unique(array_column($articleId, 'article_id'))];

        return $where;
    }/*}}}*/

    /**
    * @brief get order by condition before search
    *
    * @return string
     */
    protected function getOrderBy()
    {/*{{{*/
        return "is_top desc, top_rank desc";
    }/*}}}*/

    /**
     * @return int
     */
    /**
     * @brief get staff.time_kind for article.staff_visible,
     * staff.time_kind + 1 === article.staff_visible
     * @param $time_kind by default it peak current logined staff's time_kind
     * @return int
     */
    protected function getStaffVisibleFromStaff($time_kind = false)
    {/*{{{*/
        return ($time_kind ? $time_kind : Yii::$app->getUser()->identity->time_kind) + 1;
    }/*}}}*/

}
