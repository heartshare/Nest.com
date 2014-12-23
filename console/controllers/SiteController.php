<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

/**
 * SiteController class file.
 * @Author haoliang
 * @Date 10.12.2014 17:51
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        echo $this->id . '->' . $this->action->id;
        echo "\n";
        echo Yii::getAlias('@tests');
    }
}
