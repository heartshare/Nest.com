<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Role';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="staff-index">

    <p>
        <?= Html::a('create a new record', ['create']); ?>
    </p>

    <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <?php foreach ($model->attributeLabels() as $attribute) : ?>
                    <th><?= $attribute ?></th>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>

                <?php foreach ($roles as $role) : ?>
                    <tr>
                    <th><?= $role->name ?></th>
                    <th><?= $role->description ?></th>
                    <th><?= date('Y-m-d H:i:s', $role->createdAt)?></th>
                    <th><?= date('Y-m-d H:i:s', $role->updatedAt)?></th>
                    <th>
                        <?= Html::a('', ['view', 'name' => $role->name], [
                            'class' => 'glyphicon glyphicon-eye-open',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '查看',
                        ]) ?>
                        <?= Html::a('', ['update', 'name' => $role->name], [
                            'class' => 'glyphicon glyphicon-pencil',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '修改',
                        ]) ?>
                        <?= Html::a('', ['assign', 'name' => $role->name], [
                            'class' => 'glyphicon glyphicon-flash',
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '分配权限',
                        ]) ?>
                        <?= Html::a('', ['delete', 'name' => $role->name], [
                            'class' => 'glyphicon glyphicon-fire', 
                            'data-toggle' => 'tooltip',
                            'data-placement' => 'top',
                            'title' => '销毁',
                            'data-confirm' => '确定销毁这条记录?',
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ]) ?>
                    </th>
                    </tr>
                <?php endforeach; ?>

            </tbody>
          </table>
        </div>
</div>
