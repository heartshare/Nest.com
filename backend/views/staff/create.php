<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;


/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = 'Create Staff';
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-create">

    <?= $this->render('_form', [
        'model' => $model,
        'role' => $role,
    ]) ?>

</div>
