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

    <?php if (Yii::$app->controller->action->id == 'create') : ?>
    <?= $form->field($model, 'role_id')->dropDownList(
        $role,
        ['prompt' => ' -- please select -- ']
    ); ?>
    <?php endif ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'time_kind')->radioList(
        Yii::$app->params['enumData']['time_kind']
    ) ?>

    <?= $form->field($model, 'formal_at')->widget(DatePicker::className(), [
        'options' => [
            # 默认三个月转正
            'value' => $model->isNewRecord
            ? date('Y-m-d', time() + 3 * 30 * 24 * 60 * 60) 
            : ( empty($model->formal_at) ? '' : date('Y-m-d', $model->formal_at))
        ]
    ]) ?>

    <?= $form->field($model, 'remark')->textarea(['maxlength' => 512, 'rows' => '5']) ?>

    <?= $form->field($model, 'real_name')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => 12]) ?>

    <?= Html::img( Yii::$app->request->baseUrl . Yii::$app->params['uploadDir'] . '/' . $model->avatar, ['style' => 'height: 80px;']); ?>

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
