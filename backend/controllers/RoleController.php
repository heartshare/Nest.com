<?php

namespace backend\controllers;

use Yii;
use backend\models\Role;

/**
 * RoleController class file.
 * @Author haoliang
 * @Date 24.12.2014 15:17
 */
class RoleController extends \yii\web\Controller
{

    private $_auth;

    private $_role;

    public function behavior()
    {/*{{{*/
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::clanssName(),
                'only' => [],
                'roles' => [],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }/*}}}*/

    public function actionIndex()
    {/*{{{*/
        $roles = Yii::$app->authManager->getRoles();
        return $this->render('index', [
            'model' => (new Role),
            'roles' => $roles,
        ]);
    }/*}}}*/

    public function actionCreate()
    {/*{{{*/
        $model = new Role;
        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate()) {

            $role = $this->auth->createRole($model->name);
            $role->description = $model->description;

            if (!$this->auth->add($role)) {
                throw new \yii\web\ServerErrorHttpException('');
            }
            return $this->redirect(['index']);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }/*}}}*/

    public function actionView($name)
    {/*{{{*/
        return $this->render('view', [
            'model' => $this->findRole($name),
        ]);
    }/*}}}*/

    public function actionUpdate($name)
    {/*{{{*/
        $role = $this->findRole($name);
        $model = new Role;
        $model->name = $role->name;
        $model->description = $role->description;

        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate()) {

            $role->name = $model->name;
            $role->description = $model->description;

            if (!$this->auth->update($name, $role))
                throw new NotFoundHttpException('角色修改失败');
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }/*}}}*/

    public function actionDelete($name)
    {/*{{{*/
        $role = $this->findRole($name);
        if (!$this->auth->remove($role))
            throw new ServerErrorHttpException('删除角色失败');
        return $this->redirect(['index']);
    }/*}}}*/

    public function actionAssign($name)
    {/*{{{*/
        $role = $this->findRole($name);

        if (Yii::$app->getRequest()->isPost) {
            $post = Yii::$app->getRequest()->post();

            # 重置所有权限, 如果角色没有权限, 会返回 false
            $status = $this->auth->removeChildren($role);
            #throw new \yii\web\ServerErrorHttpException('重置所有权限失败');

            if (isset($post['permission'])) {
                foreach ($post['permission'] as $p) {
                    $this->auth->addChild($role, $this->auth->getPermission($p));
                }
            }
            Yii::$app->getSession()->setFlash('message', [
                'status' => true,
                'info' => '分配成功！',
            ]);
        }
        return $this->render('assign', [
            'role' => $role,
            'permissions' => Yii::$app->authManager->getPermissions(),
            'ownPermissions' => Yii::$app->authManager->getPermissionsByRole($role->name),
        ]);
    }/*}}}*/

    public function getAuth()
    {/*{{{*/
        if (!$this->_auth)
            $this->_auth = Yii::$app->authManager;
        return $this->_auth;
    }/*}}}*/

    public function findRole($name)
    {/*{{{*/
        if (!$this->_role)
            $this->_role = $this->auth->getRole($name);
        if (!$this->_role)
            throw new NotFoundHttpException('required page no exists');
        return $this->_role;
    }/*}}}*/

}
