<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_id')->dropDownList(
        ArrayHelper::map($account, 'id', 'name'),
        ['prompt' => ' -- please select -- ']
    ) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'summary')->textarea(['maxlength' => 255, 'rows' => '5']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
