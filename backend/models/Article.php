<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property integer $staff_id
 * @property string $title
 * @property string $content
 * @property integer $is_draft
 * @property integer $staff_visible
 * @property integer $is_top
 * @property integer $ctime
 * @property integer $top_rank
 *
 * @property Staff $staff
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {/*{{{*/
        return '{{%article}}';
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            [['title', 'content', 'is_draft', 'staff_visible', 'is_top'], 'required'],
            [['staff_id', 'is_draft', 'staff_visible', 'is_top', 'ctime', 'top_rank'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {/*{{{*/
        return [
            'id' => '编号',
            'staff_id' => '创建者编号',
            'title' => '标题',
            'content' => '内容',
            'is_draft' => '草稿',
            'staff_visible' => '员工可见性',
            'is_top' => '置顶',
            'ctime' => '创建时间',
            'top_rank' => '置顶权重',
        ];
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {/*{{{*/
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }/*}}}*/

    public function beforeSave($isInsert)
    {/*{{{*/
        if (parent::beforeSave($isInsert)) {
            if ($isInsert) {
                $this->staff_id = intval(Yii::$app->getUser()->identity->id);
                $this->ctime = time();
            }
            return true;
        }
        return false;
    }/*}}}*/

}
