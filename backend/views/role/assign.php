<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = 'Assign Permission';
$this->params['breadcrumbs'][] = ['label' => 'Role', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Role-Assign">

    <h3>请选择要给角色 <?= Html::a($role->description , ['view', 'name' => $role->name]) ?> 分配的权限</h3>

    <?php if (($message = Yii::$app->getSession()->getFlash('message')) !== null) : ?>
        <?= \yii\bootstrap\Alert::widget([
            'options' => [
                'class' =>  $message['status'] ? 'alert-info' : 'alert-warning',
            ],
            'body' => $message['info'],
        ]); ?>
    <?php Yii::$app->getSession()->removeFlash('contentErrors'); ?>
    <?php endif ?>


    <?php $form = ActiveForm::begin(); ?>

        <?= Html::checkboxList('permission', array_keys($ownPermissions),
            \yii\helpers\ArrayHelper::map($permissions, 'name', 'description')
        ); ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
