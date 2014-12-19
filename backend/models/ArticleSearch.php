<?php

namespace backend\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * ArticleSearch class file.
 * @Author haoliang
 * @Date 08.12.2014 17:31
 */
class ArticleSearch extends Article
{

    # 存储 搜索前的过滤条件
    public $where = [];

    public function rules()
    {/*{{{*/
        # 确定可以被搜索的字段
        return [
            ['title', 'safe']
        ];
    }/*}}}*/

    public function scenarios()
    {/*{{{*/
        # 使用 yii\base\Model 的 scenarios
        return \yii\base\Model::scenarios();
    }/*}}}*/

    public function search($params)
    {/*{{{*/

        $query = Article::find()->select([
            'id', 'title', 'is_draft', 'staff_visible',
            'is_top', 'ctime', 'top_rank'
        ])->where($this->where);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (! ($this->load($params) && $this->validate()))
            return $dataProvider;

        #$query->andFilterWhere(['staff_id' => $this->staff_id]);
        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }/*}}}*/

}
