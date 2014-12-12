<?php

namespace backend\rbac;

use Yii;
use yii\rbac\Rule;

/**
 * EditorRule class file.
 * @Author haoliang
 * @Date 10.12.2014 18:12
 */
class EditorRule extends Rule
{
    public $name = 'isEditor';

    public function execute($user, $item, $params)
    {/*{{{*/
        $yes = $params['content']->staff_id === $user;
        return false;
    }/*}}}*/

}
