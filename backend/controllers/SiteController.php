<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

use common\models\StaffLogin;

/**
 * Site controller
 */
class SiteController extends \yii\web\Controller
{
    public function behaviors()
    {/*{{{*/
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'logout'],
                'rules' => [
                    [
                        'actions' => ['index', 'logout'],
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

        $auth = Yii::$app->authManager;
        #\dd( $auth->getAssignments( Yii::$app->getUser()->identity->id), $auth->getPermissions(), $auth->getRoles(), $auth->getRules());

        #$staff_id = Yii::$app->getUser()->identity->id;
        #echo " <br> <br> <br> <br> ";
        #\d( \yii\helpers\ArrayHelper::map($auth->getPermissionsByUser($staff_id ?: 1), 'name', 'description'));

        #\d("<br> <br> <br> <br> <br>", Yii::$app->getSecurity()->generatePasswordHash('languo123'));

        return $this->render('index');
    }/*}}}*/

    public function actionLogin()
    {/*{{{*/

        if (!\Yii::$app->user->isGuest)
            return $this->goHome();

        $model = new StaffLogin();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $this->storeRbacData();
            return $this->redirect(['content/index']);
        }

        return $this->render('staffLogin', [
            'model' => $model,
        ]);
    }/*}}}*/

    public function actionLogout()
    {/*{{{*/
        Yii::$app->user->logout();
        return $this->redirect(['login']);
    }/*}}}*/

    /**
        * @brief cache rbac data to session and memcache
        * @return void
     */
    protected function storeRbacData()
    {/*{{{*/
        $auth = Yii::$app->authManager;
        $staff = [];
        $rbac = [];

        # 记录登录者的权限信息
        $staff['permissions'] =  $auth->getPermissionsByUser(Yii::$app->getUser()->identity->id);
        $staff['roles'] = $auth->getRolesByUser(Yii::$app->getUser()->identity->id);
        Yii::$app->getSession()->remove('staff');
        Yii::$app->getSession()->set('staff', $staff);

        # 存储所有权限
        $rbac['permissions'] =  $auth->getPermissions();
        # 存储所有角色
        $rbac['roles'] = $auth->getRoles();
        # 存储角色拥有的权限
        foreach (array_keys($rbac['roles']) as $role) {
            $rbac['rolePermissions'][$role] = $auth->getPermissionsByRole($role);
        }
        Yii::$app->cache->delete('rbac');
        Yii::$app->cache->set('rbac', $rbac);
    }/*}}}*/

}
