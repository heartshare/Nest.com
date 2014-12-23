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
class Content extends Backend
{
    const WAITFORVERIFY = 0;
    const TRASHED       = 1;
    const UNTRASHED     = 0;

    # 存储将图片集构造为html后的字符串
    public $albumHtml;

    public static function tableName()
    {/*{{{*/
        return '{{%content}}';
    }/*}}}*/

    public function rules()
    {/*{{{*/
        return [
            [['category_id', 'title', 'content', 'expect_send_at', 'source_url', 'is_draft', 'is_important'], 'required'],
            [['is_trashed', 'category_id', 'staff_id', 'is_draft', 'is_important', 'mtime', 'modified_staff_id', 'is_verified', 'verified_at', 'rate', 'verified_staff_id', 'is_published', 'actual_send_at', 'reprint_num', 'comment_num', 'rank'], 'integer'],
            [['title'], 'string', 'max' => 30],
            [['content', 'source_url', 'remark', 'publiced_url'], 'string', 'max' => 255],
            [['source_url', 'publiced_url'], 'url'],
            [['is_verified', 'rate', 'remark'], 'required', 'on' => 'verify'],
            ['album', 'match', 'pattern' => '/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)\.jpg$/i', 'message' => 'invalide photo uri'],
        ];
    }/*}}}*/

    public function attributeLabels()
    {/*{{{*/
        return [

            'id' => '编号',
            'category_id' => '分类',
            'staff_id' => '创建者',
            'title' => '标题',
            'content' => '内容',
            'expect_send_at' => '期望发布时间',
            'source_url' => '来源链接',
            'album' => '图片集',
            'ctime' => '创建时间',
            'is_draft' => '草稿',
            'is_important' => '重要内容',
            'mtime' => '最后修改时间',
            'modified_staff_id' => '修改者',

            'is_trashed'  => '已软删除',

            'is_verified' => '审核状态',
            'verified_at' => '审核时间',
            'rate' => '内容评级',
            'verified_staff_id' => '审核者',
            'remark' => '审核批注',

            'is_published' => '发布状态',
            'actual_send_at' => '实际发布时间',
            'publiced_url' => '发布后地址',
            'reprint_num' => '转发数',
            'comment_num' => '评论数',
            'rank' => '排名',
        ];
    }/*}}}*/

    public function beforeSave($isInsert)
    {/*{{{*/
        if (parent::beforeSave($isInsert)) {
            # new record
            if ($isInsert) {
                $this->ctime = time();
                $this->staff_id = Yii::$app->getUser()->identity->id;

                $this->expect_send_at = strtotime($this->expect_send_at);
                $this->mtime = time();
                $this->modified_staff_id = Yii::$app->getUser()->identity->id;
                $this->album = implode(';', $this->album);
                # when display: explode(';', $this->album);
            }
            # update record
            else {
                switch (Yii::$app->controller->action->id) {
                    # 内容普通修改
                case 'update':
                    $this->expect_send_at = strtotime($this->expect_send_at);
                    $this->mtime = time();
                    $this->modified_staff_id = Yii::$app->getUser()->identity->id;
                    $this->album = implode(';', $this->album);
                    break;
                    # 内容通过验证
                case 'verify':
                    $this->verified_at = time();
                    $this->verified_staff_id = Yii::$app->getUser()->identity->id;
                    break;
                default:
                    break;
                }
            }
            return true;
        }
        return false;
    }/*}}}*/

    public function scenarios()
    {/*{{{*/
        $s = parent::scenarios();
        $s['verify'] = [
            'is_verified', 'rate', 'remark'
        ];
        return $s;
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
}
