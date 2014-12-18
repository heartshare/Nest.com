<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use backend\models\StaffCategory;


/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = 'role';
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-assign">

<h3>请选择要给 <?= Html::a($staff->name, ['view', 'id' => $staff->id]) ?> 分配的角色</h3>

<?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'role_id')->label(false)->dropDownList(
        $role,
        ['prompt' => ' -- please select --']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('submit', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
