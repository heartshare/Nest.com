<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%staff_category}}".
 *
 * @property integer $staff_id
 * @property integer $category_id
 * @property integer $can_browse
 * @property integer $can_verify
 * @property integer $can_curd
 *
 * @property Category $category
 * @property Staff $staff
 */
class StaffCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {/*{{{*/
        return '{{%staff_category}}';
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            [['staff_id', 'category_id'], 'required'],
            [['staff_id', 'category_id', 'can_browse', 'can_verify', 'can_curd'], 'integer'],
            [['can_browse', 'can_verify', 'can_curd'], 'default', 'value' => 0],
        ];
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {/*{{{*/
        return [
            'staff_id' => '员工',
            'category_id' => '分类',
            'can_browse' => '查看分类下所有人的内容',
            'can_verify' => '审核分类下所有人的内容',
            'can_curd' => '增删改查分类下个人的内容',
        ];
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {/*{{{*/
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {/*{{{*/
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }/*}}}*/

    public static function getByUniqueId($uniqueId)
    {/*{{{*/
        $model = static::find()->where(['unique_id' => $uniqueId])->one();
        return $model ?: (new static);
    }/*}}}*/

}
