<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * AssignForm class file.
 * @Author haoliang
 * @Date 12.12.2014 18:11
 */
class AssignForm extends \yii\base\Model
{
    public $role, $permission;

    public function rules()
    {/*{{{*/
        return [
            [['role', 'permission'], 'required']
        ];
    }/*}}}*/

    public function attributeLabels()
    {/*{{{*/
        return [
            'role' => '角色',
            'permission' => '权限',
        ];
    }/*}}}*/

}
