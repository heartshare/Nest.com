<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<a href="javascript:void(0)" id="searchBtn">显示/隐藏搜索项</a>


<?php
    $this->registerJs("

        var ShowOrHide = {};
        ShowOrHide['0'] = 'none';
        ShowOrHide['1'] = 'block';
        clickTimes = 1;

        $('#searchBtn').click(function(){
            $('.article-search').css('display', ShowOrHide[clickTimes % 2]);
            clickTimes ++;
        });

    ", \yii\web\View::POS_READY);
?>

<div class="article-search" style="display:none" id="searchForm">

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
