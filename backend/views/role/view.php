<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-view">

    <p>
        <?= Html::a('Update', ['update', 'name' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'name' => $model->name], [
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
                'attribute' => '角色名称',
                'value' => $model->name
            ],
            [
                'attribute' => '描述',
                'value' => $model->description
            ],
            [
                'attribute' => '创建时间',
                'value' =>  date('Y-m-d H:i:s', $model->createdAt)
            ],
            [
                'attribute' => '修改时间',
                'value' =>  date('Y-m-d H:i:s', $model->updatedAt)
            ],
        ],
    ]) ?>

</div>
