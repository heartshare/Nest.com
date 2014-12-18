<?php

namespace backend\rbac;

use Yii;
use yii\rbac\Rule;

/**
 * OwnerRule class file.
 * 判断当前请求数据对象是否是由当前登录用户创建
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
