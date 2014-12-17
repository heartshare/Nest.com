<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = 'Verify Staff: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Content', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Verify';
?>

<div class="content-verify">

    <div class="content-form">

        <?php $form = ActiveForm::begin([ 'options' => [ 'enctype' => 'multipart/form-data' ] ]); ?>

        <?= $form->field($model, 'is_verified')->dropDownList(
            $is_verified,
            ['prompt' => ' -- please select -- ']
        ) ?>

        <?= $form->field($model, 'rate')->dropDownList(
            Yii::$app->params['enumData']['rate'],
            ['prompt' => ' -- please select --']
        ) ?>

        <?= $form->field($model, 'remark')->textarea(['maxlength' => 512, 'rows' => '5']) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'verify', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
