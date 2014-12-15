<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $id
 * @property integer $platform_id
 * @property integer $account_id
 * @property integer $staff_id
 * @property string $name
 * @property string $summary
 * @property integer $ctime
 *
 * @property Account $account
 * @property Platform $platform
 * @property Staff $staff
 * @property Content[] $contents
 */
class Category extends Backend
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            [['account_id', 'name', 'summary'], 'required'],
            [['is_trashed', 'platform_id', 'account_id', 'staff_id', 'ctime'], 'integer'],
            [['name'], 'string', 'max' => 10],
            [['summary'], 'string', 'max' => 255]
        ];
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {/*{{{*/
        return [
            'id' => '编号',
            'platform_id' => '媒体平台',
            'account_id' => '媒体账户',
            'staff_id' => '创建者',
            'name' => '分类名称',
            'summary' => '分类描述',
            'ctime' => '创建时间',
            'is_trashed'  => '是否已软删除',
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
    public function getAccount()
    {/*{{{*/
        return $this->hasOne(Account::className(), ['id' => 'account_id']);
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
    public function getStaff()
    {/*{{{*/
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContents()
    {/*{{{*/
        return $this->hasMany(Content::className(), ['category_id' => 'id']);
    }/*}}}*/

    public function getContentPermission()
    {/*{{{*/
        return $this->hasMany(StaffCategory::className(), ['category_id' => 'id']);
    }/*}}}*/
}
