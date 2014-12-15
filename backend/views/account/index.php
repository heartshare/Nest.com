<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accounts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-index">

    <p>
        <?= Html::a('create a new record', ['create']); ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'platform_id',
                'value' => function ($model) {
                    return $model->platform->name;
                }
            ],
            'staff_id',
            'name',
            'uid',
            // 'avatar',
            // 'ctime:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'trash' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-trash'
                        ]);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-fire',
                            'title' => 'Delete',
                            'data-confirm' => 'Are you sure you want to delete this item?',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                ],
                'template' => ' {view} {update} {trash} {delete}',
            ],
        ],
    ]); ?>

</div>
