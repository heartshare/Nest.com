<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">

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
            'title',
            'content:html',
            [
                'attribute' => 'staff_id',
                'format' => 'raw',
                'value' => $model->staff->name
            ],
            [
                'attribute' => 'is_draft',
                'value' => Yii::$app->params['enumData']['is_draft'][$model->is_draft]
            ],
            [
                'attribute' => 'staff_visible',
                'value' => Yii::$app->params['enumData']['staff_visible'][$model->staff_visible]
            ],
            [
                'attribute' => 'is_top',
                'value' => Yii::$app->params['enumData']['is_top'][$model->is_top]
            ],
            'ctime:datetime',
            'top_rank',
        ],
    ]) ?>

</div>
