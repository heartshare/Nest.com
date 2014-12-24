<?php

namespace backend\models;

use Yii;

/**
 * Rbac class file.
 * @Author haoliang
 * @Date 24.12.2014 17:02
 */
class Role extends \yii\db\ActiveRecord
{

    public $name, $description;

    public function rules()
    {/*{{{*/
        return [
            [['name', 'description'], 'required'],
            ['name', 'string', 'max' => 64],
            ['description', 'string'],
            ['name', 'match', 'pattern' => '/^[a-zA-Z_0-9]{1,64}$/', 'message' => 'invalide name']
        ];
    }/*}}}*/

    public function attributeLabels()
    {/*{{{*/
        return [
            'name' => '角色名称',
            'description' => '描述',
            'createdAt' => '创建时间',
            'updatedAt' => '修改时间',
        ];
    }/*}}}*/


}
