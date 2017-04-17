<?php

namespace app\modules\adminCD\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\adminCD\models\Warehousing;

/**
 * WarehousingSearch represents the model behind the search form about `app\modules\adminCD\models\Warehousing`.
 */
class WarehousingSearch extends Warehousing
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'quantity', 'imported_at', 'imported_by', 'created_at', 'created_by'], 'integer'],
            [['note'], 'safe'],
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
        $query = Warehousing::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'imported_at' => $this->imported_at,
            'imported_by' => $this->imported_by,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
        ]);

        $query->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
