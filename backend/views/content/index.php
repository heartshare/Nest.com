<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'staff_id',
            'title',
            'content',
            // 'expect_send_at',
            // 'source_url:url',
            // 'album',
            // 'ctime:datetime',
            // 'is_draft',
            // 'is_important',
            // 'mtime:datetime',
            // 'modified_staff_id',
            // 'is_verified',
            // 'verified_at',
            // 'rate',
            // 'verified_staff_id',
            // 'remark',
            // 'is_published',
            // 'actual_send_at',
            // 'publiced_url:url',
            // 'reprint_num',
            // 'comment_num',
            // 'rank',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
