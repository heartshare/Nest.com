<?php

namespace backend\models;

use Yii;

/**
 * PasswordForm class file.
 * @Author haoliang
 * @Date 05.12.2014 11:19
 */
class PasswordForm extends \yii\db\ActiveRecord
{
    public $old_pwd, $new_pwd, $new_pwd_again;

    public static function tableName()
    {/*{{{*/
        return '{{%staff}}';
    }/*}}}*/

    public function rules()
    {/*{{{*/
        return [
            [['old_pwd', 'new_pwd', 'new_pwd_again'], 'required', 'message' => '请填写 {attribute}'],
            [['old_pwd', 'new_pwd', 'new_pwd_again'], 'string', 'max' => 18, 'min' => 6, 'message' => '{attribute} 长度必须要在6-18位之间'],
            ['new_pwd_again', 'compare', 'compareAttribute' => 'new_pwd', 'message' => '两次输入密码不一致'],
        ];
    }/*}}}*/

    public function attributeLabels()
    {/*{{{*/
        return [
            'old_pwd' => '原密码',
            'new_pwd' => '新密码',
            'new_pwd_again' => '确认新密码',
        ];
    }/*}}}*/

}
