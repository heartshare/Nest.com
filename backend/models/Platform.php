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
class Platform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%platform}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'staff_id', 'ctime'], 'required'],
            [['staff_id', 'ctime'], 'integer'],
            [['name'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'name' => '媒体名称',
            'staff_id' => '创建者编号',
            'ctime' => '创建时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccounts()
    {
        return $this->hasMany(Account::className(), ['platform_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['platform_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }
}
