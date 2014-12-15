<?php

namespace backend\rbac;

use Yii;
use yii\rbac\Rule;

/**
 * OwnerRule class file.
 * @Author haoliang
 * @Date 15.12.2014 09:45
 */
class OwnerRule extends Rule
{
    public $name = 'isOwner';

    public function execute($staff_id, $item, $params)
    {/*{{{*/
        return isset($params['model']) ? $params['model']->staff_id === $staff_id : false;
    }/*}}}*/

}
