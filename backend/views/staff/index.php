<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;

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
                            'class' => 'glyphicon glyphicon-refresh',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '修改密码',
                        ]);
                    },
                    'reset' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-screenshot',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '重置密码',
                        ]);
                    },
                    'freeze' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-stop',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '冻结',
                        ]);
                    },
                    'assign' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-flash',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '分配权限',
                        ]);
                    },
                    'content' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-send',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '分配分类',
                        ]);
                    },
                    'trash' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-trash',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '删除',
                        ]);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-fire',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '销毁',
                            'data-confirm' => 'Are you sure you want to delete this item?',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                ],
                'template' => '{view} {update} {password} {reset} {freeze} {assign} {content} {trash} {delete} ',
            ],
        ],
    ]); ?>

<?php
$this->registerJs(
    " $('[data-toggle=\"tooltip\"]').tooltip(); ",
    View::POS_READY);
?>

</div>
