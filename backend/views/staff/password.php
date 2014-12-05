<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PasswordForm */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Change Staff Password: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Passwor';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="staff-form">

    <?php
        \d($message);
    ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'old_pwd')->passwordInput(['maxlength' => 60]) ?>
    <?= $form->field($model, 'new_pwd')->passwordInput(['maxlength' => 60]) ?>
    <?= $form->field($model, 'new_pwd_again')->passwordInput(['maxlength' => 60]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

