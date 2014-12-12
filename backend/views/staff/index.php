<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-index">

    <p>
        <?= Html::a('create a new record', ['create']); ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'ctime:datetime',
            [
                'attribute' => 'is_disabled',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['is_disabled'][$model->is_disabled];
                }
            ],
            [
                'attribute' => 'time_kind',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['time_kind'][$model->time_kind];
                }
            ],
            'formal_at:datetime',
            // 'remark',
            'real_name',
            // 'qq',
            // 'avatar',
            'phone',
            // 'alipay',
            // 'summary',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'password' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-refresh'
                        ]);
                    },
                    'reset' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-screenshot'
                        ]);
                    },
                    'freeze' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-stop'
                        ]);
                    },
                    'assign' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-flash'
                        ]);
                    },
                    'content' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-send'
                        ]);
                    },
                ],
                'template' => '{view} {update} {password} {reset} {freeze} {assign} {content} {delete}',
            ],
        ],
    ]); ?>

</div>
