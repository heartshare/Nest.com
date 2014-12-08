<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Account */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'platform_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'uid')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ctime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
