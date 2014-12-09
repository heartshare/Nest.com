<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="staff-form">

    <?php $form = ActiveForm::begin([ 'options' => [ 'enctype' => 'multipart/form-data' ] ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'time_kind')->radioList(
        Yii::$app->params['enumData']['time_kind']
    ) ?>

    <?= $form->field($model, 'formal_at')->widget(DatePicker::className(), [
        'options' => [
            # 默认三个月转正
            'value' => date('Y-m-d', $model->formal_at ?  (is_int($model->formal_at) ?$model->formal_at : strtotime($model->formal_at)) : time() + 3 * 30 * 24 * 60 * 60)
        ]
    ]) ?>

    <?= $form->field($model, 'remark')->textarea(['maxlength' => 512, 'rows' => '5']) ?>

    <?= $form->field($model, 'real_name')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'avatar')->fileInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'alipay')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'summary')->textarea(['maxlength' => 512, 'rows' => '5']) ?>

    <?= $form->field($model, 'is_disabled')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
