<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model backend\models\PasswordForm */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Change Staff Password: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Password';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="staff-form">

    <?= $message ? Alert::widget([ 'options' => ['class' => 'alert-warning'], 'body' => $message]) : ''; ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id', ['options' => ['style' => 'display:none']])->hiddenInput(['value' => Yii::$app->getRequest()->get()['id']]); ?>
    <?= $form->field($model, 'old_pwd')->passwordInput(['maxlength' => 60, 'value' => '']) ?>
    <?= $form->field($model, 'new_pwd')->passwordInput(['maxlength' => 60, 'value' => '']) ?>
    <?= $form->field($model, 'new_pwd_again')->passwordInput(['maxlength' => 60, 'value' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

