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

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id',
            'category_id',
            'staff_id',
            'title',
            'content',
            'expect_send_at',
            'source_url:url',
            'album',
            'ctime:datetime',
            'is_draft',
            'is_important',
            'mtime:datetime',
            'modified_staff_id',
            'is_verified',
            'verified_at',
            'rate',
            'verified_staff_id',
            'remark',
            'is_published',
            'actual_send_at',
            'publiced_url:url',
            'reprint_num',
            'comment_num',
            'rank',
        ],
    ]) ?>

</div>
