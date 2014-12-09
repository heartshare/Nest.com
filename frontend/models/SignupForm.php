<?php
namespace frontend\models;

#use common\models\User;
use backend\models\Staff;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $name;
    public $email;
    public $pwd;

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            ['name', 'filter', 'filter' => 'trim'],
            ['name', 'required'],
            ['name', 'unique', 'targetClass' => '\backend\models\Staff', 'message' => 'This name has already been taken.'],
            ['name', 'string', 'min' => 2, 'max' => 255],

            ['pwd', 'required'],
            ['pwd', 'string', 'min' => 6],
        ];
    }/*}}}*/

    /**
     * Signs user up.
     *
     * @return Staff|null the saved model or null if saving fails
     */
    public function signup()
    {/*{{{*/
        if ($this->validate()) {
            $staff = new Staff();
            $staff->name = $this->name;
            #$staff->pwd = Yii::$app->getSecurity()->generatePasswordHash($this->pwd);
            #$staff->auth_key = Yii::$app->security->generateRandomString();
            $staff->save();
            dd($staff->getErrors());
            return $staff;
        }

        return null;
    }/*}}}*/

}
