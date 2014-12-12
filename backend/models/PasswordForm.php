<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

/**
 * PasswordForm class file.
 * @Author haoliang
 * @Date 05.12.2014 11:19
 */
class PasswordForm extends ActiveRecord
{
    public $old_pwd, $new_pwd, $new_pwd_again;

    public static function tableName()
    {/*{{{*/
        return '{{%staff}}';
    }/*}}}*/

    public function rules()
    {/*{{{*/
        return [
            [['id', 'old_pwd', 'new_pwd', 'new_pwd_again'], 'required', 'message' => '请填写 {attribute}'],
            ['id', 'integer'],
            [['old_pwd', 'new_pwd', 'new_pwd_again'], 'string', 'max' => 18, 'min' => 6, 'message' => '{attribute} 长度必须要在6-18位之间'],
            ['new_pwd_again', 'compare', 'compareAttribute' => 'new_pwd', 'message' => '两次输入密码不一致'],
            ['old_pwd', 'validatePwd'],
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

    public function validatePwd($attribute, $params)
    {/*{{{*/
        if ($this->hasErrors())
            return;
        if (!Yii::$app->getSecurity()->validatePassword($this->$attribute, $this->pwd))
            $this->addError($attribute, 'Incorrect Old password.');
    }/*}}}*/

    public static function findById($id)
    {/*{{{*/
        $staff = static::findOne($id);
        if (!$staff)
            throw new NotFoundHttpException('该页面未找到');
        return $staff;
    }/*}}}*/

}
