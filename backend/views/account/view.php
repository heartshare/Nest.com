<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Account */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'platform_id',
                'value' => $model->platform->name
            ],
            [
                'attribute' => 'staff_id',
                'value' => $model->staff->name
            ],
            'name',
            'uid',
            [
                'attribute' => 'avatar',
                'format' => 'html',
                'value' => Html::img($model->avatar, ['alt' => $model->name . "'s avatar"])
            ],
            'ctime:datetime',
        ],
    ]) ?>

</div>
