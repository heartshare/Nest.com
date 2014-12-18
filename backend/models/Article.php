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
class Article extends Backend
{

    # 保存要存入到 {{%article_category}} 中的数据
    public $article_category;

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
            [['title', 'content', 'is_draft', 'staff_visible', 'is_top', 'article_category'], 'required'],
            [['is_trashed', 'staff_id', 'is_draft', 'staff_visible', 'is_top', 'ctime', 'top_rank'], 'integer'],
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
            'staff_id' => '创建者',
            'title' => '标题',
            'content' => '内容',
            'is_draft' => '草稿',
            'staff_visible' => '员工可见性',
            'is_top' => '置顶',
            'ctime' => '创建时间',
            'top_rank' => '置顶权重',
            'is_trashed'  => '是否已软删除',
            'article_category' => '分类可见性',
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

    public function afterSave($isInsert, $changedArrtibutes)
    {/*{{{*/
        parent::afterSave($isInsert, $changedArrtibutes);

        $addArticleCategory = function ($articleCategory, $article_id)
        {/*{{{*/
            $message = [];
            if ($articleCategory && is_array($articleCategory)) {
                foreach ($articleCategory as $item) {
                    $uniqueId = static::catUniqueId($article_id, $item);
                    $model = ArticleCategory::findByUniqueId($uniqueId);
                    $model->article_id = $article_id;
                    $model->category_id = $item;
                    $model->unique_id = $uniqueId;
                    # 记录错误消息
                    if (!$model->save())
                        $message = $model->getErrors();
                }
            }
            if ($message)
                throw new \yii\web\ServerException('添加 article_category表失败');
        };/*}}}*/

        # 创建/修改文章, 保存与 category 的关系
        if ($isInsert) {
            $addArticleCategory($this->article_category, $this->id);
        } else {
            # 删除所有记录
            Yii::$app->db->createCommand()
                ->delete('{{%article_category}}', [ 'article_id' => $this->id ])->execute();
            $addArticleCategory($this->article_category, $this->id);
        }
    }/*}}}*/

}
