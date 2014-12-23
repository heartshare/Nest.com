<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map($category, 'id', 'name'),
        ['prompt' => ' -- please select -- ']
    ) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'content')->textarea(['maxlength' => 255, 'rows' => 5]) ?>

    <?= $form->field($model, 'expect_send_at')->widget(DateTimePicker::className(), [
        'options' => [
            'value' => date('Y-m-d H:i:s', intval($model->expect_send_at) ?: time() + 5 * 60),
        ],
    ]) ?>

    <?= $form->field($model, 'source_url')->textInput(['maxlength' => 255]) ?>

    <p> <?= $model->albumHtml ?> </p>

    <?= $form->field($model, 'album[]')->label('图片 1')->textInput(['value' => $model->album[0]]) ?>

    <p> 添加
        <?= Html::a('8', 'javascript:void(0)', ['id' => 'addLink']) ?>
        个图片
    </p>

    <?php for ($i = 2; $i < 10; $i ++): ?>
        <?= $form->field($model, 'album[]', [
            'options' => ['style' => 'display:none', 'id' => 'albumDiv' . $i]
        ])->label('图片'. $i)->textInput([
            'value' => isset($model->album[$i - 1]) ? $model->album[$i - 1] : ''
        ]) ?>
    <?php endfor; ?>

    <?= $form->field($model, 'is_draft')->checkbox() ?>

    <?= $form->field($model, 'is_important')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php
        $this->registerJs("

            clickTimes = 0;
            startNum = 2;
            step = 8; // only [2, 4, 8]

            $('#addLink').click(function () {
                if (clickTimes >= 8 / step) {
                    alert('最多可添加9张');
                    return false;
                }
                for (i = startNum; i < startNum + step; i ++) {
                    $('#albumDiv' +  i ).css('display', 'block');
                }
                startNum += step;
                clickTimes ++;
                $(this).parent().css('display', 'none');
            });

        ", \yii\web\View::POS_READY);
    ?>

</div>
