<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Platform */

$this->title = 'Update Platform: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Platforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="platform-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
