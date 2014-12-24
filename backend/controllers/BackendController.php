<?php

namespace backend\controllers;

use Yii;

use backend\models\Backend;

/**
 * BackendController class file.
 * @Author haoliang
 * @Date 15.12.2014 16:44
 */
abstract class BackendController extends \yii\web\Controller
{

    # 可以进行查询的 Model 实例, 需要在 init 方法中生成
    public $queryModel = false;

    # 涉及单条数据的查看/修改/删除操作时请求的数据对象
    private $_model;

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

    /**
     * 根据主键获取数据对象
     * @param integer $id
     * @param ActiveQueryInterface $query
     * @return model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {/*{{{*/
        if (!$this->queryModel)
            throw new \yii\web\ServerErrorHttpException('queryModel 属性未被初始化!');
        if (!$this->_model)
            $this->_model = $this->queryModel->where(['id' => $id])->one();
        # 如果该记录已被删除, 亦不可查询
        if ($this->_model->is_trashed != Backend::UNTRASHED || ! $this->_model)
            throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
        return $this->_model;
    }/*}}}*/

}
