<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Account */

$this->title = 'Create Account';
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-create">

    <?= $this->render('_form', [
        'model' => $model,
        'platform' => $platform
    ]) ?>

</div>
