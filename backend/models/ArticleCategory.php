<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%article_category}}".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $category_id
 * @property integer $unique_id
 *
 * @property Article $article
 * @property Category $category
 */
class ArticleCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {/*{{{*/
        return '{{%article_category}}';
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            [['article_id', 'category_id', 'unique_id'], 'required'],
            [['article_id', 'category_id'], 'integer'],
            [['unique_id'], 'unique']
        ];
    }/*}}}*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {/*{{{*/
        return [
            'id' => '权限编号',
            'article_id' => '文章编号',
            'category_id' => '分类编号',
            'unique_id' => '由article_id和category_id拼成的唯一的数字',
        ];
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {/*{{{*/
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }/*}}}*/

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {/*{{{*/
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }/*}}}*/

    public static function findByUniqueId($uniqueId)
    {/*{{{*/
        $model = static::find()->where(['unique_id' => $uniqueId])->one();
        return $model ?: (new static);
    }/*}}}*/

    public static function findByArticleId($articleId)
    {/*{{{*/
        return static::find()->where(['article_id' => $articleId])->asArray()->all();
    }/*}}}*/

    /**
    * @brief if the article_category has a record
    * @param $article_id
    * @param $category_id int|KVarray
    * @return boolean
     */
    public static function modelExists($article_id, $category_id)
    {/*{{{*/
        return static::find()->where([
            'article_id' => $article_id,
            'category_id' => $category_id,
        ])->exists();
    }/*}}}*/

}
