<?php

namespace backend\controllers;

use Yii;

/**
 * BackendController class file.
 * @Author haoliang
 * @Date 15.12.2014 16:44
 */
abstract class BackendController extends \yii\web\Controller
{
    /**
     * @brief trash but not real delete a record
     * @param $id
     * @return page
     */
    public function actionTrash($id)
    {/*{{{*/
        $model = $this->findModel($id);
        $model->scenario = 'trash';
        $model->is_trashed = ($model->is_trashed + 1) % 2;
        if ($model->save())
            return $this->redirect(['index']);
        throw new \yii\web\ServerErrorHttpException('软删除 失败');
    }/*}}}*/

}
