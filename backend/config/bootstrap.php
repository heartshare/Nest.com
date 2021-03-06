<?php

# convension
/*{{{*/
\Yii::$container->set('yii\i18n\Formatter', [
    'datetimeFormat' => 'php:Y-m-d H:i',
]);

\Yii::$container->set('yii\data\ActiveDataProvider', [
    'pagination' => [
        'pageSize' => 50,
    ],
]);

\Yii::$container->set('kartik\datetime\DateTimePicker', [
    'type'  => 1, # most simple function provider
    'language'      => 'zh-CN',
    'pluginOptions' => [
        'autoclose' => true,
        'format'    => 'yyyy-mm-dd hh:ii'
    ]
]);

\Yii::$container->set('kartik\date\DatePicker', [
    'options'       => ['placeholder' => '选择时间'],
    'language'      => 'zh-CN',
    'pluginOptions' => [
        'format'         => 'yyyy-mm-dd',
        'todayHighlight' => true,
        'autoclose'      => true,
    ]
]);

\Yii::$container->set('dosamigos\ckeditor\CKEditor', [
    'options' => ['rows' => 6],
    'preset' => 'standard',
]);
/*}}}*/

# function
/*{{{*/
if (!method_exists('d')) {
    function d()
    {
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
    }
}

if (!method_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die;
    }
}
/*}}}*/

