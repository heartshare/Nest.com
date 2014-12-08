<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Content;

/**
 * ContentSearch represents the model behind the search form about `backend\models\Content`.
 */
class ContentSearch extends Content
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'staff_id', 'expect_send_at', 'ctime', 'is_draft', 'is_important', 'mtime', 'modified_staff_id', 'is_verified', 'verified_at', 'rate', 'verified_staff_id', 'is_published', 'actual_send_at', 'reprint_num', 'comment_num', 'rank'], 'integer'],
            [['title', 'content', 'source_url', 'album', 'remark', 'publiced_url'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Content::find()->select([
            'id', 'category_id', 'title', 'expect_send_at', 'ctime', 'is_draft',
            'is_verified', 'is_published'
        ]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'staff_id' => $this->staff_id,
            'expect_send_at' => $this->expect_send_at,
            'ctime' => $this->ctime,
            'is_draft' => $this->is_draft,
            'is_important' => $this->is_important,
            'mtime' => $this->mtime,
            'modified_staff_id' => $this->modified_staff_id,
            'is_verified' => $this->is_verified,
            'verified_at' => $this->verified_at,
            'rate' => $this->rate,
            'verified_staff_id' => $this->verified_staff_id,
            'is_published' => $this->is_published,
            'actual_send_at' => $this->actual_send_at,
            'reprint_num' => $this->reprint_num,
            'comment_num' => $this->comment_num,
            'rank' => $this->rank,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'is_important', $this->content])
            ->andFilterWhere(['like', 'is_verified', $this->content])
            ->andFilterWhere(['like', 'is_published', $this->content]);
            #->andFilterWhere(['like', 'source_url', $this->source_url])
            #->andFilterWhere(['like', 'album', $this->album])
            #->andFilterWhere(['like', 'remark', $this->remark])
            #->andFilterWhere(['like', 'publiced_url', $this->publiced_url]);

        return $dataProvider;
    }
}
