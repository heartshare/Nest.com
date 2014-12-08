<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Platform */

$this->title = 'Create Platform';
$this->params['breadcrumbs'][] = ['label' => 'Platforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="platform-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
