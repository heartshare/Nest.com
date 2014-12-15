<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%platform}}".
 *
 * @property integer $id
 * @property string $name
 * @property integer $staff_id
 * @property integer $ctime
 *
 * @property Account[] $accounts
 * @property Category[] $categories
 * @property Staff $staff
 */
class Platform extends Backend
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {/*{{{*/
        return '{{%platform}}';
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            ['name', 'required'],
            [['is_trashed', 'staff_id', 'ctime'], 'integer'],
            [['name'], 'string', 'max' => 10]
        ];
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {/*{{{*/
        return [
            'id' => '编号',
            'name' => '媒体名称',
            'staff_id' => '创建者',
            'ctime' => '创建时间',
            'is_trashed'  => '是否已软删除',
        ];
    }/*}}}*/

    public function beforeSave($isInsert)
    {/*{{{*/
        if (parent::beforeSave($isInsert)) {
            if ($isInsert) {
                $this->ctime = time();
                $this->staff_id = Yii::$app->getUser()->identity->id;
            } else {

            }
            return true;
        }
        return false;
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {/*{{{*/
        return $this->hasMany(Account::className(), ['platform_id' => 'id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {/*{{{*/
        return $this->hasMany(Category::className(), ['platform_id' => 'id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {/*{{{*/
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }/*}}}*/

}
