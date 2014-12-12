<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use backend\models\StaffCategory;


/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = 'assign';
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-assign">

<h2>请选择要给 <?= $staff->name ?> 分配的分类权限</h2>

<?php $form = ActiveForm::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $categoryProvider,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            'name',
            [
                'attribute' => '分类下内容的管理',
                'format' => 'raw',
                'value' => function ($model) {

                    # 根据用户编号/分类编号确定并获取 表staff_category中唯一的一条记录
                    $staffCategoryModel = StaffCategory::getByUniqueId(Yii::$app->getUser()->identity->id . $model->id);
                    $permissionArr = Yii::$app->params['enumData']['staff_category'];
                    $selected = [];
                    foreach (array_keys($permissionArr) as $p) {
                        if ($staffCategoryModel [$p])
                            $selected[] = $p;
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

<?php ActiveForm::end(); ?>

</div>