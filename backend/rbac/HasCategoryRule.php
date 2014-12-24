<?php

namespace backend\rbac;

/**
 * HasCategory class file.
 * 判断当前请求的数据是否是关于登录用户的,
 * 比如: 登录者 访问自己的 员工信息, 但本条数据不一定是他自己创建的
 * @Author haoliang
 * @Date 18.12.2014 16:00
 */
class HasCategoryRule extends \yii\rbac\Rule
{
    public $name = 'HasCategory';

    public function execute($staff_id, $item, $params)
    {/*{{{*/
        # todo: 用户信息 => session
        return false;
    }/*}}}*/

}
