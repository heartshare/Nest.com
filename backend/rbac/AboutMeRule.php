<?php

namespace backend\rbac;

/**
 * AboutMe class file.
 * 判断当前请求的数据是否是关于登录用户的,
 * 比如: 登录者 访问自己的 员工信息, 但本条数据不一定是他自己创建的
 * @Author haoliang
 * @Date 18.12.2014 16:00
 */
class AboutMeRule extends \yii\rbac\Rule
{
    public $name = 'AboutMe';

    public function execute($staff_id, $item, $params)
    {/*{{{*/
        return isset($params['model']) ? $params['model']->id === $staff_id : false;
    }/*}}}*/

}
