<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%content}}".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $staff_id
 * @property string $title
 * @property string $content
 * @property integer $expect_send_at
 * @property string $source_url
 * @property string $album
 * @property integer $ctime
 * @property integer $is_draft
 * @property integer $is_important
 * @property integer $mtime
 * @property integer $modified_staff_id
 * @property integer $is_verified
 * @property integer $verified_at
 * @property integer $rate
 * @property integer $verified_staff_id
 * @property string $remark
 * @property integer $is_published
 * @property integer $actual_send_at
 * @property string $publiced_url
 * @property integer $reprint_num
 * @property integer $comment_num
 * @property integer $rank
 *
 * @property Category $category
 * @property Staff $staff
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'staff_id', 'title', 'content', 'expect_send_at', 'source_url', 'album', 'ctime', 'is_draft', 'is_important', 'mtime', 'modified_staff_id'], 'required'],
            [['category_id', 'staff_id', 'expect_send_at', 'ctime', 'is_draft', 'is_important', 'mtime', 'modified_staff_id', 'is_verified', 'verified_at', 'rate', 'verified_staff_id', 'is_published', 'actual_send_at', 'reprint_num', 'comment_num', 'rank'], 'integer'],
            [['title'], 'string', 'max' => 30],
            [['content', 'source_url', 'album', 'remark', 'publiced_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'category_id' => '分类编号',
            'staff_id' => '创建者编号',
            'title' => '标题',
            'content' => '内容',
            'expect_send_at' => '期望的发布时间',
            'source_url' => '来源链接',
            'album' => '图片集: uri 拼接',
            'ctime' => '创建时间',
            'is_draft' => '草稿/正式内容: 0, 正式内容; 1, 草稿',
            'is_important' => '是否为重要内容: 0, 否; 1, 是',
            'mtime' => '最后修改时间',
            'modified_staff_id' => '修改者编号',
            'is_verified' => '审核状态: 0, 未审核; 1, 通过; 2, 不通过',
            'verified_at' => '审核时间',
            'rate' => '内容评级: 0, 普通; 1, 不错; 2, 赞',
            'verified_staff_id' => '审核人的用户编号',
            'remark' => '审核批注',
            'is_published' => '是否发布成功: 0, 未发布; 1, 成功; 2, 失败',
            'actual_send_at' => '实际发布时间',
            'publiced_url' => '内容发布后的地址',
            'reprint_num' => '转发数',
            'comment_num' => '评论数',
            'rank' => '排名',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['id' => 'staff_id']);
    }
}
