<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <?= $this->render('_search', [
        'model' => $searchModel,
        'category' => $category,
        #'staff' => $staff,
    ]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return $model->category->name;
                }
            ],
            #'staff_id',
            'title',
            #'content:html',
            'expect_send_at:datetime',
            #'source_url:url',
            // 'album',
            'ctime:datetime',
            [
                'attribute' => 'is_draft',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['is_draft'][$model->is_draft];
                }
            ],
            // 'is_important',
            #'mtime:datetime',
            #'modified_staff_id',
            [
                'attribute' => 'is_verified',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['is_verified'][$model->is_verified];
                }
            ],
            // 'verified_at',
            // 'rate',
            // 'verified_staff_id',
            // 'remark',
            [
                'attribute' => 'is_published',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['is_published'][$model->is_published];
                }
            ],
            // 'actual_send_at',
            // 'publiced_url:url',
            // 'reprint_num',
            // 'comment_num',
            // 'rank',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'verify' => function ($url, $model, $key) {
                        return Html::a('', $url, [
                            'class' => 'glyphicon glyphicon-screenshot'
                        ]);
                    },
                ],
                'template' => '{view} {update} {verify} {delete}',
            ],
        ],
    ]); ?>

</div>
