<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%account}}".
 *
 * @property integer $id
 * @property integer $platform_id
 * @property integer $staff_id
 * @property string $name
 * @property string $uid
 * @property string $avatar
 * @property integer $ctime
 *
 * @property Platform $platform
 * @property Category[] $categories
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {/*{{{*/
        return '{{%account}}';
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            [['platform_id', 'name', 'uid', 'avatar'], 'required'],
            [['platform_id', 'staff_id', 'ctime'], 'integer'],
            [['name', 'uid'], 'string', 'max' => 20],
            [['avatar'], 'string', 'max' => 255],
            ['avatar', 'url'],
        ];
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {/*{{{*/
        return [
            'id' => '编号',
            'platform_id' => '媒体平台编号',
            'staff_id' => '创建者编号',
            'name' => '账户名称',
            'uid' => 'uid',
            'avatar' => '头像',
            'ctime' => '创建时间',
        ];
    }/*}}}*/

    public function beforeSave($isInsert)
    {/*{{{*/
        if (parent::beforeSave($isInsert)) {
            # new record
            if ($isInsert) {
                $this->ctime = time();
                $this->staff_id = Yii::$app->getUser()->identity->id;
            }
            # update record
            else {
            }
            return true;
        }
        return false;
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlatform()
    {/*{{{*/
        return $this->hasOne(Platform::className(), ['id' => 'platform_id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {/*{{{*/
        return $this->hasMany(Category::className(), ['account_id' => 'id']);
    }/*}}}*/

    public function getStaff()
    {/*{{{*/
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }/*}}}*/

}
