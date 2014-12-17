<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use backend\models\StaffCategory;


/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = 'content';
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-content">

<h3>请选择要给 <?= Html::a($staff->name, ['view', 'id' => $staff->id]) ?> 分配的权限</h3>

<?php $form = ActiveForm::begin(); ?>

    <?php
        $staffCategory = StaffCategory::find()->asArray()->all();
        $staffCategory2 = [];
        foreach ($staffCategory as $v) {
            $staffCategory2[$v['unique_id']] = $v;
        }
        Yii::$app->getSession()->setFlash('staffCategory', $staffCategory2);
        unset($staffCategory, $staffCategory2);
    ?>

    <?= GridView::widget([
        'dataProvider' => $categoryProvider,
        'columns' => [
            [
                'class' => 'yii\grid\CheckboxColumn',
                'checkboxOptions' => function ($model, $key, $index, $checkbox) {
                    $staffCategory = Yii::$app->getSession()->getFlash('staffCategory');
                    $uniqueId = Yii::$app->getRequest()->get('id').$model->id;
                    if (isset($staffCategory[$uniqueId]))
                        return ['checked' => 'checked'];
                },
            ],
            'name',
            [
                'attribute' => '分类下内容的管理',
                'format' => 'raw',
                'value' => function ($model) {

                    # 根据用户编号/分类编号确定并获取 表staff_category中唯一的一条记录
                    $uniqueId = Yii::$app->getRequest()->get('id').$model->id;
                    $staffCategory = Yii::$app->getSession()->getFlash('staffCategory');
                    $permissionArr = Yii::$app->params['enumData']['staff_category'];
                    $selected = [];
                    if (isset($staffCategory[$uniqueId])) {
                        foreach (array_keys($permissionArr) as $p) {
                            if ($staffCategory[$uniqueId][$p])
                                $selected[] = $p;
                        }
                    }

                    return Html::checkboxList(
                        'staff_category[' . $model->id . ']',
                        $selected,
                        $permissionArr
                    );
                }
            ],
            'summary',
            [
               'attribute' => 'account_id',
               'value' => function ($model) {
                   return $model->account->name;
               }
            ],
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php
        Yii::$app->getSession()->removeFlash('staffCategory');
    ?>

<?php ActiveForm::end(); ?>

</div>
