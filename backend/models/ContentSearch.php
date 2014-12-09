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

    public $ctimeBegin, $ctimeEnd;

    /**
     * @inheritdoc
     */
    public function rules()
    {/*{{{*/
        return [
            [['id', 'category_id', 'staff_id', 'expect_send_at', 'ctime', 'is_draft', 'is_important', 'mtime', 'modified_staff_id', 'is_verified', 'verified_at', 'rate', 'verified_staff_id', 'is_published', 'actual_send_at', 'reprint_num', 'comment_num', 'rank'], 'integer'],
            [['title', 'content', 'source_url', 'album', 'remark', 'publiced_url'], 'safe'],
            [['ctimeBegin', 'ctimeEnd'], 'date', 'format' => 'php:Y-m-d H:i'],
        ];
    }/*}}}*/

    public function attributeLabels()
    {/*{{{*/
        $labels = parent::attributeLabels();
        $labels['ctimeBegin'] = '创建时间起';
        $labels['ctimeEnd'] = '创建时间终';
        return $labels;
    }/*}}}*/


    /**
     * @inheritdoc
     */
    public function scenarios()
    {/*{{{*/
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }/*}}}*/

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {/*{{{*/

        $query = Content::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query->joinWith('category'),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $this->ctimeBegin = !empty($this->ctimeBegin) ? strtotime($this->ctimeBegin): 0;

        $this->ctimeEnd= !empty($this->ctimeEnd) ? strtotime($this->ctimeEnd): time();

        $query->andFilterWhere([
            'category_id' => $this->category_id,
            'staff_id' => $this->staff_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'is_important', $this->is_important])
            ->andFilterWhere(['like', 'is_verified', $this->is_verified])

            # between
            ->andFilterWhere(['between', '{{%content}}.ctime', $this->ctimeBegin, $this->ctimeEnd])

            ->andFilterWhere(['like', 'is_published', $this->is_published]);
            #->andFilterWhere(['like', 'source_url', $this->source_url])
            #->andFilterWhere(['like', 'album', $this->album])
            #->andFilterWhere(['like', 'remark', $this->remark])
            #->andFilterWhere(['like', 'publiced_url', $this->publiced_url]);

        return $dataProvider;
    }/*}}}*/

}
