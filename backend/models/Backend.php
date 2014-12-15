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
    public function scenarios()
    {/*{{{*/
        $s = parent::scenarios();
        $s['trash'] = ['is_trashed'];
        return $s;
    }/*}}}*/

}
