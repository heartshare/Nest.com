<?php
namespace common\models;

use Yii;
use yii\base\Model;
use yii\web\IdentityInterface;
use backend\models\Staff;

/**
 * StaffLogin class file.
 * @Author haoliang
 * @Date 09.12.2014 11:04
 */
class StaffLogin extends Model
{
    # things to be validated and stored
    public $name, $pwd, $rememberMe = true;

    private $_staff = false;

    public function rules()
    {/*{{{*/
        return [
            [['name', 'pwd'], 'required'],
            ['pwd', 'validatePwd'],
        ];
    }/*}}}*/

    public function validatePwd($attribute, $params)
    {/*{{{*/
        if ($this->hasErrors())
            return;
        $staff = $this->getStaff($this->name);
        if ( !$staff || !Yii::$app->getSecurity()->validatePassword($this->$attribute, $this->staff->$attribute))
            $this->addError($attribute, 'Incorrect username or password.');
    }/*}}}*/

    public function attributeLabels()
    {/*{{{*/
        return [
            'name' => '登录名',
            'pwd' => '密码',
            'rememberMe' => '记住我',
        ];
    }/*}}}*/

    public function getStaff()
    {/*{{{*/
        if (!$this->_staff)
            $this->_staff= Staff::findByName($this->name);

        return $this->_staff;
    }/*}}}*/

    public function login()
    {/*{{{*/
        if ($this->validate())
            return Yii::$app->user->login($this->getStaff(), $this->rememberMe ? 3600 * 24 * 30 : 0);
    }/*}}}*/

}
