<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="article-index">

    <?= $this->render('_search', [
        'model' => $searchModel,
    ]);?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            #'content:html',
            [
                'attribute' => 'is_draft',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['is_draft'][$model->is_draft];
                }
            ],
            [
                'attribute' => 'staff_visible',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['staff_visible'][$model->staff_visible];
                }
            ],
            [
                'attribute' => 'is_top',
                'value' => function ($model) {
                    return Yii::$app->params['enumData']['is_top'][$model->is_top];
                }
            ],
            'ctime:datetime',
            'top_rank',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
