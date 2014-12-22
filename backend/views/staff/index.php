<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="staff-index">

    <p>
        <?= Html::a('create a new record', ['create']); ?>
    </p>

    <?= \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'grid-view',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            #'formal_at:datetime',
            // 'remark',
            [
                'attribute' => 'role_id',
                'value' => function ($model) {
                    return Yii::$app->getSession()->getFlash('KVRole')[$model->role_id];
                }
            ],
            'real_name',
            // 'qq',
            // 'avatar',
            'phone',
            'alipay',
            // 'summary',
            [
                'attribute' => 'time_kind',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['time_kind'][$model->time_kind];
                }
            ],
            [
                'attribute' => 'is_disabled',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['is_disabled'][$model->is_disabled];
                }
            ],
            'ctime:datetime',

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
                    'role' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-flash',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '分配角色',
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
                            'data-confirm' => '确定删除这条记录?',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-fire',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '销毁',
                            'data-confirm' => '确定销毁这条记录?',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]);
                    },
                ],
                'template' => '{view} {update} {password} {reset} {freeze} {role} {content} {trash} {delete} ',
            ],
        ],
    ]); ?>

</div>

<?php
    $this->registerJs("
        $('[data-toggle=\"tooltip\"]').tooltip(); 
    ", \yii\web\View::POS_READY);
?>

