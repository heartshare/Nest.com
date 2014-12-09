<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * RbacController class file.
 * @Author haoliang
 * @Date 09.12.2014 17:06
 */
class RbacController extends Controller
{
    public function actionInit()
    {/*{{{*/
        $auth = Yii::$app->authManager;
    }/*}}}*/

}
