<?php

namespace tests\unit\fixtures;

use Yii;

$roleArr = Yii::$app->db->createCommand(" select name from auth_item where type = 1 ")->queryAll();

$roleArr = array_column($roleArr, 'name');

$time_kindArr = array_keys( Yii::$app->params['enumData']['time_kind']);

return [
    "role_id"     => array_rand($roleArr),
    "staff_id"    => "1",
    "name"        => $faker->firstName,
    "pwd"         => Yii::$app->getSecurity()->generatePasswordHash( Yii::$app->params['userInitPassword']),
    "ctime"       => time(),
    "is_disabled" => array_rand([0,1]),
    "time_kind"   => array_rand($time_kindArr),
    "formal_at"   => time() + 60 * 60 * 24 * 30 * 3,
    "auth_key"    => Yii::$app->security->generateRandomString(),
];
