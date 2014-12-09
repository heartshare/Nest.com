<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Account */

$this->title = 'Update Account: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
