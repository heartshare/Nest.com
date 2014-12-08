<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => '媒体平台',
                'value' => function ($model) {
                    return $model->platform->name;
                }
            ],
            [
                'attribute' => '媒体帐号',
                'value' => function ($model) {
                    return $model->account->name;
                }
            ],
            'staff_id',
            'name',
            'summary',
            'ctime:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
