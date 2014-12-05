<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Staff */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-view">

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
            'name',
            'ctime:datetime',
            [
                'attribute' => 'is_disabled',
                'value' => Yii::$app->params['enumData']['is_disabled'][$model->is_disabled]
            ],
            [
                'attribute' => 'time_kind',
                'value' => Yii::$app->params['enumData']['time_kind'][$model->time_kind]
            ],
            'formal_at:datetime',
            'remark',
            'real_name',
            'qq',
            [
                'attribute' => 'avatar',
                'format' => 'raw',
                'value' => Html::img('@web/uploads/' . $model->avatar, ['alt' => $model->name . '\'s avatar', 'style' => "height:200px;"])
            ],
            'phone',
            'alipay',
            'summary',
        ],
    ]) ?>

</div>
