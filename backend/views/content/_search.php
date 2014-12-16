<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\ContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<a href="javascript:void(0)" id="searchBtn">显示/隐藏搜索项</a>

<?php
    $this->registerJs("

        var ShowOrHide = {};
        ShowOrHide['0'] = 'none';
        ShowOrHide['1'] = 'block';
        clickTimes = 1;

        $('#searchBtn').click(function(){
            $('.content-search').css('display', ShowOrHide[clickTimes % 2]);
            clickTimes ++;
        });

    ", \yii\web\View::POS_READY);
?>

<div class="content-search" style="display:none" id="searchForm">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'class' => 'form-inline',
        ]
    ]); ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map($category, 'id', 'name'),
        ['prompt' => ' -- please select -- ']
    ) ?>

    <?php echo $form->field($model, 'is_verified')->dropDownList(
        Yii::$app->params['enumData']['is_verified'],
        ['prompt' => ' -- please select -- ']
    ) ?>

    <?php echo $form->field($model, 'is_published')->dropDownList(
        Yii::$app->params['enumData']['is_published'],
        ['prompt' => ' -- please select -- ']
    ) ?>

    <?php echo $form->field($model, 'is_important')->dropDownList(
        Yii::$app->params['enumData']['is_important'],
        ['prompt' => ' -- please select -- ']
    ) ?>

    <?php #echo $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'title') ?>

    <?php # echo $form->field($model, 'expect_send_at') ?>

    <?php // echo $form->field($model, 'source_url') ?>

    <?php // echo $form->field($model, 'album') ?>

    <?php echo $form->field($model, 'ctimeBegin')->widget(DateTimePicker::className(), [
        'options' => [
            'value' => empty($model->ctimeBegin) ? '' : date('Y-m-d H:i', intval($model->ctimeBegin)),
        ],
    ]) ?>

    <?php echo $form->field($model, 'ctimeEnd')->widget(DateTimePicker::className(), [
        'options' => [
            'value' => date('Y-m-d H:i', intval($model->ctimeEnd) ?: time() + 5 * 60),
        ],
    ]) ?>

    <?= $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'is_draft') ?>

    <?php // echo $form->field($model, 'mtime') ?>

    <?php // echo $form->field($model, 'modified_staff_id') ?>

    <?php // echo $form->field($model, 'verified_at') ?>

    <?php // echo $form->field($model, 'rate') ?>

    <?php // echo $form->field($model, 'verified_staff_id') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'actual_send_at') ?>

    <?php // echo $form->field($model, 'publiced_url') ?>

    <?php // echo $form->field($model, 'reprint_num') ?>

    <?php // echo $form->field($model, 'comment_num') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

