<?php

namespace backend\models;

use Yii;

/**
 * Backend class file.
 * @Author haoliang
 * @Date 15.12.2014 17:27
 */
abstract class Backend extends \yii\db\ActiveRecord
{
    const TRASHED = 1, UNTRASHED = 0;

    public function scenarios()
    {/*{{{*/
        $s = parent::scenarios();
        $s['trash'] = ['is_trashed'];
        return $s;
    }/*}}}*/

    /**
        * @brief 拼接 unique_id
        * @param $head
        * @param $tail
        * @return string
     */
    public static function catUniqueId($head, $tail)
    {/*{{{*/
        return $head . '_' . $tail;
    }/*}}}*/

}
