<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

#use common\models\LoginForm;
use common\models\StaffLogin;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors()
    {/*{{{*/
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'logout'],
                'rules' => [
                    [
                        'actions' => ['logout', 'index'],
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
    }/*}}}*/

    public function actions()
    {/*{{{*/
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }/*}}}*/

    public function actionIndex()
    {/*{{{*/
        #\dd(Yii::$app->getUser()->can('updateOwnContent'));
        #$auth = Yii::$app->authManager;
        #\dd($auth->getAssignments( Yii::$app->getUser()->identity->id), $auth->getPermissions(), $auth->getRoles(), $auth->getRules());
        return $this->render('index');
    }/*}}}*/

    public function actionLogin()
    {/*{{{*/
        if (!\Yii::$app->user->isGuest)
            return $this->goHome();

        $model = new StaffLogin();
        if ($model->load(Yii::$app->request->post()) && $model->login())
            return $this->goBack();

        return $this->render('staffLogin', [
            'model' => $model,
        ]);
    }/*}}}*/

    public function actionLogout()
    {/*{{{*/
        Yii::$app->user->logout();

        return $this->goHome();
    }/*}}}*/

}
