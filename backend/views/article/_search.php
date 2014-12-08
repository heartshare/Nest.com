<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<a href="javascript:void(0)" onclick="showSearchForm()" id="searchBtn">显示/隐藏搜索项</a>
<script>
var ShowOrHide = {};
ShowOrHide['0'] = 'none';
ShowOrHide['1'] = 'block';
clickTimes = 1;

function showSearchForm () {
    $('#searchForm').css('display', ShowOrHide[clickTimes % 2]);
    clickTimes ++;
}
</script>

<div class="content-search" style="display:none" id="searchForm">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title')->textInput(); ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']); ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']); ?>
    </div>

</div>
