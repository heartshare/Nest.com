<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'expect_send_at')->textInput() ?>

    <?= $form->field($model, 'source_url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'album')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ctime')->textInput() ?>

    <?= $form->field($model, 'is_draft')->textInput() ?>

    <?= $form->field($model, 'is_important')->textInput() ?>

    <?= $form->field($model, 'mtime')->textInput() ?>

    <?= $form->field($model, 'modified_staff_id')->textInput() ?>

    <?= $form->field($model, 'is_verified')->textInput() ?>

    <?= $form->field($model, 'verified_at')->textInput() ?>

    <?= $form->field($model, 'rate')->textInput() ?>

    <?= $form->field($model, 'verified_staff_id')->textInput() ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'is_published')->textInput() ?>

    <?= $form->field($model, 'actual_send_at')->textInput() ?>

    <?= $form->field($model, 'publiced_url')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'reprint_num')->textInput() ?>

    <?= $form->field($model, 'comment_num')->textInput() ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
