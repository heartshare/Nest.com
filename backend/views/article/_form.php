<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Article */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className()) ?>

    <?= $form->field($model, 'staff_visible')->radioList(Yii::$app->params['enumData']['staff_visible']) ?>

    <?= $form->field($model, 'is_top')->checkbox() ?>

    <?= $form->field($model, 'top_rank')->textInput(['value' => $model->top_rank ?: 0]) ?>

    <?= $form->field($model, 'is_draft')->checkbox() ?>

    <?= $form->field($model, 'article_category')->checkboxList($KVCategory) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
