<?php

/*{{{namespace*/ 
namespace backend\controllers;

use Yii;

use backend\models\Backend;
use backend\models\Staff;
use backend\models\PasswordForm;
use backend\models\Category;
use backend\models\StaffCategory;
use backend\models\AssignForm;

use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

use yii\web\NotFoundHttpException;
use yii\web\UnauthorizedHttpException;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;
/*}}}*/

/**
 * StaffController implements the CRUD actions for Staff model.
 */
class StaffController extends BackendController
{

    public function behaviors()
    {/*{{{*/
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'trash' => ['post'],
                ],
            ],
            'acess' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete', 'password', 'reset', 'freeze', 'content', 'role', 'trash'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['view', 'update', 'delete', 'password', 'reset', 'freeze', 'content', 'role', 'trash'],
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
     * Lists all Staff models.
     * @return mixed
     */
    public function actionIndex()
    {/*{{{*/
        $dataProvider = new ActiveDataProvider([
            'query' => Staff::find()->select([
                'id', 'name', 'ctime', 'is_disabled', 'time_kind', 'role_id',
                'formal_at', 'real_name', 'phone', 'alipay'
            ])->where(['is_trashed' => 0]),
        ]);

        Yii::$app->getSession()->setFlash('KVRole', $this->getKVRole());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }/*}}}*/

    /**
     * Displays a single Staff model.
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
     * Creates a new Staff model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {/*{{{*/
        $model = new Staff();

        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $this->dealSingleUploadFile($model, 'avatar');
            if ($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'role' => $this->getKVRole(),
        ]);
    }/*}}}*/

    /**
     * Updates an existing Staff model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {/*{{{*/
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $this->dealSingleUploadFile($model, 'avatar');
            if ($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'role' => $this->getKVRole(),
        ]);
    }/*}}}*/

    /**
    * @brief change staff password, need old password
    * @param $id
    * @return page
     */
    public function actionPassword($id)
    {/*{{{*/
        $model = PasswordForm::findById($id);
        $message =false;

        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate()) {
            $staffModel = Staff::findOne($id);
            $staffModel->scenario = 'password';
            $staffModel->pwd = Yii::$app->getSecurity()->generatePasswordHash($model->new_pwd);

            if ($staffModel->save())
                $message = "密码修改成功";
            else
                $message = "密码修改失败";
        }

        return $this->render('password', [
            'model' => $model,
            'message' => $message,
        ]);
    }/*}}}*/

    /**
    * @brief reset staff password 
    * using a specified value in Yii::$app->params['initPassword']
    * @param $id
    * @return page
     */
    public function actionReset($id)
    {/*{{{*/
        $model = $this->findModel($id);
        $model->scenario = 'password';
        $model->pwd = $model->generateInitPassword();
        if ($model->save())
            $this->redirect(['view', 'id' => $id]);
        else
            throw new \yii\web\ServerErrorHttpException($model->name . '密码重置失败');
    }/*}}}*/

    /**
     * @brief freeze or unfreeze a staff
     * @param $id
     * @return page
     */
    public function actionFreeze($id)
    {/*{{{*/
        $staff = $this->findModel($id);
        $staff->scenario = 'freeze';
        $staff->is_disabled = ($staff->is_disabled + 1) % 2;
        if ($staff->save())
            $this->redirect(['index']);
        else
            throw new \yii\web\ServerErrorHttpException('禁用 "'. $staff->name  .'" 用户失败');
    }/*}}}*/

    /**
     * @brief assign category and content under that category to user
     * @return page
     */
    public function actionContent($id)
    {/*{{{*/
        $categoryProvider = new ActiveDataProvider([
            'query' => Category::find()->joinWith('account'),
        ]);
        $staff = $this->findModel($id);

        # 如果是通过表单 post 提交
        if ( Yii::$app->getRequest()->isPost) {
            $staff_id = $staff->id;
            # 保存提示信息
            $message = [];
            $post = Yii::$app->getRequest()->post();

            # 重置所有权限
            $sc = StaffCategory::find()->where(['staff_id' => $staff_id])->all();
            if (!array_walk($sc, function ($item) { $item->delete(); }))
                throw new \yii\web\ServerException('重置所有权限失败!');

            if (isset($post['selection'])) {

                foreach ($post['selection'] as $category) {
                    $uniqueId = Backend::catUniqueId($staff_id, $category);

                    # 根据用户编号/分类编号确定/获取/更新 表staff_category中唯一的一条记录
                    $model              = StaffCategory::getByUniqueId($uniqueId);
                    $model->staff_id    = $staff_id;
                    $model->category_id = $category;
                    $model->unique_id   = $uniqueId;

                    # 重置所有权限
                    $model->can_browse  = $model->can_verify = $model->can_curd = 0;
                    $permissionArr = isset($post['staff_category'][$category]) ? $post['staff_category'][$category]: false;
                    if ($permissionArr) {
                        foreach ($permissionArr as $permission) {
                            $model->$permission = 1;
                        }
                    }

                    # 保存错误信息
                    if (!$model->save())
                        $message = [
                            'status' => false,
                            #'info' => $model->getErrors()
                            'info' => '分配失败'
                        ];
                }
            }

            # 提示成功信息
            if (!$message)
                $message = ['status' => true, 'info' => '分配成功!'];

            Yii::$app->getSession()->setFlash('contentMessage', $message);
        }

        return $this->render('content', [
            'categoryProvider' => $categoryProvider,
            'staff' => $staff,
        ]);
    }/*}}}*/

    /**
    * @brief 分配角色
    * @param $id
    * @return page
    */
    public function actionRole($id)
    {/*{{{*/
        $model = $this->findModel($id);
        $model->scenario = 'role';

        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate() && $model->save())
            return $this->redirect(['view', 'id' => $id]);

        return $this->render('role', [
            'model' => $model,
            'staff' => Staff::findById($id),
            'role' => $this->getKVRole(),
        ]);
    }/*}}}*/

    /**
     * Deletes an existing Staff model.
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
     * Finds the Staff model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Staff the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {/*{{{*/
        if (($model = Staff::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }/*}}}*/

    /**
     * @brief 生成上传文件的不重复名
     * @param $extension 文件扩展名
     * @return string
     */
    protected function generateFileName($extension)
    {/*{{{*/
        return uniqid(Yii::$app->params['uniqueImg']) . '.' . $extension;
    }/*}}}*/

    /**
     * @brief dealSingleUploadFile 
     * 处理单个上传文件:
     * 当上传成功后, 将文件名放到数据对象对应属性中中;
     * 没有上传文件时, 销毁对应属性
     *
     * @param &$model
     * @param $attribute
     *
     * @return void
     */
    protected function dealSingleUploadFile(&$model, $attribute)
    {/*{{{*/
        # deal upload file
        $model->$attribute  = UploadedFile::getInstance($model, $attribute);
        if ($model->$attribute) {
            $fileName = $this->generateFileName($model->$attribute->extension);
            if (!$model->$attribute->saveAs('uploads/'. $fileName))
                throw new \yii\web\ServerErrorHttpException('文件上传错误');
            $model->$attribute = $fileName;
        } else
            unset($model->$attribute);
    }/*}}}*/

    protected function getKVRole()
    {/*{{{*/
        $role = Yii::$app->authmanager->getRoles();
        return \yii\helpers\ArrayHelper::map($role, 'name', 'description');
    }/*}}}*/

}
