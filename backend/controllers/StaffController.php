<?php

/*{{{namespace*/ 
namespace backend\controllers;

use Yii;

use backend\models\Staff;
use backend\models\PasswordForm;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;

use yii\web\NotFoundHttpException;
use yii\web\UnauthorizedHttpException;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;
/*}}}*/

/**
 * StaffController implements the CRUD actions for Staff model.
 */
class StaffController extends Controller
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
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'password'],
                        'roles' => ['@'],
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
                'id', 'name', 'ctime', 'is_disabled', 'time_kind', 
                'formal_at', 'real_name', 'phone'
            ]),
        ]);

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
        ]);
    }/*}}}*/

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

    protected function generateFileName($extension)
    {/*{{{*/
        return uniqid( Yii::$app->params['uniqueImg']) . '.' . $extension;
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

}
