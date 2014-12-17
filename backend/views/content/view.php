<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Content */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-view">

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('审核', ['verify', 'id' => $model->id], ['class' => 'btn btn-info']); ?>
        <?= Html::a('删除', ['trash', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定要删除这条内容?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => '媒体分类',
                'value' => $model->category->name,
            ],
            'staff_id',
            'title',
            'content:html',
            'expect_send_at:datetime',
            'source_url:url',
            [
                'attribute' => 'album',
                'format' => 'raw',
                'value' => $model->albumHtml,
            ],
            'ctime:datetime',
            [
                'attribute' => 'is_draft',
                'value' => Yii::$app->params['enumData']['is_draft'][$model->is_draft],
            ],
            [
                'attribute' => 'is_important',
                'value' => Yii::$app->params['enumData']['is_important'][$model->is_important],
            ],
            'mtime:datetime',
            'modified_staff_id',
            [
                'attribute' => 'is_verified',
                'value' => Yii::$app->params['enumData']['is_verified'][$model->is_verified],
            ],
            [
                'attribute' => 'verified_at',
                'value' => $model->verified_at ? date('Y-m-d', $model->verified_at) : 0
            ],
            'rate',
            'verified_staff_id',
            'remark',
            [
                'attribute' => 'is_published',
                'value' => Yii::$app->params['enumData']['is_published'][$model->is_published],
            ],
            [
                'attribute' => 'actual_send_at',
                'value' => $model->actual_send_at ? date('Y-m-d', $model->actual_send_at) : 0
            ],
            'publiced_url:url',
            'reprint_num',
            'comment_num',
            'rank',
        ],
    ]) ?>

</div>
