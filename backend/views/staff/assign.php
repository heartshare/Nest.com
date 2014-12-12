<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
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

<h3>请选择要给 <?= Html::a($staff->name, ['view', 'id' => $staff->id]) ?> 分配的权限</h3>

<?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'role')->dropDownList(
        ArrayHelper::map($roleArr, 'name', 'description'),
        ['prompt' => ' -- please select --']
    ); ?>

    <?= $form->field($model, 'permission')->checkboxList(
        ArrayHelper::map($permissionArr, 'name', 'description')
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('submit', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
